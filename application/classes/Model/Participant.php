<?php defined('SYSPATH') or die('No direct script access.');

class Model_Participant extends ORM {
    protected $table_name = 'participants';

    protected $_has_one = array(
        'school' => array(
            'model'       => 'Participant_School',
            'foreign_key' => 'participant_id',
        ),
        'university' => array(
            'model'       => 'Participant_University',
            'foreign_key' => 'participant_id',
        ),
    );

    protected $_has_many = array(
        'masters' => array(
            'model'         => 'Master',
            'through'       => 'participant_masters',
            'far_key'       => 'master_id',
            'foreign_key'   => 'participant_id',
        ),
        'projects' => array(
            'model'         => 'Project',
            'through'       => 'project_participants',
            'far_key'       => 'project_id',
            'foreign_key'   => 'participant_id',
        ),
    );

    protected $_belongs_to = array(
        'user' => array(
            'model'       => 'User',
            'foreign_key' => 'user_id',
        ),
    );

    public function invitations()
    {
        return ORM::factory('Project_Invitation')
            ->where('email', '=', $this->email);
    }
}
