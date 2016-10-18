<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-21 22:47:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user_form' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-21 22:47:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 22:47:36 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana_db.userforms' doesn't exist [ SHOW FULL COLUMNS FROM `userforms` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-21 22:47:36 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('userforms')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\anketa.php(21): Kohana_ORM::factory('userform')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-21 22:48:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user_form' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-21 22:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 22:49:34 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana_db.userforms' doesn't exist [ SHOW FULL COLUMNS FROM `userforms` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-21 22:49:34 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('userforms')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\anketa.php(21): Kohana_ORM::factory('userform')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-21 22:53:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\anketa.php [ 22 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:22
2014-08-21 22:53:12 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana\...', 22, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:22
2014-08-21 22:56:46 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `userforms` (`name`) VALUES (('')) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 22:56:46 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\anketa.php(26): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 23:02:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Anketa::$session ~ APPPATH\classes\Controller\anketa.php [ 23 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:23
2014-08-21 23:02:00 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 23, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:23
2014-08-21 23:02:45 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update userform model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:27
2014-08-21 23:02:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(27): Kohana_ORM->update()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:27
2014-08-21 23:03:26 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update userform model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:27
2014-08-21 23:03:26 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(27): Kohana_ORM->update()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:27
2014-08-21 23:20:45 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `userforms` (`name`) VALUES (('')) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 23:20:45 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\application\classes\Controller\anketa.php(27): Kohana_ORM->create()
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 23:49:07 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\classes\Controller\anketa.php [ 28 ] in Z:\home\kohana\www\application\classes\Controller\anketa.php:28
2014-08-21 23:49:07 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\anketa.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 28, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Anketa->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Anketa))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\anketa.php:28