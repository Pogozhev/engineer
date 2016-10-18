<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-09 17:18:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\views\forgot.php [ 6 ] in C:\OpenServer\domains\kohana\application\views\forgot.php:6
2015-02-09 17:18:42 --- DEBUG: #0 C:\OpenServer\domains\kohana\application\views\forgot.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 6, Array)
#1 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\kohana\application\views\template.php(39): Kohana_View->__toString()
#5 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\kohana\application\views\forgot.php:6