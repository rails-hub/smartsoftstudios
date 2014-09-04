<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

    'driver' => 'smtp',

    'options' => array(
        'hostname' => 'smtp.gmail.com',
        'port' => '465',
        'username' => 'testtest@gmail.com',
        'password' => 'testtest',
        'encryption' => 'ssl',
    ),
);
?>
