<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-12 03:53:08 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\classes\Model\File.php [ 34 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 03:53:08 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\OpenServer\\d...', 34, Array)
#1 [internal function]: Model_File->file_save('Informatsionnoe...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(23): Kohana_ORM->save()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:02:31 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'file' ~ APPPATH\classes\Model\File.php [ 34 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:02:31 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\OpenServer\\d...', 34, Array)
#1 [internal function]: Model_File->file_save('Informatsionnoe...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(23): Kohana_ORM->save()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:03:30 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be of the type array, string given, called in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php on line 34 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Upload.php:52
2015-02-12 04:03:30 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\\OpenServer\\d...', 52, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Upload::save('Informatsionnoe...', 'Informatsionnoe...', 'C:\\OpenServer\\d...')
#2 [internal function]: Model_File->file_save('Informatsionnoe...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(23): Kohana_ORM->save()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Upload.php:52
2015-02-12 04:08:23 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\classes\Model\File.php [ 34 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:08:23 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\OpenServer\\d...', 34, Array)
#1 [internal function]: Model_File->file_save('Informatsionnoe...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(23): Kohana_ORM->save()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:09:38 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\classes\Model\File.php [ 34 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:09:38 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\OpenServer\\d...', 34, Array)
#1 [internal function]: Model_File->file_save('Informatsionnoe...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(23): Kohana_ORM->save()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:10:01 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\classes\Model\File.php [ 34 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:10:01 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\OpenServer\\d...', 34, Array)
#1 [internal function]: Model_File->file_save('Informatsionnoe...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(23): Kohana_ORM->save()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:17:33 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\classes\Model\File.php [ 34 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 04:17:33 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\OpenServer\\d...', 34, Array)
#1 [internal function]: Model_File->file_save('Informatsionnoe...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(27): Kohana_ORM->save()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php:34
2015-02-12 05:12:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: anketa_link ~ APPPATH\cache\smarty_compiled\032e27e33e89c8ca1b0c071216265dd2d5c8f293.file.main.tpl.php [ 81 ] in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\032e27e33e89c8ca1b0c071216265dd2d5c8f293.file.main.tpl.php:81
2015-02-12 05:12:48 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\032e27e33e89c8ca1b0c071216265dd2d5c8f293.file.main.tpl.php(81): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 81, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_54dad0f67c4b05_32630714(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(32): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\application\cache\smarty_compiled\032e27e33e89c8ca1b0c071216265dd2d5c8f293.file.main.tpl.php:81
2015-02-12 05:16:42 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Common.php [ 20 ] in file:line
2015-02-12 05:16:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line