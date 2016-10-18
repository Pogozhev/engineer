<?php defined('SYSPATH') or die('No direct script access.');

class Model_Project extends ORM {
    protected $table_name = 'projects';

    protected $_has_many = array(
        'participants' => array(
            'model'         => 'Participant',
            'through'       => 'project_participants',
            'far_key'       => 'participant_id',
            'foreign_key'   => 'project_id',
        ),
        'vacancies' => array(
            'model'       => 'Vacancy',
            'foreign_key' => 'project_id',
        ),
        'invitations' => array(
            'model'       => 'Project_Invitation',
            'foreign_key' => 'project_id',
        ),
    );
    protected $_belongs_to = array(
        'branch' => array(
            'model'       => 'Branch',
            'foreign_key' => 'branch_id',
        ),
        'leader' => array(
            'model'         => 'Participant',
            'foreign_key'   => 'leader_id',
        ),
    );
}
