<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-01 23:16:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ MODPATH/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(151) : eval()'d code [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(151) : eval()'d code:96
2015-11-01 23:16:14 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(151) : eval()'d code(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(182): content_563648de815f77_38765204(Object(Smarty_Internal_Template))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(383): Smarty_Internal_TemplateBase->fetch('/www/engineer.t...')
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/View.php(228): Smarty_View->render()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Account.php(214): Kohana_Response->body(Object(Smarty_View))
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Account->action_forgot()
#7 [internal function]: Kohana_Controller->execute()
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#9 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#12 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(151) : eval()'d code:96