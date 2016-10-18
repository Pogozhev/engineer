<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-05 05:22:03 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'engineer.participant_tags' doesn't exist [ SHOW FULL COLUMNS FROM `participant_tags` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/MySQL.php:359
2016-10-05 05:22:03 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('participant_tag...')
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Account.php(26): Kohana_ORM::factory('Participant_Tag')
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Account->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#10 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#13 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/MySQL.php:359
2016-10-05 14:23:27 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'engineer.participant_tags' doesn't exist [ SHOW FULL COLUMNS FROM `participant_tags` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/MySQL.php:359
2016-10-05 14:23:27 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('participant_tag...')
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Account.php(26): Kohana_ORM::factory('Participant_Tag')
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Account->action_registration()
#8 [internal function]: Kohana_Controller->execute()
#9 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#10 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#13 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/MySQL.php:359