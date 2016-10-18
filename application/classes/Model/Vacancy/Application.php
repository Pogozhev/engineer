<?php defined('SYSPATH') or die('No direct script access.');

class Model_Vacancy_Application extends ORM {
    protected $table_name = 'vacancy_applications';

    protected $_belongs_to = array(
        'participant' => array(
            'model'       => 'Participant',
            'foreign_key' => 'participant_id',
        ),
        'vacancy' => array(
            'model'       => 'Vacancy',
            'foreign_key' => 'vacancy_id',
        ),
    );
}
