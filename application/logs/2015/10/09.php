<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-09 15:42:37 --- CRITICAL: SmartyCompilerException [ 0 ]: Syntax error in template "C:\OpenServer\domains\techconf.tomsk\application\views\pages\ideas.tpl"  on line 19 "action="{url route='admin' action='delete_idea'}"" unknown tag "url" ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php [ 17 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php:533
2015-10-09 15:42:37 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(533): Smarty_Internal_TemplateCompilerBase->trigger_template_error('unknown tag "ur...', 17)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2383): Smarty_Internal_TemplateCompilerBase->compileTag('url', Array)
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3093): Smarty_Internal_Templateparser->yy_r37()
#3 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3191): Smarty_Internal_Templateparser->yy_reduce(37)
#4 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(111): Smarty_Internal_Templateparser->doParse(3, '}')
#5 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(273): Smarty_Internal_SmartyTemplateCompiler->doCompile('{private_child_...')
#6 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_compile_block.php(180): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template), false)
#7 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_compile_block.php(327): Smarty_Internal_Compile_Block::compileChildBlock(Object(Smarty_Internal_SmartyTemplateCompiler), 'content')
#8 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(556): Smarty_Internal_Compile_Blockclose->compile(Array, Object(Smarty_Internal_SmartyTemplateCompiler), Array, NULL, NULL)
#9 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(337): Smarty_Internal_TemplateCompilerBase->callTagCompiler('blockclose', Array, Array)
#10 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(2485): Smarty_Internal_TemplateCompilerBase->compileTag('blockclose', Array)
#11 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3093): Smarty_Internal_Templateparser->yy_r59()
#12 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templateparser.php(3191): Smarty_Internal_Templateparser->yy_reduce(59)
#13 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_smartytemplatecompiler.php(111): Smarty_Internal_Templateparser->doParse(3, '}')
#14 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php(273): Smarty_Internal_SmartyTemplateCompiler->doCompile('<!DOCTYPE html>...')
#15 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php(186): Smarty_Internal_TemplateCompilerBase->compileTemplate(Object(Smarty_Internal_Template))
#16 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(163): Smarty_Internal_Template->compileTemplateSource()
#17 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#18 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#19 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#20 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(49): Kohana_Response->body(Object(Smarty_View))
#21 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#22 [internal function]: Kohana_Controller->execute()
#23 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#24 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#27 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatecompilerbase.php:533
2015-10-09 15:45:20 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: admin ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Route.php:215
2015-10-09 15:45:20 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Route.php(215): Kohana_Route::get('admin')
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\plugins\function.url.php(12): Kohana_Route::url('admin', Array)
#2 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\8ce1a63321a42f91b9f35e11782a28f8cdcd3fc1.file.ideas.tpl.php(126): smarty_function_url(Array, Object(Smarty_Internal_Template))
#3 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_561786cbd679d5_51997640(Object(Smarty_Internal_Template))
#4 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(49): Kohana_Response->body(Object(Smarty_View))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_ideas()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Route.php:215
2015-10-09 16:04:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete idea model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:142
2015-10-09 16:04:15 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(142): Kohana_ORM->delete()
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delete_idea()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:142
2015-10-09 16:04:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete idea model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:143
2015-10-09 16:04:27 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(143): Kohana_ORM->delete()
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delete_idea()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:143
2015-10-09 16:06:03 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete idea model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:142
2015-10-09 16:06:03 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(142): Kohana_ORM->delete()
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_delete_idea()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:142