<?php defined('SYSPATH') or die('No direct script access.');

class Model_Branch extends ORM {
    protected $table_name = 'branches';

    protected $_has_many = array(
        'projects' => array(
            'model'       => 'Project',
            'foreign_key' => 'branch_id',
        ),
    );
}
