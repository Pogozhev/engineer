<?php defined('SYSPATH') or die('No direct script access.');

class Model_Participant_School extends ORM {
    protected $table_name = 'participant_schools';

    protected $_belongs_to = array(
        'participant' => array(
            'model'       => 'Participant',
            'foreign_key' => 'participant_id',
        ),
    );
}
