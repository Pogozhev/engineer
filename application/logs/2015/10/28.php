<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-28 12:31:39 --- EMERGENCY: Kohana_View_Exception [ 0 ]: The requested view /admin/adminpage.tpl could not be found ~ MODPATH/smarty3/classes/Smarty/View.php [ 348 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php:80
2015-10-28 12:31:39 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(80): Smarty_View->set_filename('/admin/adminpag...')
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(212): Smarty_View->__construct('/admin/adminpag...', NULL)
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/View.php(75): Smarty_View::factory('/admin/adminpag...', NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Admin.php(9): View::factory('/admin/adminpag...')
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Admin->action_adminpage()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php:80
2015-10-28 12:42:44 --- EMERGENCY: Kohana_View_Exception [ 0 ]: The requested view /admin/adminpage.tpl could not be found ~ MODPATH/smarty3/classes/Smarty/View.php [ 348 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php:80
2015-10-28 12:42:44 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(80): Smarty_View->set_filename('/admin/adminpag...')
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php(212): Smarty_View->__construct('/admin/adminpag...', NULL)
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/View.php(75): Smarty_View::factory('/admin/adminpag...', NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Admin.php(9): View::factory('/admin/adminpag...')
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Admin->action_adminpage()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/smarty3/classes/Smarty/View.php:80
2015-10-28 12:53:42 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:53:42 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#4 [internal function]: Kohana_Controller->execute()
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#9 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:57:36 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:57:36 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#4 [internal function]: Kohana_Controller->execute()
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#9 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:57:51 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:57:51 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#4 [internal function]: Kohana_Controller->execute()
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#9 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:57:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302
2015-10-28 12:57:59 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#4 [internal function]: Kohana_Controller->execute()
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#9 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php:1302