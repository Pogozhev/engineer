<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-15 01:38:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: author_school_type ~ APPPATH\classes\Controller\Admin.php [ 35 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:35
2015-02-15 01:38:15 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 35, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:35
2015-02-15 01:38:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: author_school_type ~ APPPATH\classes\Controller\Admin.php [ 35 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:35
2015-02-15 01:38:59 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 35, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php:35
2015-02-15 01:59:51 --- CRITICAL: ErrorException [ 2 ]: fopen(uploads/Techconf2015_Authors.xls): failed to open stream: Permission denied ~ APPPATH\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php [ 100 ] in file:line
2015-02-15 01:59:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(uploads/T...', 'C:\\OpenServer\\d...', 100, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Shared\OLE\PPS\Root.php(100): fopen('uploads/Techcon...', 'wb')
#2 C:\OpenServer\domains\techconf.tomsk\application\vendor\phpexcel\PHPExcel\Writer\Excel5.php(241): PHPExcel_Shared_OLE_PPS_Root->save('uploads/Techcon...')
#3 C:\OpenServer\domains\techconf.tomsk\modules\phpexcel\classes\Spreadsheet.php(168): PHPExcel_Writer_Excel5->save('uploads/Techcon...')
#4 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Admin.php(126): Spreadsheet->send(Array)
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Admin->action_list()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#8 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-02-15 02:37:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH\classes\Controller\Form.php [ 20 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:15 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 20, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH\classes\Controller\Form.php [ 20 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:46 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 20, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH\classes\Controller\Form.php [ 20 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:48 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 20, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userfile ~ APPPATH\classes\Controller\Form.php [ 20 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:37:57 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 20, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:39:48 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Form.php [ 20 ] in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:39:48 --- DEBUG: #0 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\OpenServer\\d...', 20, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php:20
2015-02-15 02:40:18 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\Kohana\Upload.php [ 87 ] in file:line
2015-02-15 02:40:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\\OpenServer\\d...', 87, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Upload.php(87): move_uploaded_file('C:\\OpenServer\\u...', 'C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Upload::save(Array, '\xCA\xE0\xE7\xE8\xE5\xE2_\xCF\xF0\xEE\xEA\xEE\xEF\xFE\xEA...', 'C:\\OpenServer\\d...')
#3 [internal function]: Model_File->file_save(Array)
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#6 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#7 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#8 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(26): Kohana_ORM->save()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#12 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-02-15 02:47:07 --- CRITICAL: ErrorException [ 8 ]: iconv(): Detected an illegal character in input string ~ APPPATH\classes\Controller\Form.php [ 21 ] in file:line
2015-02-15 02:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Detect...', 'C:\\OpenServer\\d...', 21, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(21): iconv('cp866', 'WINDOWS-1251', '\xD0\x9C\xD0\xB5\xD0\xBD\xD0\xB5\xD0\xB4\xD0\xB6\xD0\xBC\xD0...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-02-15 02:48:29 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\Kohana\Upload.php [ 87 ] in file:line
2015-02-15 02:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\\OpenServer\\d...', 87, Array)
#1 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Upload.php(87): move_uploaded_file('C:\\OpenServer\\u...', 'C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\techconf.tomsk\application\classes\Model\File.php(34): Kohana_Upload::save(Array, '\xDC\xC2_\xC3\xC0\xC1_\xD22.docx', 'C:\\OpenServer\\d...')
#3 [internal function]: Model_File->file_save(Array)
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#5 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#6 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#7 C:\OpenServer\domains\techconf.tomsk\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#8 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(26): Kohana_ORM->save()
#9 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#12 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-02-15 03:04:31 --- CRITICAL: ErrorException [ 8 ]: iconv(): Wrong charset, conversion from `cp1251 ' to `utf-8//IGNORE' is not allowed ~ APPPATH\classes\Controller\Form.php [ 21 ] in file:line
2015-02-15 03:04:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Wrong ...', 'C:\\OpenServer\\d...', 21, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(21): iconv('cp1251 ', 'utf-8//IGNORE', '\xD0\x9C\xD0\xB5\xD0\xBD\xD0\xB5\xD0\xB4\xD0\xB6\xD0\xBC\xD0...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-02-15 03:08:16 --- CRITICAL: ErrorException [ 8 ]: iconv(): Wrong charset, conversion from `ANSI ' to `utf-8//IGNORE' is not allowed ~ APPPATH\classes\Controller\Form.php [ 21 ] in file:line
2015-02-15 03:08:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'iconv(): Wrong ...', 'C:\\OpenServer\\d...', 21, Array)
#1 C:\OpenServer\domains\techconf.tomsk\application\classes\Controller\Form.php(21): iconv('ANSI ', 'utf-8//IGNORE', '\xD0\x9A\xD1\x83\xD1\x80\xD1\x81\xD0\xB0\xD1\x87_\xD0\xBC...')
#2 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Controller.php(84): Controller_Form->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\techconf.tomsk\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\techconf.tomsk\index.php(118): Kohana_Request->execute()
#8 {main} in file:line