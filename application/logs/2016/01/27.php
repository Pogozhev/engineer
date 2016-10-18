<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-27 18:00:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: registration ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Route.php:215
2016-01-27 18:00:17 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Route.php(215): Kohana_Route::get('registration')
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/plugins/function.url.php(12): Kohana_Route::url('registration', Array)
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(165) : eval()'d code(119): smarty_function_url(Array, Object(Smarty_Internal_Template))
#3 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(182): content_564efb94d89b05_89482269(Object(Smarty_Internal_Template))
#4 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(383): Smarty_Internal_TemplateBase->fetch('/www/engineer.t...')
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/View.php(228): Smarty_View->render()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#7 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Page.php(43): Kohana_Response->body(Object(Smarty_View))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#14 {main} in /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Route.php:215
2016-01-27 18:00:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: registration ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Route.php:215
2016-01-27 18:00:26 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Route.php(215): Kohana_Route::get('registration')
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/plugins/function.url.php(12): Kohana_Route::url('registration', Array)
#2 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/b16bcaad8e71447022079224eae86433836e5bd9.file.main.tpl.php(119): smarty_function_url(Array, Object(Smarty_Internal_Template))
#3 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(182): content_564efb94d89b05_89482269(Object(Smarty_Internal_Template))
#4 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(383): Smarty_Internal_TemplateBase->fetch('/www/engineer.t...')
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/View.php(228): Smarty_View->render()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#7 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Page.php(43): Kohana_Response->body(Object(Smarty_View))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#14 {main} in /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Route.php:215