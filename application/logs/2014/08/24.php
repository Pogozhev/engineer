<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-24 19:22:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update userform model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:32
2014-08-24 19:22:16 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(32): Kohana_ORM->update()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:32
2014-08-24 19:22:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: projtype ~ APPPATH\classes\Controller\anketa.php [ 44 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:44
2014-08-24 19:22:51 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 44, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:44
2014-08-24 19:23:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: projtype ~ APPPATH\classes\Controller\anketa.php [ 44 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:44
2014-08-24 19:23:46 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 44, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:44
2014-08-24 19:24:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: projecttype ~ APPPATH\classes\Controller\anketa.php [ 44 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:44
2014-08-24 19:24:01 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 44, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:44