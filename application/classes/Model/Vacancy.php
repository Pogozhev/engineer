<?php defined('SYSPATH') or die('No direct script access.');

class Model_Vacancy extends ORM {
    protected $table_name = 'vacancies';

    protected $_belongs_to = array(
        'project' => array(
            'model'       => 'Project',
            'foreign_key' => 'project_id',
        ),
    );

    protected $_has_many = array(
        'participants' => array(
            'model'         => 'Participant',
            'through'       => 'vacancy_applications',
            'far_key'       => 'participant_id',
            'foreign_key'   => 'vacancy_id',
        ),
        'applications' => array(
            'model'       => 'Vacancy_Application',
            'foreign_key' => 'vacancy_id',
        ),
    );

    public function get_amount()
    {
        return ORM::factory('Vacancy_Application', $this->pk())->count_all();
        
    }
}
