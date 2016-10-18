<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_CommonAdmin extends Controller_CommonAuthorized {

    public function before()
    {
        parent::before();

        if ($user = Auth::instance()->get_user())
        {
            if (!($user->has('roles', ORM::factory('role')->where('id', '=', 2)->find())))
            {
                $session = Session::instance();
                $session->set('redirectAfterLogin', $_SERVER['REQUEST_URI']);
                HTTP::redirect('');
            }
        }
    }
}