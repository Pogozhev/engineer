<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-10 05:28:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Form.php [ 119 ] in /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php:119
2015-11-10 05:28:13 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 119, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_savelonely()
#2 [internal function]: Kohana_Controller->execute()
#3 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#7 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php:119
2015-11-10 12:27:31 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'StreetTamplier@yandex.kz' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('StreetTamplier@yandex.kz', 'StreetTamplier@yandex.kz', 'e0a6ab433bcadf4c6da0ca41b942d32f81d23c59ec2f3a892828e1b81130ccb6') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 12:27:31 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 12:28:32 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'StreetTamplier@yandex.kz' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('StreetTamplier@yandex.kz', 'StreetTamplier@yandex.kz', 'e0a6ab433bcadf4c6da0ca41b942d32f81d23c59ec2f3a892828e1b81130ccb6') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 12:28:32 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 12:29:01 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'StreetTamplier@yandex.kz' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('StreetTamplier@yandex.kz', 'StreetTamplier@yandex.kz', 'e0a6ab433bcadf4c6da0ca41b942d32f81d23c59ec2f3a892828e1b81130ccb6') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 12:29:01 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 16:03:45 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'dfinedit@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('dfinedit@gmail.com', 'dfinedit@gmail.com', '362118023fa4bf5cf180bff0c042aa245200daa782449a82a01d5d63a2f86877') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 16:03:45 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 16:04:11 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'dfinedit@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('dfinedit@gmail.com', 'dfinedit@gmail.com', '362118023fa4bf5cf180bff0c042aa245200daa782449a82a01d5d63a2f86877') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 16:04:11 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:02:23 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'evgeniya.golyanskaya@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('evgeniya.golyanskaya@gmail.com', 'evgeniya.golyanskaya@gmail.com', 'e7aa36d65b6ad7069f87a26b7aeca53105f0d4d91b59438701822fdc20f387dc') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:02:23 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:08:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ APPPATH/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:08:07 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
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
#12 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:08:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ APPPATH/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:08:34 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
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
#12 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:08:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ APPPATH/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:08:52 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
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
#12 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:11:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ APPPATH/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:11:45 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
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
#12 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:11:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ APPPATH/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:11:53 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
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
#12 {main} in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-10 21:30:54 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'evgeniya.golyanskaya@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('evgeniya.golyanskaya@gmail.com', 'evgeniya.golyanskaya@gmail.com', 'e7aa36d65b6ad7069f87a26b7aeca53105f0d4d91b59438701822fdc20f387dc') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:30:54 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:55:42 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'L_arman@bk.ru' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('L_arman@bk.ru', 'L_arman@bk.ru', 'e40ec23f2a5fefc1ed3430c66fd68a88628fdcca26fedbe51c31debce8b2e522') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:55:42 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:56:40 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'L_arman@bk.ru' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('L_arman@bk.ru', 'L_arman@bk.ru', 'e40ec23f2a5fefc1ed3430c66fd68a88628fdcca26fedbe51c31debce8b2e522') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 21:56:40 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 22:05:38 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'evgeniya.golyanskaya@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('evgeniya.golyanskaya@gmail.com', 'evgeniya.golyanskaya@gmail.com', 'e7aa36d65b6ad7069f87a26b7aeca53105f0d4d91b59438701822fdc20f387dc') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-10 22:05:38 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Form.php(38): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251