<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-09 12:17:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: is_admin ~ APPPATH/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php [ 96 ] in /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php:96
2015-11-09 12:17:32 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/application/cache/smarty_compiled/a40ac4d255796561bfc91edd4fbe5faf81089e26.file.forgot.tpl.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/www/engineer.t...', 96, Array)
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
2015-11-09 13:44:34 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'm.boyarsky97@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('m.boyarsky97@gmail.com', 'm.boyarsky97@gmail.com', '03e60bf3ea29009f8f8a590dc0030e12a3949b4fe669062b72f71209af555d82') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-09 13:44:34 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2015-11-09 13:44:59 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'm.boyarsky97@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('m.boyarsky97@gmail.com', 'm.boyarsky97@gmail.com', '03e60bf3ea29009f8f8a590dc0030e12a3949b4fe669062b72f71209af555d82') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-09 13:44:59 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2015-11-09 13:45:31 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'm.boyarsky97@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('m.boyarsky97@gmail.com', 'm.boyarsky97@gmail.com', 'ec16c4d58484fab7ff8ae267ce969f19d45955fdd98a267b1694ae862e21317d') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-09 13:45:31 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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