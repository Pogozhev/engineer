<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-30 13:39:06 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 25 ] in file:line
2014-10-30 13:39:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\application\views\list.php(25): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 13:41:42 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 25 ] in file:line
2014-10-30 13:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\application\views\list.php(25): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 13:41:54 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 25 ] in file:line
2014-10-30 13:41:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\application\views\list.php(25): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 13:42:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH\views\list.php [ 25 ] in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:42:03 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:42:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH\views\list.php [ 25 ] in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:42:21 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:42:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH\views\list.php [ 25 ] in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:42:34 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:44:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH\views\list.php [ 25 ] in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:44:34 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:45:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH\views\list.php [ 25 ] in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:45:48 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:45:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH\views\list.php [ 25 ] in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 13:45:58 --- DEBUG: #0 Z:\home\kohana\www\application\views\list.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 25, Array)
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
#14 {main} in Z:\home\kohana\www\application\views\list.php:25
2014-10-30 14:14:21 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 25 ] in file:line
2014-10-30 14:14:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\application\views\list.php(25): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:19:54 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 23 ] in file:line
2014-10-30 14:19:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\views\list.php(23): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:22:23 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 23 ] in file:line
2014-10-30 14:22:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\views\list.php(23): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:22:43 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 17 ] in file:line
2014-10-30 14:22:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 17, Array)
#1 Z:\home\kohana\www\application\views\list.php(17): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:23:07 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 25 ] in file:line
2014-10-30 14:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 25, Array)
#1 Z:\home\kohana\www\application\views\list.php(25): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:23:57 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 24 ] in file:line
2014-10-30 14:23:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 24, Array)
#1 Z:\home\kohana\www\application\views\list.php(24): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:28:54 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 23 ] in file:line
2014-10-30 14:28:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\views\list.php(23): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:29:30 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 23 ] in file:line
2014-10-30 14:29:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\views\list.php(23): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:29:56 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 23 ] in file:line
2014-10-30 14:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\views\list.php(23): iconv('UTF-8', 'WINDOWS-1251', '?????? ????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:30:58 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 23 ] in file:line
2014-10-30 14:30:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\application\views\list.php(23): iconv('UTF-8', 'WINDOWS-1251', '??? ???????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:31:47 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 22 ] in file:line
2014-10-30 14:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 22, Array)
#1 Z:\home\kohana\www\application\views\list.php(22): iconv('UTF-8', 'WINDOWS-1251', '??? ???????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-10-30 14:34:18 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\views\list.php [ 24 ] in file:line
2014-10-30 14:34:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'Z:\home\kohana\...', 24, Array)
#1 Z:\home\kohana\www\application\views\list.php(24): iconv('UTF-8', 'WINDOWS-1251', '??? ???????????...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line