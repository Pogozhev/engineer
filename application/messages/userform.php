<?php
return array(
    'name'                => array(
        'not_empty'
    ),
    'secondname'          => array(
        'not_empty'
    ),
    'middlename'          => array(
        'not_empty'
    ),
    'email'               => array(
        'not_empty'
    ),
    'phone'               => array(
        'not_empty'
    ),
    'school_name'         => array(
        'not_empty'
    ),
    'school_class'        => array(
        'not_empty'
    ),
    'higheduc_name'       => array(
        'not_empty'
    ),
    'higheduc_institute'  => array(
        'not_empty'
    ),
    'higheduc_speciality' => array(
        'not_empty'
    ),
    'idea_name'           => array(
        'not_empty'
    ),
    'idea_problem'        => array(
        'not_empty'
    ),
    'idea_users'          => array(
        'not_empty'
    ),
    'terms'               => array(
        'not_empty'
    ),
    'file'                => array(
        'Upload::valid',
        'Upload::not_empty',
        'Upload::type',
        'Upload::size',
    ),
);
?>