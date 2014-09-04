<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-21 11:37:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:37:00 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/smartsoft/index.php(118): Kohana_Request->execute()
#3 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:37:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:37:39 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/smartsoft/index.php(118): Kohana_Request->execute()
#3 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:37:40 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:37:40 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/smartsoft/index.php(118): Kohana_Request->execute()
#3 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:38:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:38:26 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/smartsoft/index.php(118): Kohana_Request->execute()
#3 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php:114
2014-05-21 11:47:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/View.php:137
2014-05-21 11:47:33 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/smartsoft/index.php(118): Kohana_Request->execute()
#9 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/View.php:137
2014-05-21 12:02:39 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Cookie.php:67
2014-05-21 12:02:39 --- DEBUG: #0 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_pk_id_25_1fff', NULL)
#1 /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_pk_id_25_1fff')
#2 /opt/lampp/htdocs/smartsoft/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /opt/lampp/htdocs/smartsoft/system/classes/Kohana/Cookie.php:67