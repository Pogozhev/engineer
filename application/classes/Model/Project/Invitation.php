<?php defined('SYSPATH') or die('No direct script access.');

class Model_Project_Invitation extends ORM {
    protected $table_name = 'project_invitations';

    protected $_belongs_to = array(
        'project' => array(
            'model'       => 'Project',
            'foreign_key' => 'project_id',
        ),
    );
}
