<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends ORM {
    protected $table_name = 'roles';

    protected $_has_many = array(
        'users' => array(
            'model'         => 'User',
            'through'       => 'roles_users',
            'far_key'       => 'user_id',
            'foreign_key'   => 'role_id',
        ),
    );
}
