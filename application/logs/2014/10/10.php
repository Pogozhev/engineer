<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-10 00:30:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\pages\mainform.php [ 445 ] in Z:\home\kohana\www\application\views\pages\mainform.php:445
2014-10-10 00:30:00 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\mainform.php(445): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 445, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(41): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\mainform.php:445
2014-10-10 00:31:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\mainform.php [ 448 ] in Z:\home\kohana\www\application\views\pages\mainform.php:448
2014-10-10 00:31:38 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\mainform.php(448): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\kohana\...', 448, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(41): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\mainform.php:448
2014-10-10 00:32:09 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:32:09 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('uchrediteli.doc...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:35:07 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:35:07 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('uchrediteli.doc...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:35:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:35:24 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('Zayavka_na_shko...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:49:36 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:49:36 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('Zayavka_na_shko...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:54:45 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:54:45 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('uchrediteli.doc...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 00:55:22 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 146 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:146
2014-10-10 00:55:22 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type('uchrediteli.doc...', Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:146
2014-10-10 01:00:05 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, string given, called in Z:\home\kohana\www\application\classes\Model\File.php on line 68 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:52
2014-10-10 01:00:05 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 52, Array)
#1 Z:\home\kohana\www\application\classes\Model\File.php(68): Kohana_Upload::save('Zayavka_na_shko...', 'Z', 'Z:\home\kohana\...')
#2 [internal function]: Model_File->file_save('Zayavka_na_shko...')
#3 Z:\home\kohana\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:52
2014-10-10 08:19:06 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 08:19:06 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 08:19:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 08:19:37 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('Informatsionnoe...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 08:24:11 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH\classes\Kohana\Upload.php [ 129 ] in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 08:24:11 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('Informatsionnoe...')
#2 Z:\home\kohana\www\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\fill.php(53): Kohana_ORM->save()
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\system\classes\Kohana\Upload.php:129
2014-10-10 08:28:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\fill.php [ 53 ] in file:line
2014-10-10 08:28:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 08:38:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\fill.php [ 53 ] in file:line
2014-10-10 08:38:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 08:38:53 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 08:38:53 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('files')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 08:40:25 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 08:40:25 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('files')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 08:42:08 --- CRITICAL: View_Exception [ 0 ]: The requested view files could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 08:42:08 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('files')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('files', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('files')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 08:50:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: anketa_link ~ APPPATH\views\template.php [ 34 ] in Z:\home\kohana\www\application\views\template.php:34
2014-10-10 08:50:17 --- DEBUG: #0 Z:\home\kohana\www\application\views\template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 34, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\template.php:34
2014-10-10 08:51:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\fill.php [ 53 ] in file:line
2014-10-10 08:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:02:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_userform' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-10 09:02:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:03:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_form' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-10 09:03:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:04:01 --- CRITICAL: Kohana_Exception [ 0 ]: The description property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-10 09:04:01 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('description')
#1 Z:\home\kohana\www\application\views\pages\show.php(25): Kohana_ORM->__get('description')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(41): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-10 09:36:47 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/abouteto could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 09:36:47 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/abouteto')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/abouteto', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\static.php(8): Kohana_View::factory('/pages/abouteto')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Static->action_abouteto()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-10-10 09:42:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_institute' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-10 09:42:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 09:43:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_institute' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-10 09:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 22:32:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_userform' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-10 22:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 22:32:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ')' ~ APPPATH\classes\Model\File.php [ 30 ] in file:line
2014-10-10 22:32:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 22:44:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\fill.php [ 23 ] in file:line
2014-10-10 22:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-10 22:44:54 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `files` (`file`) VALUES (('КазиевАБ_с9.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Z:\\tmp\\phpE3BC.tmp', 0, 23647)) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-10 22:44:54 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\fill.php(57): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-10 22:45:32 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `files` (`file`) VALUES (('КазиевАБ_с9.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Z:\\tmp\\php77FE.tmp', 0, 23647)) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-10 22:45:32 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\fill.php(57): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-10 23:24:11 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `files` (`file`) VALUES (('', '', '', 4, 0)) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-10 23:24:11 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\fill.php(58): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251