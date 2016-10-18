<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-14 12:45:57 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'domosdesignpon@mail.ru' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('domosdesignpon@mail.ru', 'domosdesignpon@mail.ru', '8d1d53833505c613f98b7a8b37c34a817b2120b16d00e4d6eb2766bcbf1519a1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2016-02-14 12:45:57 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Account.php(75): Kohana_ORM->save()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Account->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251