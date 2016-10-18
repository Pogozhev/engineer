<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-02 13:57:33 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'has_project' in 'where clause' [ SELECT `participant`.`id` AS `id`, `participant`.`user_id` AS `user_id`, `participant`.`last_name` AS `last_name`, `participant`.`first_name` AS `first_name`, `participant`.`middle_name` AS `middle_name`, `participant`.`email` AS `email`, `participant`.`phone` AS `phone`, `participant`.`url_vk` AS `url_vk`, `participant`.`url_fb` AS `url_fb`, `participant`.`is_university` AS `is_university`, `participant`.`competences` AS `competences`, `participant`.`interests` AS `interests` FROM `participants` AS `participant` WHERE `has_project` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251
2016-02-02 13:57:33 --- DEBUG: #0 /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `partici...', 'Model_Participa...', Array)
#1 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/engineer.tpu.ru/techconf.tomsk/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /www/engineer.tpu.ru/techconf.tomsk/application/classes/Controller/Admin.php(127): Kohana_ORM->find_all()
#4 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Controller.php(84): Controller_Admin->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www/engineer.tpu.ru/techconf.tomsk/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /www/engineer.tpu.ru/techconf.tomsk/index.php(118): Kohana_Request->execute()
#10 {main} in /www/engineer.tpu.ru/techconf.tomsk/modules/database/classes/Kohana/Database/Query.php:251