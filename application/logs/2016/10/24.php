<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-24 16:53:02 --- CRITICAL: SmartyException [ 0 ]: unable to write file C:\OpenServer\domains\techconf.tomsk\application\cache/smarty_compiled\032e27e33e89c8ca1b0c071216265dd2d5c8f293.file.main.tpl.php ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_write_file.php [ 74 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php:200
2016-10-24 16:53:02 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php(200): Smarty_Internal_Write_File::writeFile('C:\OpenServer\d...', '<?php /* Smarty...', Object(Smarty))
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(163): Smarty_Internal_Template->compileTemplateSource()
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(14): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php:200
2016-10-24 19:57:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\Controller\Team.php [ 30 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:30
2016-10-24 19:57:01 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 30, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:30
2016-10-24 19:57:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\Controller\Team.php [ 30 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:30
2016-10-24 19:57:41 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 30, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:30
2016-10-24 20:03:17 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database.php:461
2016-10-24 20:03:17 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\OpenServer\d...', 461, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(146): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_MySQL))
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(32): Kohana_ORM->save()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database.php:461
2016-10-24 20:04:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Team.php [ 27 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:27
2016-10-24 20:04:41 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 27, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:27
2016-10-24 22:32:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\classes\Controller\Form.php [ 82 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:82
2016-10-24 22:32:39 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 82, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:82
2016-10-24 22:33:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\classes\Controller\Form.php [ 82 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:82
2016-10-24 22:33:42 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 82, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:82
2016-10-24 22:35:46 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:35:46 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:35:52 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:35:52 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:38:05 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:38:05 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:38:11 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:38:11 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-24 22:45:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\classes\Controller\Form.php [ 82 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:82
2016-10-24 22:45:04 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 82, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:82
2016-10-24 22:48:21 --- CRITICAL: Kohana_Exception [ 0 ]: The tags property does not exist in the Model_Vacancy class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:92
2016-10-24 22:48:21 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(92): Kohana_ORM->set('tags', '')
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_saveproject()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:92
2016-10-24 22:57:48 --- CRITICAL: Kohana_Exception [ 0 ]: The tags property does not exist in the Model_Vacancy class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:33
2016-10-24 22:57:48 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(33): Kohana_ORM->set('tags', '???????????????...')
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:33
2016-10-24 23:12:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\classes\Controller\Team.php [ 32 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:32
2016-10-24 23:12:28 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:32
2016-10-24 23:25:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\classes\Controller\Team.php [ 32 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:32
2016-10-24 23:25:09 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:32
2016-10-24 23:29:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH\classes\Controller\Team.php [ 32 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:32
2016-10-24 23:29:12 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 32, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:32
2016-10-24 23:43:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: vacancy_tags ~ APPPATH\classes\Controller\Team.php [ 35 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:35
2016-10-24 23:43:27 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 35, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_add_vacancy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php:35