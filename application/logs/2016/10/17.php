<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-17 07:33:51 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'engineer'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php:171
2016-10-17 07:33:51 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('ideas')
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(26): Kohana_ORM::factory('Idea')
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php:171
2016-10-17 07:48:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'engineer.idea_tags' doesn't exist [ SHOW FULL COLUMNS FROM `idea_tags` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php:359
2016-10-17 07:48:27 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('idea_tags')
#2 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(27): Kohana_ORM::factory('Idea_Tag')
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php:359
2016-10-17 08:01:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code [ 178 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code:178
2016-10-17 08:01:46 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code(178): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 178, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58043109cf7000_77323506(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(68): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_orgprojects()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code:178
2016-10-17 08:01:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\cache\smarty_compiled\f691a404a7fbdf48d6e57a48f691e316c4c1727b.file.orgprojects.tpl.php [ 178 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\f691a404a7fbdf48d6e57a48f691e316c4c1727b.file.orgprojects.tpl.php:178
2016-10-17 08:01:52 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\f691a404a7fbdf48d6e57a48f691e316c4c1727b.file.orgprojects.tpl.php(178): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 178, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58043109cf7000_77323506(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(68): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_orgprojects()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\f691a404a7fbdf48d6e57a48f691e316c4c1727b.file.orgprojects.tpl.php:178
2016-10-17 08:32:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idea ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 202 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:202
2016-10-17 08:32:23 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(202): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 202, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042b79182de0_10841992(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(54): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:202
2016-10-17 08:34:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idea ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 202 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:202
2016-10-17 08:34:02 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(202): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 202, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042b79182de0_10841992(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(54): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:202
2016-10-17 08:34:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idea ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 202 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:202
2016-10-17 08:34:22 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(202): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 202, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042b79182de0_10841992(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(54): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:202
2016-10-17 11:48:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: speakers_arr ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 179 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:179
2016-10-17 11:48:55 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(179): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 179, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042c1fd984c1_80342455(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(179): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_experts()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:179
2016-10-17 11:49:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: speakers_arr ~ APPPATH\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php [ 179 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php:179
2016-10-17 11:49:23 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php(179): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 179, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042c1fd984c1_80342455(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(179): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_experts()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php:179
2016-10-17 11:56:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: projects ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 169 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:169
2016-10-17 11:56:28 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(169): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 169, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042c1fd984c1_80342455(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(179): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_experts()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:169
2016-10-17 11:56:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: projects ~ APPPATH\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php [ 169 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php:169
2016-10-17 11:56:41 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php(169): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 169, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042c1fd984c1_80342455(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(179): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_experts()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php:169
2016-10-17 12:19:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: projects ~ APPPATH\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php [ 169 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php:169
2016-10-17 12:19:19 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php(169): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 169, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_58042c1fd984c1_80342455(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(183): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_experts()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\09526cc8b693522a373e465d85a411250d049b44.file.experts.tpl.php:169
2016-10-17 16:44:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Experts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-10-17 16:44:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-17 18:24:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Experts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-10-17 18:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-17 18:24:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Experts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-10-17 18:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line