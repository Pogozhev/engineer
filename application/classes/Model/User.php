<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {

    protected $_has_one = array(
        'participant' => array(
            'model'       => 'Participant',
            'foreign_key' => 'user_id',
        ),
    );
}
