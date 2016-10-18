<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-13 17:24:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: branches ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 166 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:166
2015-10-13 17:24:08 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(166): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 166, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_54edaf4df40767_69096435(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(11): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:166