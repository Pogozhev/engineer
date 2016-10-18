<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-19 18:12:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Page.php [ 73 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:73
2015-10-19 18:12:19 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(73): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 73, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:73