<?php defined('SYSPATH') or die('No direct script access.');

class Model_Participant_University extends ORM {
    protected $table_name = 'participant_universities';

    protected $_belongs_to = array(
        'participant' => array(
            'model'       => 'Participant',
            'foreign_key' => 'participant_id',
        ),
        'course' => array(
            'model'       => 'Course',
            'foreign_key' => 'course_id',
        ),
    );
}
