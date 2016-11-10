<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-25 00:44:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'has_project' in 'where clause' [ SELECT `participant`.`id` AS `id`, `participant`.`user_id` AS `user_id`, `participant`.`last_name` AS `last_name`, `participant`.`first_name` AS `first_name`, `participant`.`middle_name` AS `middle_name`, `participant`.`email` AS `email`, `participant`.`phone` AS `phone`, `participant`.`url_vk` AS `url_vk`, `participant`.`url_fb` AS `url_fb`, `participant`.`is_university` AS `is_university`, `participant`.`competences` AS `competences`, `participant`.`interests` AS `interests`, `participant`.`participant_branch_id` AS `participant_branch_id`, `participant`.`tags` AS `tags` FROM `participants` AS `participant` WHERE `has_project` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php:251
2016-10-25 00:44:19 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `partici...', 'Model_Participa...', Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(127): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php:251
2016-10-25 03:55:53 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 03:55:53 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:01:23 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:01:23 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:02:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Page.php [ 141 ] in file:line
2016-10-25 04:02:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-25 04:03:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\cache\smarty_compiled\7b5359a4db3c0713c61088e9528057b1fbc05f6a.file.vacancies.tpl.php [ 196 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\7b5359a4db3c0713c61088e9528057b1fbc05f6a.file.vacancies.tpl.php:196
2016-10-25 04:03:25 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\7b5359a4db3c0713c61088e9528057b1fbc05f6a.file.vacancies.tpl.php(196): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 196, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042c1e9bea22_67884859(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(141): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\7b5359a4db3c0713c61088e9528057b1fbc05f6a.file.vacancies.tpl.php:196
2016-10-25 04:07:12 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:07:12 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(1)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:12:10 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:12:10 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(1)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:12:12 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:12:12 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(1)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:12:23 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:12:23 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:36:19 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:36:19 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:39:56 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:39:56 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:46:16 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:46:16 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:46:20 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:46:20 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-25 04:49:43 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:135
2016-10-25 04:49:43 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(135): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:135
2016-10-25 04:50:52 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:135
2016-10-25 04:50:52 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(135): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:135