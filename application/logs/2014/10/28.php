<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-28 13:52:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Authorized' not found ~ APPPATH\classes\Controller\CommonAdmin.php [ 3 ] in file:line
2014-10-28 13:52:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 15:53:38 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 15:53:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('\#user\#', '??????????????', '2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 15:54:11 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 15:54:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('\#user\#/i', '??????????????', '2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 15:56:32 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 15:56:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('\#user\#/i', '??????????????', '2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 15:59:42 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 15:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('user', '??????????????', '2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:00:20 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 16:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('user', '??????????????', '2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:00:37 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 16:00:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('user', 'name', '2')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:01:09 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 16:01:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('user', 'name', 'return user sou...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:01:48 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 16:01:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('foobar', 'name', 'return foobar s...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:01:52 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Delimiter must not be alphanumeric or backslash ~ APPPATH\classes\Controller\Admin.php [ 10 ] in file:line
2014-10-28 16:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(10): preg_replace('foobar', 'name', 'return foobar s...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:03:53 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list.php [ 1 ] in Z:\home\kohana\www\application\views\list.php:1
2014-10-28 16:03:53 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\list.php:1
2014-10-28 16:04:21 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list.php [ 1 ] in Z:\home\kohana\www\application\views\list.php:1
2014-10-28 16:04:21 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 1, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\list.php:1
2014-10-28 16:12:26 --- CRITICAL: ErrorException [ 2 ]: file_put_contents(http://kohana/uploads/empty.rtf): failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\Controller\Admin.php [ 15 ] in file:line
2014-10-28 16:12:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(15): file_put_contents('http://kohana/u...', '{\rtf1\adeflang...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:15:55 --- CRITICAL: ErrorException [ 2 ]: fopen(http://kohana/uploads/empty.rtf): failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\Controller\Admin.php [ 15 ] in file:line
2014-10-28 16:15:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://ko...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(15): fopen('http://kohana/u...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:20:48 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(/uploads/empty.rtf): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Admin.php [ 11 ] in file:line
2014-10-28 16:20:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\kohana\...', 11, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(11): file_get_contents('/uploads/empty....')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:21:08 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/empty.rtf): failed to open stream: Permission denied ~ APPPATH\classes\Controller\Admin.php [ 16 ] in file:line
2014-10-28 16:21:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/e...', 'Z:\home\kohana\...', 16, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(16): fopen('uploads/empty.r...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:24:27 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/empty.rtf): failed to open stream: Permission denied ~ APPPATH\classes\Controller\Admin.php [ 17 ] in file:line
2014-10-28 16:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/e...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(17): fopen('uploads/empty.r...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:25:26 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/empty.rtf): failed to open stream: Permission denied ~ APPPATH\classes\Controller\Admin.php [ 17 ] in file:line
2014-10-28 16:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/e...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(17): fopen('uploads/empty.r...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:25:58 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/empty.rtf): failed to open stream: Permission denied ~ APPPATH\classes\Controller\Admin.php [ 17 ] in file:line
2014-10-28 16:25:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/e...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(17): fopen('uploads/empty.r...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:26:12 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/empty.rtf): failed to open stream: Permission denied ~ APPPATH\classes\Controller\Admin.php [ 17 ] in file:line
2014-10-28 16:26:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/e...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(17): fopen('uploads/empty.r...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 16:28:00 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/empty.rtf): failed to open stream: Permission denied ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2014-10-28 16:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/e...', 'Z:\home\kohana\...', 19, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(19): fopen('uploads/empty.r...', 'w')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 17:50:47 --- CRITICAL: ErrorException [ 2 ]: preg_replace(): Unknown modifier '/' ~ APPPATH\classes\Controller\Admin.php [ 15 ] in file:line
2014-10-28 17:50:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', 'Z:\home\kohana\...', 15, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(15): preg_replace('/user//u', '??????', '{\rtf1\adeflang...')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 17:55:00 --- CRITICAL: ErrorException [ 2 ]: mb_substr() expects parameter 3 to be long, string given ~ APPPATH\classes\Controller\Admin.php [ 14 ] in file:line
2014-10-28 17:55:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mb_substr() exp...', 'Z:\home\kohana\...', 14, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Admin.php(14): mb_substr('??????????????', 4, 'UTF-8')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 20:11:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letter ~ APPPATH\views\login.php [ 9 ] in Z:\home\kohana\www\application\views\login.php:9
2014-10-28 20:11:42 --- DEBUG: #0 Z:\home\kohana\www\application\views\login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\login.php:9
2014-10-28 20:12:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letter ~ APPPATH\views\login.php [ 9 ] in Z:\home\kohana\www\application\views\login.php:9
2014-10-28 20:12:42 --- DEBUG: #0 Z:\home\kohana\www\application\views\login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\login.php:9
2014-10-28 20:16:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: letter ~ APPPATH\views\login.php [ 9 ] in Z:\home\kohana\www\application\views\login.php:9
2014-10-28 20:16:37 --- DEBUG: #0 Z:\home\kohana\www\application\views\login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 9, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\login.php:9
2014-10-28 20:28:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 39 ] in Z:\home\kohana\www\application\views\template.php:39
2014-10-28 20:28:11 --- DEBUG: #0 Z:\home\kohana\www\application\views\template.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 39, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\template.php:39
2014-10-28 20:32:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filecontact ~ APPPATH\views\list.php [ 3 ] in Z:\home\kohana\www\application\views\list.php:3
2014-10-28 20:32:55 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\list.php:3