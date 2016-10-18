<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Edit extends Controller_Common {

    function action_edit_idea()
    {
        if(isset($_POST))
        {
            $post = $_POST;

            if(isset($post['id']))
            {
                $idea = ORM::factory('Idea')
                    ->where('id', '=', $post['id'])
                    ->find();

                if($idea->loaded())
                {
                    foreach($post['tags'] as $tag)
                    {
                        if(substr($tag, 0, 1) != "#")
                            $tag = "#" . $tag;
                        $post['description'] = $post['description'] . " " . $tag;
                    }

                    $idea
                        ->set('title', $post['title'])
                        ->set('description', $post['description'])
                        ->set('person', $post['person'])
                        ->set('email', $post['email'])
                        ->set('moderated', 1)
                        ->save();
                }
            }
            else
            {
                foreach($post['tags'] as $tag)
                {
                    if(substr($tag, 0, 1) != "#")
                        $tag = "#" . $tag;
                    $post['description'] = $post['description'] . " " . $tag;
                }

                $idea = ORM::factory('Idea')
                    ->set('title', $post['title'])
                    ->set('description', $post['description'])
                    ->set('person', $post['person'])
                    ->set('email', $post['email'])
                    ->set('moderated', 1)
                    ->save();
            }
        }

        $this->redirect($this->request->referrer());
    }
}