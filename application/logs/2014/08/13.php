<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-13 17:01:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\welcome.php [ 1 ] in Z:\home\kohana\www\application\views\welcome.php:1
2014-08-13 17:01:24 --- DEBUG: #0 Z:\home\kohana\www\application\views\welcome.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\kohana\www\application\classes\Controller\Welcome.php(15): Kohana_Response->body(Object(View))
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\kohana\www\application\views\welcome.php:1
2014-08-13 17:02:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\welcome.php [ 1 ] in file:line
2014-08-13 17:02:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 21:42:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in file:line
2014-08-13 21:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 21:42:45 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:17
2014-08-13 21:42:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:17
2014-08-13 21:43:20 --- CRITICAL: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in file:line
2014-08-13 21:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 21:43:38 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:17
2014-08-13 21:43:38 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:17
2014-08-13 22:21:33 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:17
2014-08-13 22:21:33 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(17): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:17
2014-08-13 22:22:17 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\Welcome.php [ 17 ] in file:line
2014-08-13 22:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line