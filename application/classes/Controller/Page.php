<?php defined('SYSPATH') or die('No direct script access.');

//Название классов отражает расположение класса
class Controller_Page extends Controller_Common {

    /**
     * Главная страница
     */
    public function action_index()
    {
        $view = View::factory('/pages/main.tpl');
        Helper_Common::init_roles($view);

        $this->response->body($view);
    }

    /**
     * Страница списка идей
     */
    function action_ideas()
    {
        $view = View::factory('pages/ideas.tpl');
        Helper_Common::init_roles($view);

        //Загрузка идей и тегов по умолчанию из БД
        $ideas = ORM::factory('Idea')->find_all()->as_array();
        $tags = ORM::factory('Idea_Tag')->find_all();

        //Поиск по идеям
        if(isset($_GET))
        {
            if(isset($_GET['tags']))
            {
                $count = count($ideas);
                for ($iidea = 0; $iidea < $count; $iidea++)
                {

                    foreach ($_GET['tags'] as $tag)
                    {
                        if (stripos($ideas[$iidea]->description, $tag) == false)
                        {
                            unset($ideas[$iidea]);
                            break;
                        }
                    }
                }
            }
        }

        $view
            ->set('ideas', $ideas)
            ->set('tags', $tags);

        $this->response->body($view);
    }

    /**
     * Проекты от предприятий
     */
    function action_orgprojects()
    {
        $view = View::factory('/pages/orgprojects.tpl');
        Helper_Common::init_roles($view);

        $projects = ORM::factory('Orgproject')->find_all();
        $view->set('projects', $projects);

        $this->response->body($view);
    }

    /**
     * Список вакансий от проектов
     */
    function action_vacancies()
    {
        $view = View::factory('/pages/vacancies.tpl');
        Helper_Common::init_roles($view);

        $user = Auth::instance()->get_user();
        $participant = $user ? ORM::factory('Participant', array('user_id' => $user->id)) : NULL;
        $vacancies = ORM::factory('Vacancy')
            ->where('status', '=', 0)
            ->find_all();

        $user = Auth::instance()->get_user();
        $has_applied = array();
		if($user)
		{
			foreach ($vacancies as $k => $vacancy)
			{
				$application = ORM::factory('Vacancy_Application')
					->where('participant_id', '=', $user->participant->id)
					->where('vacancy_id', '=', $vacancy->id)
					->find();
				$has_applied[$k] = $application->loaded() ? true : false;
			}
			$view
				->set('has_applied', $has_applied);
		}

        $has_invitations = false;
        if($user)
        {
            $invitations = $user->participant->invitations()->find_all()->as_array();
            if(!empty($invitations))
            {
                $has_invitations = true;
                $view
                    ->set('invitations', $invitations);
            }
        }

        $view
            ->set('participant', $participant)
            ->set('vacancies', $vacancies)
            ->set('has_invitations', $has_invitations);

        $this->response->body($view);
    }

    /**
     * Все проекты ярмарки
     */
    public function action_projects()
    {
        $view = View::factory('/pages/projects.tpl');
        Helper_Common::init_roles($view);

        //Считываем год и получаем соответствующие проекты
        $the_year = Arr::get($_GET, 'year');
        if(!$the_year) $the_year = intval(date("o"));
        $projects = ORM::factory('Project')->where('year', '=', $the_year)->find_all();

        //Получаем список всех годов, в которые были проекты
        $query = DB::select('year')->distinct(TRUE)->from('projects')->execute();
        $years = array_keys($query->as_array('year'));

        $has_invitations = false;
        $user = Auth::instance()->get_user();
        if($user)
        {
            $invitations = $user->participant->invitations()->find_all()->as_array();
            if(!empty($invitations))
            {
                $has_invitations = true;
                $view
                    ->set('invitations', $invitations);
            }
        }

        $view
            ->set('projects', $projects)
            ->set('years', $years)
            ->set('the_year', $the_year)
            ->set('has_invitations', $has_invitations);
        $this->response->body($view);
    }


    /**
     * TODO Фотогалерея, эксперты, новости
     */
    public function action_foto()
    {
        $view = View::factory('/pages/foto.tpl');
        Helper_Common::init_roles($view);
        $this->response->body($view);
    }
    public function action_titles()
    {
        $view = View::factory('/pages/titles.tpl');
        Helper_Common::init_roles($view);
        $this->response->body($view);
    }
    public function action_experts()
    {
        $view = View::factory('/pages/experts.tpl');
        Helper_Common::init_roles($view);

        $projects = ORM::factory('Experts')->find_all();
        $view->set('projects', $projects);

        $this->response->body($view);



    }
}