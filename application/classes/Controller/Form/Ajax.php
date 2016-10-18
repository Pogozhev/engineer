<?php
defined('SYSPATH') OR die('No direct script access.');

/**
 * Контроллер для запросов Ajax
 *
 * @copyright Alex Kaziev (c) 2015
 */
class Controller_Form_Ajax extends Controller_Common {

    public function action_unique()
    {
        if (!isset($_POST['email'])) {
            echo json_encode(true);
        }
        else
        {
            $value = UTF8::trim(UTF8::strtolower($_POST['email']));
            $owner = ORM::factory('User')
                ->where('email', '=', $value)
                ->find();

            if ($owner->loaded())
            {
                echo json_encode(false);
            }
            else
            {
                echo json_encode(true);
            }
        }
    }

    public function action_uniqueleader()
    {
        if (!isset($_POST['email_leader'])) {
            echo json_encode(true);
        }
        else
        {
            $value = UTF8::trim(UTF8::strtolower($_POST['email_leader']));
            $owner = ORM::factory('User')
                ->where('email', '=', $value)
                ->find();

            if ($owner->loaded())
            {
                echo json_encode(false);
            }
            else
            {
                echo json_encode(true);
            }
        }
    }


}