<?php defined('SYSPATH') or die('No direct script access.');

class Model_Participant_Master extends ORM {
    protected $table_name = 'participant_masters';

    protected $_belongs_to = array(
        'participant' => array(
            'model'       => 'Participant',
            'foreign_key' => 'participant_id',
        ),
        'master' => array(
            'model'       => 'Master',
            'foreign_key' => 'master_id',
        ),
    );
}
