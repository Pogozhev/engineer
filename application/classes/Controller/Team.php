<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Отвечает за функции личного кабинета по управлению проектом
 *
 */
class Controller_Team extends Controller_Common {

    /**
     * Удалить участника из команды
     */
    public function action_remove_participant()
    {
        $participant_id = $this->request->query('participant_id');
        $project_id = $this->request->query('project_id');
        ORM::factory('Project', $project_id)->remove('participants', ORM::factory('Participant', $participant_id));

        $this->redirect($this->request->referrer());
    }

    /**
     * Создать вакансию
     */
    public function action_add_vacancy()
    {
        $tags = '';
        $post = $_POST;
        foreach($post['tags'] as $tag)
        {
            if(substr($tag, 0, 1) != "#")
                $tag = "#" . $tag;
            $post['vacancy_description'] = $post['vacancy_description'] . " " . $tag;
        }


        ORM::factory('Vacancy')
            ->set('title', $_POST['vacancy_title'])
            ->set('description', $post['vacancy_description'])
            ->set('project_id', $_POST['project_id'])
            ->save();

        $this->redirect($this->request->referrer());
    }

    /**
     * Удалить вакансию (будет отмечена как удалённая в БД)
     */
    public function action_remove_vacancy()
    {
        $vacancy_id = $this->request->query('vacancy_id');
        ORM::factory('Vacancy', $vacancy_id)
            ->set('status', 2)
            ->save();

        $this->redirect($this->request->referrer());
    }

    /**
     * Ответить согласием на заявку на вакансию (будет отмечена в БД как заполненная)
     */
    public function action_add_participant()
    {
        $participant_id = $this->request->query('participant_id');
        $project_id = $this->request->query('project_id');

        $participant = ORM::factory('Participant', $participant_id);
        ORM::factory('Project', $project_id)->add('participants', $participant);

        ORM::factory('Vacancy', $this->request->query('vacancy_id'))
            ->set('status', 1)
            ->save();

        $invitations = ORM::factory('Project_Invitation')
            ->where('project_id', '=', $project_id)
            ->where('email', '=', $participant->email)
            ->find_all();
        foreach($invitations as $invitation) $invitation->delete();

        $this->redirect($this->request->referrer());
    }

    /**
     * Создать приглашение
     */
    public function action_add_invitation()
    {
        $invitation = ORM::factory('Project_Invitation')
            ->set('project_id', $_POST['project_id'])
            ->set('email', $_POST['email_invite'])
            ->save();

        if(isset($_POST['notify']))
        {
            $invitation_view = View::factory('/form/email/invitation.tpl');
            $invitation_view->set('project', $invitation->project);
            Helper_Common::init_roles($invitation_view);

            $config = Kohana::$config->load('email');
            Email::connect($config);
            $to = $invitation->email;
            $subject = 'Приглашение в проект сайте engineer.tpu.ru';
            $from = 'engineer@tpu.ru';
            $message = $invitation_view->render();
            Email::send($to, $from, $subject, $message, $html = true);
        }
        $this->redirect($this->request->referrer());
    }

    /**
     * Удалить приглашение
     */
    public function action_delete_invitation()
    {
        ORM::factory('Project_Invitation', $this->request->query('invitation_id'))->delete();
        $this->redirect($this->request->referrer());
    }
}