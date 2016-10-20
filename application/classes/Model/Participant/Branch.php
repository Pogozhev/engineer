<?php defined('SYSPATH') or die('No direct script access.');

class Model_Participant_Branch extends ORM {
    protected $table_name = 'participant_branches';

    protected $_has_many = array(
        'participants' => array(
            'model'       => 'Participant',
            'foreign_key' => 'participant_branch_id',
        ),
    );
}