<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Controller_Common {

    /**
     * Страница входа
     */
    public function action_loginpage()
    {
        $view = View::factory('/account/login.tpl');
        Helper_Common::init_roles($view);

        $this->response->body($view);
    }

    /**
     * Страница регистрации
     */
    public function action_registration()
    {
        $view = View::factory('/account/registration.tpl');
        Helper_Common::init_roles($view);

        /*$branches = ORM::factory('Branch')->find_all()*/;
        $courses = ORM::factory('Course')->find_all();
        $tags = ORM::factory('Participant_Tag')->find_all();
        $participant_branches = ORM::factory('Participant_Branch')->find_all();

        $view
            ->set('participant_branches', $participant_branches)
            /*->set('branches', $branches)*/
            ->set('courses', $courses)
            ->set('tags', $tags);

        $this->response->body($view);
    }

    /**
     * Процесс входа
     *
     * $a = 5;
    print_r($a);
    die ();
     */
    public function action_login()
    {
        if (HTTP_Request::POST == $this->request->method()) // если переданы POST данные
        {
            $remember = array_key_exists('rememberme', $this->request->post())
                ? (bool)$this->request->post('rememberme') : FALSE;
            $user = Auth::instance()->login($this->request->post('email'), $this->request->post('password'), $remember);

            if ($user) // если авторизовали успешно
            {
                $session = Session::instance();
                if ($session->get('redirectAfterLogin') != '')
                {
                    $redirect = $session->get('redirectAfterLogin');
                    $session->delete('redirectAfterLogin');
                    HTTP::redirect($redirect); // редиректим куда надо (см. выше)
                }
                HTTP::redirect('');

            }
            else HTTP::redirect('loginpage');
        }
        else  HTTP::redirect('');
    }

    /**
     * Процесс регистрации
     */
    public function action_register()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $post = $_POST;

            //Регистрируем пользователя и редиректим на главную страницу
            $user = ORM::factory('User')
                ->set('email', $post['email'])
                ->set('username', $post['email'])
                ->set('password', $post['password'])
                ->save();
            $user
                ->add('roles', ORM::factory('Role', array('name' => 'login')));

            //Записываем объект участника
            $tags = '';
            $participant_branches = ORM::factory('Participant_Branch')->find_all();
            foreach($post['tags'] as $tag) $tags = $tags . $tag . ', ';
            $participant = ORM::factory('Participant')
                ->set('user_id', $user->id)
                ->set('last_name', $post['last_name'])
                ->set('first_name', $post['first_name'])
                ->set('middle_name', $post['middle_name'])
                ->set('email', $post['email'])
                ->set('phone', $post['phone'])
                ->set('url_vk', $post['url_vk'])
                ->set('url_fb', $post['url_fb'])
                ->set('is_university', $post['is_university'])
                /*->set('competences', $post['competences'])
                ->set('interests', $post['interests'])*/
                ->set('participant_branch_id', $post['participant_branches'])
                ->set('tags', $tags)
                ->save();

            if($post['is_university'] == 0)
            {
                $school = ORM::factory('Participant_School')
                    ->set('participant_id', $participant->id)
                    ->set('title', $post['school_title'])
                    ->set('class', $post['school_class'])
                    ->save();
            }
            else
            {
                $university = ORM::factory('Participant_University')
                    ->set('participant_id', $participant->id)
                    ->set('course_id', $post['course'])
                    ->set('university_title', $post['uni_title'])
                    ->set('institute_title', $post['uni_inst'])
                    ->set('group_title', $post['uni_group'])
                    ->set('is_elit', $post['is_elit'])
                    ->set('elit_group_title', $post['elit_group'])
                    ->save();
            }

            Auth::instance()->force_login($user);
            HTTP::redirect('account/registered');
        }
        HTTP::redirect('');
    }

    /**
     * Изменение данных профиля
     */
    public function action_edit_profile()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $participant_id = $_POST['participant_id'];
            $tags = ORM::factory('Participant_Tag')->find_all();

            //Изменяем объект участника
            $tags = '';
            foreach($_POST['tags'] as $tag) $tags = $tags . ', ' . $tag;
            ORM::factory('Participant', $participant_id)
                ->set('phone', $_POST['phone'])
                ->set('url_vk', $_POST['url_vk'])
                ->set('url_fb', $_POST['url_fb'])
                ->set('is_university', $_POST['is_university'])
         /*
                ->set('competences', $_POST['competences'])
                ->set('interests', $_POST['interests'])
         */
                ->set('tags', $tags)
                ->save();

            if($_POST['is_university'] == 0)
            {
                $university = ORM::factory('Participant_University', array('participant_id' => $participant_id));
                if($university->loaded()) $university->delete();

                $school = ORM::factory('Participant_School', array('participant_id' => $participant_id));
                if(!$school->loaded()) $school = ORM::factory('Participant_School');
                $school
                    ->set('participant_id', $participant_id)
                    ->set('title', $_POST['school_title'])
                    ->set('class', $_POST['school_class'])
                    ->set('tags', $tags)
                    ->save();
            }
            else
            {
                $school = ORM::factory('Participant_School', array('participant_id' => $participant_id));
                if($school->loaded()) $school->delete();

                $university = ORM::factory('Participant_University', array('participant_id' => $participant_id));
                if(!$university->loaded()) $university = ORM::factory('Participant_University');
                $university
                    ->set('participant_id', $participant_id)
                    ->set('course_id', $_POST['course'])
                    ->set('university_title', $_POST['uni_title'])
                    ->set('institute_title', $_POST['uni_inst'])
                    ->set('group_title', $_POST['uni_group'])
                    ->set('is_elit', $_POST['is_elit'])
                    ->set('elit_group_title', $_POST['elit_group'])
                    ->set('tags', $tags)
                    ->save();
            }

            $this->redirect($this->request->referrer());
        }
        HTTP::redirect('');
    }

    /**
     * Смена пароля
     */
    public function action_change_password()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            //Проверка на стороне сервера
            $object = Validation::factory($this->request->post());
            $object
                ->rule('password', 'not_empty')
                ->rule('password', 'min_length', array(':value', '5'));
            if ($object->check())
            {
                DB::update('users')
                    ->set(array('password' => Auth::instance()->hash($_POST['password'])))
                    ->where('id', '=', Auth::instance()->get_user()->id)->execute();
            }
            $this->redirect($this->request->referrer());
        }
        HTTP::redirect('');
    }

    /**
     * Сброс и установление случайного пароля
     */
    public function action_forgot()
    {
        $restore = Arr::get($_GET, 'change');
        if (HTTP_Request::POST == $this->request->method())
        {
            $user = ORM::factory('User', array('email' => $this->request->post('email')));
            if ($user->loaded())
            {
                //Записываем в сессию хэш и почту
                $session = Session::instance();
                $hash = md5(time().$this->request->post('email'));
                $session->set('forgotpass', $hash);
                $session->set('forgotmail', $this->request->post('email'));

                //Отправляем письмо со ссылкой на сброс пароля
                $reset_view = View::factory('/account/email/reset.tpl');
                $reset_view->set('hash', $hash);
                Helper_Common::init_roles($reset_view);

                $config = Kohana::$config->load('email');
                Email::connect($config);
                $to = $this->request->post('email');
                $subject = 'Сброс пароля на сайте engineer.tpu.ru';
                $from = 'engineer@tpu.ru';
                $message = $reset_view->render();
                Email::send($to, $from, $subject, $message, $html = true);

                HTTP::redirect('account/forgotsent');

            }
        }
        //Если человек прошел по ссылке в письме
        elseif ($restore)
        {
            $session = Session::instance();
            $forgotpass = $session->get('forgotpass');
            if ($session->get('forgotpass') === $restore) // проверяем его сессию - действительно ли именно он запросил сброс?
            {
                //Генерируем новый пароль
                $newpass = substr(md5(time().$session->get('forgotmail')), 0, 8);
                DB::update('users')->set(array('password' => Auth::instance()->hash_password($newpass)))->where('email', '=', $session->get('forgotmail'))->execute();

                //Отправляем письмо с новым паролем
                $newpass_view = View::factory('/account/email/newpass.tpl');
                $newpass_view->set('newpass', $newpass);
                Helper_Common::init_roles($newpass_view);

                $config = Kohana::$config->load('email');
                Email::connect($config);
                $to = $session->get('forgotmail');
                $subject = 'Новый пароль на сайте engineer.tpu.ru';
                $from = 'engineer@tpu.ru';
                $message = $newpass_view->render();
                Email::send($to, $from, $subject, $message, $html = true);

                HTTP::redirect('account/forgotcomplete');

                //Чистим сессию
                $session->delete('forgotpass');
                $session->delete('forgotmail');
            }
            else
            {
                HTTP::redirect('');
            }
        }
    }

    /**
     * Разлогинивание
     */
    public function action_logout()
    {
        Auth::instance()->logout();
        HTTP::redirect('');
    }

    /**
     * Информационные странички
     */
    function action_registered()
    {
        $view = View::factory('/account/registered.tpl');
        Helper_Common::init_roles($view);

        $this->response->body($view);
    }
    public function action_forgotsent()
    {
        $view = View::factory('/account/forgotsent.tpl');
        Helper_Common::init_roles($view);

        $this->response->body($view);
    }
    public function action_forgotcomplete()
    {
        $view = View::factory('/account/forgotcomplete.tpl');
        Helper_Common::init_roles($view);

        $this->response->body($view);
    }
}