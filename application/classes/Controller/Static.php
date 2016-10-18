<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Common {

    public function action_sections()
    {
        $view = View::factory('/pages/sections.tpl');
        Helper_Common::init_roles($view);
        $this->response->body($view);
    }

    public function action_about()
    {
        $view = View::factory('/pages/about.tpl');
        Helper_Common::init_roles($view);
        $this->response->body($view);
    }
}