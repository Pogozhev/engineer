<?php /* Smarty version Smarty-3.1.18, created on 2016-04-03 00:52:52
         compiled from "/www/engineer.tpu.ru/techconf.tomsk/application/views//account/email/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567746402570015043fc267-83079633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11ed9ec49991f1e1bce2b649b3e2eb7bdb9eb2a' => 
    array (
      0 => '/www/engineer.tpu.ru/techconf.tomsk/application/views//account/email/reset.tpl',
      1 => 1454231055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567746402570015043fc267-83079633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_570015044b20e2_03014753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570015044b20e2_03014753')) {function content_570015044b20e2_03014753($_smarty_tpl) {?>Уважаемый пользователь! Вы получили это письмо, так как запросили сброс пароля на сайте engineer.tpu.ru.
<br><br>

Для сброса пароля пройдите по ссылке - <a href="http://engineer.tpu.ru/account/forgot?change=<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
">СБРОСИТЬ ПАРОЛЬ</a>
<br><br>

Если Вы не запрашивали сброс пароля, проигнорируйте это письмо.<br>
Это автоматизированное сообщение, пожалуйста, не отвечайте на него.<br>
Вопросы администрации сайта можно задать по адресу <i>ime_2015@mail.ru</i>
<br><br><br>

С уважением, администрация сайта <i><a href="http://engineer.tpu.ru/">engineer.tpu.ru</a></i><?php }} ?>
