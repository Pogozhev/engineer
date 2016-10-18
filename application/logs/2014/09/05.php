<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-05 07:44:49 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2014-09-05 07:44:49 --- DEBUG: #0 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 Z:\home\kohana\www\modules\email\classes\Email.php(97): Swift_Mime_SimpleMessage->setTo('')
#7 Z:\home\kohana\www\application\classes\Controller\fill.php(104): Email::send('', 'robot@---.ru', '???????????????...', '???????????????...', false)
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2014-09-05 07:46:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\fill.php [ 107 ] in file:line
2014-09-05 07:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 07:52:20 --- CRITICAL: ReflectionException [ 0 ]: Function required() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in Z:\home\kohana\www\system\classes\Kohana\Validation.php:396
2014-09-05 07:52:20 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('required')
#1 Z:\home\kohana\www\application\classes\Controller\fill.php(19): Kohana_Validation->check()
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Fill->action_fill()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\system\classes\Kohana\Validation.php:396
2014-09-05 07:59:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ APPPATH\classes\Controller\fill.php [ 13 ] in file:line
2014-09-05 07:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 08:00:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\pages\mainform.php [ 367 ] in Z:\home\kohana\www\application\views\pages\mainform.php:367
2014-09-05 08:00:02 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\mainform.php(367): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 367, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\mainform.php:367
2014-09-05 08:16:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: accept ~ APPPATH\views\pages\mainform.php [ 212 ] in Z:\home\kohana\www\application\views\pages\mainform.php:212
2014-09-05 08:16:15 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\mainform.php(212): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 212, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fill))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\mainform.php:212