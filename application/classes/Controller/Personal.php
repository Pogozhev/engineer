<?php
defined('SYSPATH') OR die('No direct script access.');

class Controller_Personal extends Controller_Common {

    /**
     * Отображение моего профиля и формы его редактирования
     */
    public function action_profile()
    {
        $view = View::factory('/personal/profile.tpl');
        Helper_Common::init_roles($view);

        $user = Auth::instance()->get_user();
        if($user)
        {
            $participant = $user->participant;
            $branches = ORM::factory('Branch')->find_all();
            $courses = ORM::factory('Course')->find_all();
            $view
                ->set('participant', $participant)
                ->set('is_university', $participant->is_university == 1)
                ->set('university', $participant->university)
                ->set('school', $participant->school)
                ->set('branches', $branches)
                ->set('courses', $courses);
            $this->response->body($view);
        }
        else HTTP::redirect('/registration');
    }

    /**
     * Отображение списка моих проектов
     */
    public function action_projects()
    {
        $view = View::factory('/personal/projects.tpl');
        Helper_Common::init_roles($view);

        $user = Auth::instance()->get_user();
        if($user)
        {
            //Данные о проектах
            $projects = $user->participant->projects->find_all();
            $participants = $leader_ids = $is_leader = $pinvitations = $vacancies = $vacancies_participants = array();
            foreach($projects as $pid => $project)
            {
                $participants[$pid] = $project->participants->find_all();
                $leader_ids[$pid] = $project->leader->pk();
                $is_leader[$pid] = $leader_ids[$pid] == $user->participant->pk();
                $pinvitations[$pid] = $project->invitations->find_all();
                $vacancies[$pid] = $project->vacancies->where('status', '=', 0)->find_all();
                $vacancies_participants[$pid] = array();
                foreach ($vacancies[$pid] as $vid => $vacancy)
                {
                    $vacancies_participants[$pid][$vid] = $vacancy->participants->find_all();
                }
            }

            //Приглашения
            $has_invitations = false;
            $invitations = $user->participant->invitations()->find_all()->as_array();
            if(!empty($invitations))
            {
                $has_invitations = true;
                $view
                    ->set('invitations', $invitations);
            }

            $view
                ->set('projects', $projects)
                ->set('participants', $participants)
                ->set('leader_ids', $leader_ids)
                ->set('is_leader', $is_leader)
                ->set('pinvitations', $pinvitations)
                ->set('vacancies', $vacancies)
                ->set('vacancies_participants', $vacancies_participants)
                ->set('has_invitations', $has_invitations);
            $this->response->body($view);
        }
        else HTTP::redirect('/registration');
    }

    /**
     * Отображение списка моих мастер-классов
     */
    public function action_masters()
    {
        $view = View::factory('/personal/masters.tpl');
        Helper_Common::init_roles($view);

        $user = Auth::instance()->get_user();
        if($user)
        {
            $participant = $user->participant;
            $masters = ORM::factory('Master')->find_all();

            //Оставшееся количество мест
            $master_lefts = array();
            foreach($masters as $master)
                $master_lefts[] = $master->capacity - $master->participants->count_all();

            //Уже выбранные мастер-классы
            $p_masters = array(array());
            $curr_masters = $participant->masters->find_all();
            if(isset($curr_masters[0])) $p_masters[0][0] = $curr_masters[0]->id;
            if(isset($curr_masters[1])) $p_masters[0][1] = $curr_masters[1]->id;
            if(isset($curr_masters[2])) $p_masters[0][2] = $curr_masters[2]->id;
            if(isset($curr_masters[3])) $p_masters[0][3] = $curr_masters[3]->id;
            if(isset($curr_masters[4])) $p_masters[0][4] = $curr_masters[4]->id;

            $view
                ->set('masters', $masters)
                ->set('master_lefts', $master_lefts)
                ->set('participant', $user->participant)
                ->set('p_masters', $p_masters);

            $this->response->body($view);
        }
        else HTTP::redirect('/registration');
    }

    /**
     * Сохранение списка моих мастер-классов
     */
    public function action_save_masters()
    {
        if(HTTP_REQUEST::POST == $this->request->method())
        {
            $participant_id = $_POST['participant_id'];
            $master1_id = $_POST['master1_id'];
            $master2_id = $_POST['master2_id'];
            $master3_id = $_POST['master3_id'];
            $master4_id = $_POST['master4_id'];
            $master5_id = $_POST['master5_id'];

            $participant = ORM::factory('Participant', $participant_id);
            if($participant->loaded())
            {
                $p_masters = ORM::factory('Participant_Master')->where('participant_id', '=', $participant_id)->find_all();
                foreach($p_masters as $p_master)
                    $p_master->delete();

                if($master1_id > 0)
                    ORM::factory('Participant_Master')
                        ->set('participant_id', $participant_id)
                        ->set('master_id', $master1_id)
                        ->save();
                if($master2_id > 0)
                    ORM::factory('Participant_Master')
                        ->set('participant_id', $participant_id)
                        ->set('master_id', $master2_id)
                        ->save();
                if($master3_id > 0)
                    ORM::factory('Participant_Master')
                        ->set('participant_id', $participant_id)
                        ->set('master_id', $master3_id)
                        ->save();
                if($master4_id > 0)
                    ORM::factory('Participant_Master')
                        ->set('participant_id', $participant_id)
                        ->set('master_id', $master4_id)
                        ->save();
                if($master5_id > 0)
                    ORM::factory('Participant_Master')
                        ->set('participant_id', $participant_id)
                        ->set('master_id', $master5_id)
                        ->save();
            }
        }

        $this->redirect($this->request->referrer());
    }
}