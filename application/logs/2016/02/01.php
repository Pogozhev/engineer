<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-01 12:50:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Page.php [ 54 ] in /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Page.php:54
2016-02-01 12:50:52 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Page.php(54): Kohana_Core::error_handler(8, 'Trying to get p...', '/www/engineer.t...', 54, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#7 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Page.php:54