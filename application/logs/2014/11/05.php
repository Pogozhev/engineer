<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-05 11:23:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 156 ] in file:line
2014-11-05 11:23:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 11:27:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTTP_Request::instance() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 156 ] in file:line
2014-11-05 11:27:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 11:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session_Native::send_headers() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 160 ] in file:line
2014-11-05 11:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 11:34:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 160 ] in file:line
2014-11-05 11:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 11:35:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::send_headers() ~ MODPATH\phpexcel\classes\Spreadsheet.php [ 160 ] in file:line
2014-11-05 11:35:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-05 11:53:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\vendor\phpexcel\PHPExcel\Cell.php [ 774 ] in Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Cell.php:774
2014-11-05 11:53:51 --- DEBUG: #0 Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Cell.php(774): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 774, Array)
#1 Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Worksheet.php(1347): PHPExcel_Cell::columnIndexFromString('0')
#2 Z:\home\kohana\www\application\views\list.php(112): PHPExcel_Worksheet->getColumnDimension(0)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#9 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Cell.php:774
2014-11-05 11:54:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\vendor\phpexcel\PHPExcel\Cell.php [ 774 ] in Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Cell.php:774
2014-11-05 11:54:08 --- DEBUG: #0 Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Cell.php(774): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 774, Array)
#1 Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Worksheet.php(1347): PHPExcel_Cell::columnIndexFromString('0')
#2 Z:\home\kohana\www\application\views\list.php(112): PHPExcel_Worksheet->getColumnDimension('0')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#4 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\kohana\www\application\views\template.php(39): Kohana_View->__toString()
#7 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#8 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#9 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\kohana\www\application\vendor\phpexcel\PHPExcel\Cell.php:774