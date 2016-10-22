<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-22 17:33:47 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-22 17:33:47 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-22 17:35:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\cache\smarty_compiled\22e56b3f03bce68a413683c88a29174a80d5411d.file.form.tpl.php [ 450 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\22e56b3f03bce68a413683c88a29174a80d5411d.file.form.tpl.php:450
2016-10-22 17:35:30 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\22e56b3f03bce68a413683c88a29174a80d5411d.file.form.tpl.php(450): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 450, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\22e56b3f03bce68a413683c88a29174a80d5411d.file.form.tpl.php(258): content_580b4e42a99a30_77078365(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_5804362a6c5918_41387299(Object(Smarty_Internal_Template))
#3 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\OpenServer\d...')
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(25): Kohana_Response->body(Object(Smarty_View))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\22e56b3f03bce68a413683c88a29174a80d5411d.file.form.tpl.php:450
2016-10-22 17:40:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Participant_Tags' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2016-10-22 17:40:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-10-22 20:02:48 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127
2016-10-22 20:02:48 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(127): Kohana_Database_Result->offsetUnset(0)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_vacancies()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php:127