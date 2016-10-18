<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-25 17:13:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Form.php [ 8 ] in file:line
2015-02-25 17:13:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 17:15:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Smarty' not found ~ APPPATH\classes\Controller\Form.php [ 7 ] in file:line
2015-02-25 17:15:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 17:23:05 --- CRITICAL: SmartyException [ 0 ]: unable to write file \\wrt54edb09989eba8_29655578 ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_write_file.php [ 44 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php:200
2015-02-25 17:23:05 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php(200): Smarty_Internal_Write_File::writeFile('\\22e56b3f03bce6...', '<?php /* Smarty...', Object(Smarty))
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(149): Smarty_Internal_Template->compileTemplateSource()
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(12): Kohana_Response->body(Object(Smarty_View))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_template.php:200
2015-02-25 17:36:41 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/Techconf2015_Authors.xls): failed to open stream: Permission denied ~ APPPATH\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 100 ] in file:line
2015-02-25 17:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/T...', 'C:\\OpenServer\\d...', 100, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(100): fopen('uploads/Techcon...', 'wb')
#2 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Writer\Excel5.php(241): PHPExcel_Shared_OLE_PPS_Root->save('uploads/Techcon...')
#3 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(168): PHPExcel_Writer_Excel5->save('uploads/Techcon...')
#4 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(78): Spreadsheet->send(Array)
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-02-25 18:02:58 --- CRITICAL: PHPExcel_Exception [ 0 ]: You tried to set a sheet active by the out of bounds index: 1. The actual number of sheets is 1. ~ APPPATH\vendor\phpexcel\PHPExcel.php [ 742 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:57
2015-02-25 18:02:58 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(57): PHPExcel->setActiveSheetIndex(1)
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(86): Spreadsheet->set_active_sheet(1)
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:57
2015-02-25 18:08:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method PHPExcel::set_active_sheet() ~ APPPATH\classes\Controller\Admin.php [ 80 ] in file:line
2015-02-25 18:08:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-25 18:39:38 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:119
2015-02-25 18:39:38 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(119): Kohana_ORM->find()
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:119
2015-02-25 18:40:25 --- CRITICAL: Kohana_Exception [ 0 ]: The secondname property does not exist in the Model_Form class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php:603
2015-02-25 18:40:25 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('secondname')
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(120): Kohana_ORM->__get('secondname')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php:603
2015-02-25 18:41:28 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Admin.php [ 119 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:119
2015-02-25 18:41:28 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(119): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 119, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:119