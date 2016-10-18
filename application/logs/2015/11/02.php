<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-02 19:00:09 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'julia5558311@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('julia5558311@gmail.com', 'julia5558311@gmail.com', 'a90691a2c307920e5a8757fb220a925d0ce25f268fc8b9c99cb3df25c673ecc8') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2015-11-02 19:00:09 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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