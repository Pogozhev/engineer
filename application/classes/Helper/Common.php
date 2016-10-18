<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Common {

    public static function is_admin()
    {
        //Проверяем, авторизован ли пользователь и имеет ли роль администратора
        $user = Auth::instance()->get_user();
        $is_admin = false;
        if (isset($user))
        {
            if ($user->has('roles', ORM::factory('role')->where('id', '=', 2)->find()))
                $is_admin = true;
        }
        return $is_admin;
    }

    /**
     * @param View $view
     */
    public static function init_roles($view)
    {
        //Проводим проверки на наличие ролей, проектов и т.д.
        $view
            ->set('user', Auth::instance()->get_user())
            ->set('is_admin', Helper_Common::is_admin());
    }

    /**
     * @param ORM $vacancy
     */
    //TODO не удалять вакансии
    public static function delete_vacancy($vacancy)
    {
        $applications = $vacancy->applications->find_all();
        foreach ($applications as $application) $application->delete();

        $vacancy->delete();
    }

    /**
     * @param ORM $participant
     */
    public static function delete_participant($participant)
    {
        $masters = $participant->masters->find_all();
        foreach ($masters as $master) $master->delete();

        $university = $participant->university;
        if($university->loaded()) $university->delete();

        $school = $participant->school;
        if($school->loaded()) $school->delete();

        $user = $participant->user;
        if($user->loaded()) $user->delete();

        $participant->delete();
    }

    /**
     * @param ORM $project
     */
    public static function delete_project($project)
    {
        $participants = $project->participants->find_all();
        foreach($participants as $participant) $project->remove('participants', $participant);

        $invitations = $project->invitations->find_all();
        foreach($invitations as $invitation) $invitation->delete();

        $vacancies = $project->vacancies->find_all();
        foreach($vacancies as $vacancy) Helper_Common::delete_vacancy($vacancy);

        $project->delete();
    }

    public static function get_hashtags($string) {
        $hashtags= FALSE;
        preg_match_all("/(#\w+)/u", $string, $matches);
        if ($matches) {
            $hashtagsArray = array_count_values($matches[0]);
            $hashtags = array_keys($hashtagsArray);
        }
        return $hashtags;
    }
}