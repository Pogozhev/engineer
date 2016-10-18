<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-20 15:32:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Master' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-10-20 15:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-20 15:37:25 --- CRITICAL: Kohana_View_Exception [ 0 ]: The requested view /team/masters.tpl could not be found ~ MODPATH\smarty3\classes\Smarty\View.php [ 348 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php:80
2015-10-20 15:37:25 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(80): Smarty_View->set_filename('/team/masters.t...')
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(212): Smarty_View->__construct('/team/masters.t...', NULL)
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\View.php(75): Smarty_View::factory('/team/masters.t...', NULL)
#3 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Team.php(19): View::factory('/team/masters.t...')
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Team->action_masters()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php:80
2015-10-20 17:15:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\Team.php [ 28 ] in file:line
2015-10-20 17:15:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-20 17:27:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: participant ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 149 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:149
2015-10-20 17:27:11 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(149): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 149, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_5623b206282ed1_58218543(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Lonely.php(32): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Lonely->action_masters()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lonely))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:149
2015-10-20 17:32:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: k ~ APPPATH\cache\smarty_compiled\3f3aba7ae1db070aa709c78c413ccaae7cbcc918.file.masters.tpl.php [ 170 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\3f3aba7ae1db070aa709c78c413ccaae7cbcc918.file.masters.tpl.php:170
2015-10-20 17:32:11 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\3f3aba7ae1db070aa709c78c413ccaae7cbcc918.file.masters.tpl.php(170): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 170, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_5623b206282ed1_58218543(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Lonely.php(46): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Lonely->action_masters()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lonely))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\3f3aba7ae1db070aa709c78c413ccaae7cbcc918.file.masters.tpl.php:170