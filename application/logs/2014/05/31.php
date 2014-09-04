<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-31 01:36:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Cookie.php:67
2014-05-31 01:36:36 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_pk_id_25_1fff', NULL)
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_pk_id_25_1fff')
#2 /opt/lampp/htdocs/smartsoft/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Cookie.php:67