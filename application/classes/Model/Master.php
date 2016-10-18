<?php defined('SYSPATH') or die('No direct script access.');

class Model_Master extends ORM {
    protected $table_name = 'masters';

    protected $_has_many = array(
        'participants' => array(
            'model'         => 'Participant',
            'through'       => 'participant_masters',
            'far_key'       => 'participant_id',
            'foreign_key'   => 'master_id',
        ),
    );
}
