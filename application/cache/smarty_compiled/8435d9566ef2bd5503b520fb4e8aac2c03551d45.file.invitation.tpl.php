<?php /* Smarty version Smarty-3.1.18, created on 2016-10-18 15:38:53
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\form\email\invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243305805edad48af65-33051602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8435d9566ef2bd5503b520fb4e8aac2c03551d45' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\form\\email\\invitation.tpl',
      1 => 1454231220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243305805edad48af65-33051602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5805edad4cc1e8_34604165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805edad4cc1e8_34604165')) {function content_5805edad4cc1e8_34604165($_smarty_tpl) {?>Уважаемый пользователь! Вы получили это письмо, так как получили приглашение в проект на сайте engineer.tpu.ru.
<br><br>

<strong>Название проекта: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->title;?>
<br>
<strong>Лидер проекта: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->leader->last_name;?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value->leader->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value->leader->middle_name;?>
<br>
<strong>Телефон руководителя команды: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->leader->phone;?>
<br>
<strong>E-mail руководителя команды: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->leader->email;?>

<br><br>

Зарегистрируйтесь на <a href="http://engineer.tpu.ru/">сайте</a>, чтобы получить возможность принять приглашение в проект.
<br><br>

Если Вы не планируете участие в мероприятии, проигнорируйте это письмо, а в случае многократной отправки свяжитесь с лидером проекта.<br>
Это автоматизированное сообщение, пожалуйста, не отвечайте на него.<br>
Вопросы администрации сайта можно задать по адресу <i>ime_2015@mail.ru</i>
<br><br><br>

С уважением, администрация сайта <i><a href="http://engineer.tpu.ru/">engineer.tpu.ru</a></i><?php }} ?>
