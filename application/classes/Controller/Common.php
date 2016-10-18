<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller {

    public function before()
    {
        //Сюда можно впендюрить некие опции, общие для всех наследуемых контроллеров

        /*
        $anketa_link = '';
        $list_link = '';

        parent::before();
        if ($user = Auth::instance()->get_user())
        {
            if ($user->has('roles', ORM::factory('role')->where('id', '=', 1)->find()))
            {
                $anketa_link = "<a href=\"".URL::site('form')."\">Регистрация на конференцию</a>";
                if ($user->has('roles', ORM::factory('role')->where('id', '=', 3)->find()))
                {
                    $list_link = "<a href=\"".URL::site('list')."\">Список анкет</a>";
                }
            }
            View::set_global('reg_link_title', 'Профиль');
        }
        else
        {
            View::set_global('reg_link_title', 'Регистрация');
        }
        View::set_global('strange', $list_link);
        View::set_global('anketa_link', $anketa_link);*/

    }
}