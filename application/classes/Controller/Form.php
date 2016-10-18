<?php defined('SYSPATH') or die('No direct script access.');

/**
 * В данном контроллере - всё, что связано с проектами и присоединением к ним
 */
class Controller_Form extends Controller_Common {

    /**
     * Страница регистрации проекта
     */
    public function action_index()
    {
        $view = View::factory('/form/form.tpl');
        Helper_Common::init_roles($view);

        $branches = ORM::factory('Branch')->find_all();
        $courses = ORM::factory('Course')->find_all();

        $view
            ->set('branches', $branches)
            ->set('courses', $courses);

        $this->response->body($view);
    }

    /**
     * Сохранение проекта
     */
    public function action_saveproject()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $post = $_POST;
            $participant = ORM::factory('Participant', array('user_id' => Auth::instance()->get_user()->id));

            //Записываем объект проекта
            $project = ORM::factory('Project')
                ->set('title', $post['project_title'])
                ->set('description', $post['project_description'])
                ->set('branch_id', $post['project_branch'])
                ->set('leader_id', $participant->id)
                ->set('year', intval(date("o")))
                ->save();
            $project->add('participants', $participant);

            //Проходим по всем приглашениям и записываем их данные
            foreach ($post['email_invite'] as $k => $email)
            {
                if($k != 'myid') //Убедимся, что не заносим в БД шаблон
                {
                    $invitation = ORM::factory('Project_Invitation')
                        ->set('project_id', $project->id)
                        ->set('email', $email)
                        ->save();

                    if(isset($post['notify'][$k]))
                    {
                        $invitation_view = View::factory('/form/email/invitation.tpl');
                        $invitation_view->set('project', $project);
                        Helper_Common::init_roles($invitation_view);

                        $config = Kohana::$config->load('email');
                        Email::connect($config);
                        $to = $email;
                        $subject = 'Приглашение в проект сайте engineer.tpu.ru';
                        $from = 'engineer@tpu.ru';
                        $message = $invitation_view->render();
                        Email::send($to, $from, $subject, $message, $html = true);
                    }
                }
            }

            //Проходим по всем вакансиям и записываем их данные
            foreach ($post['vacancy_title'] as $k => $vacancy_title)
            {
                if($k != 'vid') //Убедимся, что не заносим в БД шаблон
                {
                    $vacancy = ORM::factory('Vacancy')
                        ->set('title', $post['vacancy_title'][$k])
                        ->set('description', $post['vacancy_description'][$k])
                        ->set('project_id', $project->id)
                        ->save();
                }
            }

            HTTP::redirect('form/registered');
        }
        HTTP::redirect('');
    }

    /**
     * Принять приглашение в проект. Заявки на вакансии в этот проект помечаются отменёнными
     */
    public function action_invitation_accept()
    {
        $invitation = ORM::factory('Project_Invitation', $this->request->query('invitation_id'));
        $participant = Auth::instance()->get_user()->participant;

        ORM::factory('Project', $invitation->project->pk())->add('participants', $participant);
        $invitation->delete();

        $vids = array();
        foreach($invitation->project->vacancies->find_all() as $vacancy) $vids[] = $vacancy->pk();
        if(!empty($vids))
        {
            $vacancy_application = ORM::factory('Vacancy_Application')
                ->where('participant_id', '=', $participant->pk())
                ->where('vacancy_id', 'IN', $vids)
                ->find();
            if($vacancy_application->loaded())
                $vacancy_application->vacancy
                    ->set('status', 2)
                    ->save();
        }
        $this->redirect($this->request->referrer());
    }

    /**
     * Отказаться от приглашения в проект
     */
    public function action_invitation_decline()
    {
        $invitation = ORM::factory('Project_Invitation', $this->request->query('invitation_id'));
        $invitation->delete();
        $this->redirect($this->request->referrer());
    }

    /**
     * Подать заявку на заполнение вакансии
     */
    public function action_vacancy_apply()
    {
        $user = Auth::instance()->get_user();
        $tags = ORM::factory('Idea_Tag')->find_all();

        $vacancy_id = $this->request->query('vacancy_id');
        $application = ORM::factory('Vacancy_Application')
            ->set('participant_id', $user->participant->id)
            ->set('vacancy_id', $vacancy_id)
            ->save();



        $this->redirect($this->request->referrer());
    }


    public function action_registered()
    {
        $view = View::factory('/form/registered.tpl');
        Helper_Common::init_roles($view);

        $this->response->body($view);
    }
}