<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-13 10:47:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code [ 231 ] in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:231
2015-02-13 10:47:15 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(231): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 231, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code(154): content_54dd81d3246216_80927420(Object(Smarty_Internal_Template))
#2 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(182): content_54db5d74553fb0_10882036(Object(Smarty_Internal_Template))
#3 C:\OpenServer\domains\techconf.tomsk\modules\smarty3\classes\Smarty\View.php(383): Smarty_Internal_TemplateBase->fetch('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\View.php(228): Smarty_View->render()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(12): Kohana_Response->body(Object(Smarty_View))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#10 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\techconf.tomsk\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(165) : eval()'d code:231
2015-02-13 12:18:35 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'techconf' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php:75
2015-02-13 12:18:35 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('techconf')
#1 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('forms')
#4 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Page.php(10): Kohana_ORM::factory('form')
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#12 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\techconf.tomsk\modules\database\classes\Kohana\Database\MySQL.php:75
2015-02-13 13:33:30 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 106 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:33:30 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(106): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 106, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(87): Spreadsheet->set_sheet_data(Array, Object(PHPExcel_Worksheet))
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(87): Spreadsheet->set_data(Array, false)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:34:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function array_values() on a non-object ~ APPPATH\classes\Controller\Admin.php [ 8 ] in file:line
2015-02-13 13:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 13:34:54 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 106 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:34:54 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(106): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 106, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(87): Spreadsheet->set_sheet_data(Array, Object(PHPExcel_Worksheet))
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(87): Spreadsheet->set_data(Array, false)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:35:06 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 106 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:35:06 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(106): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 106, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(87): Spreadsheet->set_sheet_data(Array, Object(PHPExcel_Worksheet))
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(87): Spreadsheet->set_data(Array, false)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Author::select_tables() ~ APPPATH\classes\Controller\Admin.php [ 27 ] in file:line
2015-02-13 13:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-13 13:47:01 --- CRITICAL: Kohana_Exception [ 0 ]: The _select_columns property does not exist in the Model_Author class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php:702
2015-02-13 13:47:01 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('_select_columns', Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\ORM.php(21): Kohana_ORM->__set('_select_columns', Array)
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(27): ORM->select_columns(Array)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php:702
2015-02-13 13:48:26 --- CRITICAL: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ MODPATH\orm\classes\Kohana\ORM.php [ 616 ] in file:line
2015-02-13 13:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'C:\\OpenServer\\d...', 616, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(616): array_key_exists(Array, Array)
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(27): Kohana_ORM->get(Array)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-02-13 13:48:55 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 106 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:48:55 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(106): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 106, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(87): Spreadsheet->set_sheet_data(Array, Object(PHPExcel_Worksheet))
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(112): Spreadsheet->set_data(Array, false)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:49:06 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 106 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:49:06 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(106): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 106, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(87): Spreadsheet->set_sheet_data(Array, Object(PHPExcel_Worksheet))
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(112): Spreadsheet->set_data(Array, false)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:49:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 106 ] in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:49:23 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(106): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 106, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(87): Spreadsheet->set_sheet_data(Array, Object(PHPExcel_Worksheet))
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(112): Spreadsheet->set_data(Array, false)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php:106
2015-02-13 13:49:33 --- CRITICAL: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ MODPATH\orm\classes\Kohana\ORM.php [ 616 ] in file:line
2015-02-13 13:49:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'C:\\OpenServer\\d...', 616, Array)
#1 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(616): array_key_exists(Array, Array)
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(27): Kohana_ORM->get(Array)
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-02-13 13:50:09 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/IME_participants.xls): failed to open stream: Permission denied ~ APPPATH\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 100 ] in file:line
2015-02-13 13:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/I...', 'C:\\OpenServer\\d...', 100, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(100): fopen('uploads/IME_par...', 'wb')
#2 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Writer\Excel5.php(241): PHPExcel_Shared_OLE_PPS_Root->save('uploads/IME_par...')
#3 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(168): PHPExcel_Writer_Excel5->save('uploads/IME_par...')
#4 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(120): Spreadsheet->send(Array)
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-02-13 13:50:50 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/IME_participants.xls): failed to open stream: Permission denied ~ APPPATH\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 100 ] in file:line
2015-02-13 13:50:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/I...', 'C:\\OpenServer\\d...', 100, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(100): fopen('uploads/IME_par...', 'wb')
#2 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Writer\Excel5.php(241): PHPExcel_Shared_OLE_PPS_Root->save('uploads/IME_par...')
#3 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(168): PHPExcel_Writer_Excel5->save('uploads/IME_par...')
#4 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(119): Spreadsheet->send(Array)
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#11 {main} in file:line