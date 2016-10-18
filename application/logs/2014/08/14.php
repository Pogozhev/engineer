<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-14 08:27:42 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:27:42 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(30): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:28:32 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:28:32 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(30): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:28:33 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:28:33 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(30): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:28:34 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 30 ] in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:28:34 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Welcome.php(30): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 30, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Welcome.php:30
2014-08-14 08:42:54 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-08-14 08:42:54 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-08-14 18:49:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH\classes\Controller\common.php [ 16 ] in file:line
2014-08-14 18:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line