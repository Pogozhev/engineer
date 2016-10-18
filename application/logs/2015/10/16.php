<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-16 14:00:24 --- CRITICAL: Kohana_View_Exception [ 0 ]: The requested view /pages/contacts.tpl could not be found ~ MODPATH\smarty3\classes\Smarty\View.php [ 348 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php:80
2015-10-16 14:00:24 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(80): Smarty_View->set_filename('/pages/contacts...')
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(212): Smarty_View->__construct('/pages/contacts...', NULL)
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\View.php(75): Smarty_View::factory('/pages/contacts...', NULL)
#3 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Static.php(19): View::factory('/pages/contacts...')
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Static->action_contacts()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php:80
2015-10-16 14:36:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Vacancy' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-10-16 14:36:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-16 15:22:55 --- CRITICAL: Database_Exception [ 1048 ]: Column 'branch_id' cannot be null [ INSERT INTO `projects` (`title`, `description`, `branch_id`) VALUES ('asd', 'asd', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php:251
2015-10-16 15:22:55 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(29): Kohana_ORM->save()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php:251
2015-10-16 15:23:17 --- CRITICAL: Kohana_Exception [ 0 ]: The school_title property does not exist in the Model_Participant class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:44
2015-10-16 15:23:17 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(44): Kohana_ORM->set('school_title', 'ads')
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:44
2015-10-16 15:23:33 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'user_id' [ INSERT INTO `participants` (`project_id`, `last_name`, `first_name`, `middle_name`, `email`, `phone`, `is_university`) VALUES (3, 'asd', 'asd', 'asd', 'mutalisk22@mail.ru', 'asd', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php:251
2015-10-16 15:23:33 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(44): Kohana_ORM->save()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php:251
2015-10-16 15:24:45 --- CRITICAL: Kohana_Exception [ 0 ]: The school_title property does not exist in the Model_Participant_School class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:50
2015-10-16 15:24:45 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(50): Kohana_ORM->set('school_title', 'ads')
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:50
2015-10-16 15:26:07 --- CRITICAL: Kohana_Exception [ 0 ]: The project_id property does not exist in the Model_Participant_University class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:71
2015-10-16 15:26:07 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(71): Kohana_ORM->set('project_id', 5)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:71
2015-10-16 17:20:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code [ 108 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code:108
2015-10-16 17:20:29 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code(108): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 108, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_5620dd7ddec824_41971798(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Account.php(60): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Account->action_loginpage()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code:108