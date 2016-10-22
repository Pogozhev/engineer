<?php /* Smarty version Smarty-3.1.18, created on 2016-10-22 20:43:09
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\personal\projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25451580435fe3b9541-12262151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29febc707a1c1b2bcea583517c9001e1d604ffdc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\personal\\projects.tpl',
      1 => 1477144656,
      2 => 'file',
    ),
    'dabbea9ee3d7e0c1016ac6ddc356912b694f6d36' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\theme\\sponsors.tpl',
      1 => 1454256300,
      2 => 'file',
    ),
    '61133e2bf8560a226fcbdc5cb7967965cd88d551' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\theme\\default.tpl',
      1 => 1477146470,
      2 => 'file',
    ),
    '66743d4eb1945f96fc3179df4db79a2f83fa0830' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\pages\\includes\\invitations.tpl',
      1 => 1454256300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25451580435fe3b9541-12262151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580435fe64ab10_93350549',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580435fe64ab10_93350549')) {function content_580435fe64ab10_93350549($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
?>﻿<!DOCTYPE html>
<!--<html>-->
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>



    <title>Ярмарка проектов</title>
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/main.css" rel="stylesheet" media="screen">
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <script src="/assets/lib/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/assets/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Выпадающее меню (Потребовался для программы) -->
    <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen, projection"/>
    <link href="/assets/css/ie.css" type="text/css" rel="stylesheet" media="screen">

    <script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap-carousel.js"></script>
    <script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>

    <!-- Owl Carousel и Nested (Потребовался для программы) -->
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/owl.theme.css">

    <script src="/assets/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="/assets/plugins/nested/jquery.nested.js"></script>
    <script src="/assets/plugins/nested/makeboxes.js"></script>

    <!-- FOTO -->
    <link rel="stylesheet" type="text/css" href="/assets/js/fancybox/jquery.fancybox-1.3.4.css"/>
    <script type="text/javascript" src="/assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="/assets/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="/assets/js/fancybox/jquery.easing-1.3.pack.js"></script>

    <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api"/>
     <meta name="author" content="Codrops"/>

     <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
     <script src="/assets/js/modernizr.custom.70736.js"></script>
     <noscript><link rel="stylesheet" type="text/css" href="/assets/css/noJS.css"/></noscript>
     <script src="/assets/js/jquery.masonry.min.js"></script>
     <script src="/assets/js/jquery.history.js"></script>
     <script src="/assets/js/js-url.min.js"></script>
     <script src="/assets/js/jquerypp.custom.js"></script>
     <script src="/assets/js/gamma.js"></script>

     [if lte IE 7]<![endif] -->
</head>

<body>
    <div class="container">
        <div id='sidebar'>
            <a href="/"> <img class="logo" src="/assets/images/logo-off.png" > </a>
            <div class="menu">
                <ul class="list-menu">
                    <li class="sidebar-option"><a href="/"><div class="btm">Главная</div></a></li>
                    <!--  <li class="sidebar-option"><a href="<?php echo URL::site('titles');?>
"><div class="btm">Спикеры</div></a></li> -->
                   <!-- <li class="sidebar-option"><a href="<?php echo URL::site('sections');?>
"> <div class="btm">Программа ярмарки</div></a></li> -->
                    <li class="sidebar-option"><a href="#"> <div class="btm">Проекты</div></a>
                        <ul  class="sub_menu" >
                            <li class="sidebar-option"><a href="<?php echo URL::site('ideas');?>
"><div class="btm">Банк идей</div></a></li>
                            <li class="sidebar-option"><a href="<?php echo URL::site('orgprojects');?>
"><div class="btm">Проекты от предприятий </div></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('projects');?>
"> <div class="btm">Проекты на IME</div></a></li>
                    <!--<li class="sidebar-option"><a href="<?php echo URL::site('vacancies');?>
"> <div class="btm">Вакансии</div></a></li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('experts');?>
"><div class="btm">Эксперты</div></a></li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('foto');?>
"><div class="btm">Галерея </div></a></li> -->
                    <li class="sidebar-option"><a href="<?php echo URL::site('about');?>
"><div class="last btm">О Ярмарке</div></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container">
            <div class="logo-wrap" id="zae"></div>
        </div>
    </div>

    <nav id="navbar" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"></div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
                            <li><a href="<?php echo smarty_function_url(array('route'=>'adminpage'),$_smarty_tpl);?>
">Админка</a></li>
                        <?php }?>
                        <li><a href="<?php echo smarty_function_url(array('route'=>'vacancies'),$_smarty_tpl);?>
">Вакансии</a></li>
                        <li><a href="<?php echo smarty_function_url(array('route'=>'personal','action'=>'projects'),$_smarty_tpl);?>
">Личный кабинет</a></li>
                        <li><a href="<?php echo smarty_function_url(array('route'=>'logout'),$_smarty_tpl);?>
">Выход</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo smarty_function_url(array('route'=>'registration'),$_smarty_tpl);?>
">Регистрация</a></li>
                        <li><a href="<?php echo smarty_function_url(array('route'=>'loginpage'),$_smarty_tpl);?>
">Вход</a></li>
                    <?php }?>
                 </ul>
            </div>
        </div>
    </nav>

    <div class="content" id="text">
        <div class="col-md-12">
            
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/team.js" type="text/javascript"></script>

    <ul class="nav nav-tabs" style="margin-top:30px; margin-bottom: 30px">
        <li role="presentation" class="active"><a href="#">Мои проекты</a></li>
        <li role="presentation"><a href="<?php echo smarty_function_url(array('route'=>'personal','action'=>'masters'),$_smarty_tpl);?>
">Запись на Мастер-классы</a></li>
        <li role="presentation"><a href="<?php echo smarty_function_url(array('route'=>'personal','action'=>'profile'),$_smarty_tpl);?>
">Личная информация</a></li>
    </ul>

    <?php /*  Call merged included template "pages/includes/invitations.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('pages/includes/invitations.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '25451580435fe3b9541-12262151');
content_580b7afd871e51_87073430($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pages/includes/invitations.tpl" */?>

    <div class="col-md-12">
        <h4>МОИ ПРОЕКТЫ</h4>
        <hr>
        <p>Пока регистрация закрыта</p>
        <a href="<?php echo smarty_function_url(array('route'=>'form'),$_smarty_tpl);?>
" class="btn btn-primary">ЗАРЕГИСТРИРОВАТЬ НОВЫЙ ПРОЕКТ</a>
        <br><br>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['project']->key;
?>
            <div class="col-md-12" style="margin-bottom: 20px">
                <div class="timetable-body">
                    <div class="timetable-name">
                        <span><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
. <?php echo $_smarty_tpl->tpl_vars['project']->value->title;?>
</span>
                    </div>
                    <div class="timetable-body-more">
                        <h4>Описание проекта</h4>
                        <hr>
                        <p><?php echo $_smarty_tpl->tpl_vars['project']->value->description;?>
</p>
                        <div>
                            <ul>
                                <li><strong>Тип проекта: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->branch->title;?>
</li>
                            </ul>
                        </div>
                        <h4>Команда проекта</h4>
                        <hr>
                        <?php  $_smarty_tpl->tpl_vars['participant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['participant']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['participants']->value[$_smarty_tpl->tpl_vars['pid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->key => $_smarty_tpl->tpl_vars['participant']->value) {
$_smarty_tpl->tpl_vars['participant']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['participant']->key;
?>
                            <div class="col-md-12">
                                <div class="<?php if ($_smarty_tpl->tpl_vars['k']->value!=$_smarty_tpl->tpl_vars['leader_ids']->value[$_smarty_tpl->tpl_vars['pid']->value]&&$_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>col-md-8<?php } else { ?>col-md-11<?php }?>">
                                    <div><span><?php echo $_smarty_tpl->tpl_vars['participant']->value->last_name;?>
 <?php echo $_smarty_tpl->tpl_vars['participant']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['participant']->value->middle_name;?>
</span></div>
                                    <div>
                                        <ul>
                                            <li><strong>Телефон участника: </strong><?php echo $_smarty_tpl->tpl_vars['participant']->value->phone;?>
</li>
                                            <li><strong>E-mail участника: </strong><?php echo $_smarty_tpl->tpl_vars['participant']->value->email;?>
</li>
                                        </ul>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['k']->value!=$_smarty_tpl->tpl_vars['leader_ids']->value[$_smarty_tpl->tpl_vars['pid']->value]&&$_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>
                                    <div class="col-md-3">
                                        <form class="form_delete_participant" action="/team/remove_participant" method="GET">
                                            <input id="participant_id" name="participant_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['participant']->value->id;?>
">
                                            <input id="project_id" name="project_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                            <div class="input-group col-md-12">
                                                <button type="submit" class="btn-xs btn-danger">Исключить из команды</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php }?>
                            </div>
                        <?php } ?>

                        <h4>Приглашения в проект</h4>
                        <hr>
                        <?php  $_smarty_tpl->tpl_vars['invitation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invitation']->_loop = false;
 $_smarty_tpl->tpl_vars['iid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pinvitations']->value[$_smarty_tpl->tpl_vars['pid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invitation']->key => $_smarty_tpl->tpl_vars['invitation']->value) {
$_smarty_tpl->tpl_vars['invitation']->_loop = true;
 $_smarty_tpl->tpl_vars['iid']->value = $_smarty_tpl->tpl_vars['invitation']->key;
?>
                            <div class="col-md-12">
                                <div class="<?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>col-md-8<?php } else { ?>col-md-11<?php }?>">
                                    <div><span><strong>Email: </strong><?php echo $_smarty_tpl->tpl_vars['invitation']->value->email;?>
</span></div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>
                                    <div class="col-md-3">
                                        <form class="form_delete_invitation" action="/team/delete_invitation" method="GET">
                                            <input id="invitation_id" name="invitation_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invitation']->value->id;?>
">
                                            <div class="input-group col-md-12">
                                                <button type="submit" class="btn-xs btn-warning">Отменить приглашение</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php }?>
                            </div>
                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>
                            <div class="collapse invitation" data-pid="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                <h4>Добавить приглашение (до семи приглашений в проекте)</h4>
                                <hr>
                                <form class="add_invitation" action="/team/add_invitation" method="POST">
                                    <input id="count_invitations" name="count_invitations" type="hidden" value="<?php echo count($_smarty_tpl->tpl_vars['pinvitations']->value[$_smarty_tpl->tpl_vars['pid']->value]);?>
">
                                    <input id="project_id" name="project_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">

                                    <span class="help-block">
                                        Перечислите электронные адреса других предполагаемых участников команды.<br>
                                        Они получат приглашение присоединиться к проекту, как только зарегистрируются на сайте, используя указанный адрес.<br>
                                        Вы можете также отправить им уведомление по указанному адресу.
                                    </span>

                                    <div class="input-group col-md-12">
                                        <label class="col-md-2" for="email_invite">E-mail*</label>
                                        <div class="col-md-5">
                                            <input
                                                    id="email_invite"
                                                    name="email_invite"
                                                    type="text"
                                                    class="form-control val-required val-email"
                                                    maxlength="100">
                                        </div>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <div class="col-md-1">
                                            <input id="notify" name="notify" type="checkbox">
                                        </div>
                                        <label class="col-md-11" for="notify">Отправить уведомление на электронную почту</label>
                                    </div>

                                    <div class="input-group col-md-12">
                                        <button type="submit" class="btn-xs btn-primary">Добавить приглашение</button>
                                    </div>
                                </form>
                            </div>
                        <?php }?>

                        <h4>Вакансии проекта</h4>
                        <hr>
                        <?php  $_smarty_tpl->tpl_vars['vacancy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vacancy']->_loop = false;
 $_smarty_tpl->tpl_vars['vid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vacancies']->value[$_smarty_tpl->tpl_vars['pid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vacancy']->key => $_smarty_tpl->tpl_vars['vacancy']->value) {
$_smarty_tpl->tpl_vars['vacancy']->_loop = true;
 $_smarty_tpl->tpl_vars['vid']->value = $_smarty_tpl->tpl_vars['vacancy']->key;
?>
                            <div class="col-md-12">
                                <div class="<?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>col-md-8<?php } else { ?>col-md-11<?php }?>">
                                    <div><span><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->title;?>
</span></div>
                                    <div>
                                        <ul>
                                            <li><strong>Описание вакансии: </strong><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->description;?>
</li>
                                        </ul>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>
                                    <div class="col-md-3">
                                        <form class="form_delete_vacancy" action="/team/remove_vacancy" method="GET">
                                            <input id="vacancy_id" name="vacancy_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['vacancy']->value->id;?>
">
                                            <div class="input-group col-md-12">
                                                <button type="submit" class="btn-xs btn-warning">Удалить вакансию</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php }?>
                            </div>

                            <div class="col-md-12"><span>Заявки, оставленные на данную вакансию</span></div>
                            <?php  $_smarty_tpl->tpl_vars['a_participant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a_participant']->_loop = false;
 $_smarty_tpl->tpl_vars['ka'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vacancies_participants']->value[$_smarty_tpl->tpl_vars['pid']->value][$_smarty_tpl->tpl_vars['vid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a_participant']->key => $_smarty_tpl->tpl_vars['a_participant']->value) {
$_smarty_tpl->tpl_vars['a_participant']->_loop = true;
 $_smarty_tpl->tpl_vars['ka']->value = $_smarty_tpl->tpl_vars['a_participant']->key;
?>
                                <div class="col-md-12">
                                    <div class="<?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>col-md-8<?php } else { ?>col-md-11<?php }?>">
                                        <div><span><?php echo $_smarty_tpl->tpl_vars['a_participant']->value->last_name;?>
 <?php echo $_smarty_tpl->tpl_vars['a_participant']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['a_participant']->value->middle_name;?>
</span></div>
                                        <div>
                                            <ul>
                                                <li><strong>Телефон: </strong><?php echo $_smarty_tpl->tpl_vars['a_participant']->value->phone;?>
</li>
                                                <li><strong>E-mail: </strong><?php echo $_smarty_tpl->tpl_vars['a_participant']->value->email;?>
</li>
                                                <li><strong>Компетенции: </strong><?php echo $_smarty_tpl->tpl_vars['a_participant']->value->competences;?>
</li>
                                                <li><strong>Интересы: </strong><?php echo $_smarty_tpl->tpl_vars['a_participant']->value->interests;?>
</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>
                                        <div class="col-md-3">
                                            <form class="form_add_participant" action="/team/add_participant" method="GET">
                                                <input id="vacancy_id" name="vacancy_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['vacancy']->value->id;?>
">
                                                <input id="participant_id" name="participant_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['a_participant']->value->id;?>
">
                                                <input id="project_id" name="project_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                                <div class="input-group col-md-12">
                                                    <button type="submit" class="btn-xs btn-success">Принять заявку</button>
                                                    <span>Заявитель будет включён в состав команды.</span>
                                                </div>
                                            </form>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['is_leader']->value[$_smarty_tpl->tpl_vars['pid']->value]) {?>
                            <div class="collapse vacancy" data-pid="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                <h4>Добавить вакансию (до семи вакансий в проекте)</h4>
                                <hr>
                                <form class="add_vacancy" action="/team/add_vacancy" method="POST">
                                    <input id="count_vacancies" name="count_vacancies" type="hidden" value="<?php echo count($_smarty_tpl->tpl_vars['vacancies']->value[$_smarty_tpl->tpl_vars['pid']->value]);?>
">
                                    <input id="project_id" name="project_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">

                                    <span class="help-block">
                                        Опишите вакансию для людей, требующихся в проект, в формате:
                                        <ul>
                                            <li>Кто нужен (если есть предпочтения по направлению обучения, полу, курсу)</li>
                                            <li>Для чего нужен (что надо сделать по проекту)</li>
                                            <li>Что должен уметь (какими навыками и компетенциями должен обладать человек)</li>
                                            <li>Дополнительно по желанию: командная роль (генератор идей, конструктор, тайм-менеджер и проч.), прочие пожелания.</li>
                                        </ul>
                                    </span>

                                    <div class="input-group col-md-12">
                                        <label class="col-md-12" for="vacancy_title">Название вакансии*</label>
                                        <div class="col-md-12">
                                            <input
                                                    id="vacancy_title"
                                                    name="vacancy_title"
                                                    type="text"
                                                    class="form-control val-required"
                                                    maxlength="200">
                                        </div>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <label class="col-md-12" for="vacancy_description">Описание вакансии*</label>
                                        <textarea id="vacancy_description" name="vacancy_description" class="form-control val-required"></textarea>
                                    </div>

                                    <label for="tags">Подберите категории/ключевые слова к вакансии (или введите свои):</label>

                                    <div class="input-group col-md-12">
                                        <select id="tags" name="tags[]" class="form-control select2-input-tags" multiple="multiple">
                                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value->name;?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="input-group col-md-12">
                                        <button type="submit" class="btn-xs btn-primary">Добавить вакансию</button>
                                    </div>
                                </form>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

        </div>

        <div class="col-md-12">
            
    <br>
    <hr>
    <h4 class="text-center">Учредители мероприятия:</h4>
    <br/>
    <div class="sponsors_line">
       
        <a href="http://tpu.ru/" target="_blank" class="sponsor">
            <img src="/assets/images/uchred06.jpg" height="128" width="118" >
        </a>
        <a href="http://eto.tpu.ru" target="_blank" class="sponsor">
            <img src="/assets/images/uchred03.png">
        </a>
    </div>

        </div>
    </div>

    <footer class="panel-footer text-center text-muted">
        © 2015-2016 <a href="<?php echo URL::site();?>
">Ярмарка проектов элитного технического образования</a>
        <br/>

        

            <!--LiveInternet counter-->
            <script type="text/javascript"><!--
                document.write("<a href='//www.liveinternet.ru/click' "+
                "target=_blank><img src='//counter.yadro.ru/hit?t25.6;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";"+Math.random()+
                "' alt='' title='LiveInternet: показано число посетителей за"+
                " сегодня' "+
                "border='0' width='88' height='15'><\/a>")
                //--></script>
            <!--/LiveInternet-->


            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter35045520 = new Ya.Metrika({
                                id:35045520,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true
                            });
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/35045520" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->

            <!-- Rating@Mail.ru counter -->
            <script type="text/javascript">
                var _tmr = window._tmr || (window._tmr = []);
                _tmr.push({id: "2740140", type: "pageView", start: (new Date()).getTime()});
                (function (d, w, id) {
                    if (d.getElementById(id)) return;
                    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                    ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
                    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                })(document, window, "topmailru-code");
            </script><noscript><div style="position:absolute;left:-10000px;">
                    <img src="//top-fwz1.mail.ru/counter?id=2740140;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
                </div></noscript>
            <!-- //Rating@Mail.ru counter -->
            <!-- Rating@Mail.ru logo -->
            <a href="http://top.mail.ru/jump?from=2740140">
                <img src="//top-fwz1.mail.ru/counter?id=2740140;t=364;l=1"
                     style="border:0;" height="18" width="88" alt="Рейтинг@Mail.ru" /></a>
            <!-- //Rating@Mail.ru logo -->

        

    </footer>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>

    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>

    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/ideas.js" type="text/javascript"></script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-10-22 20:43:09
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\pages\includes\invitations.tpl" */ ?>
<?php if ($_valid && !is_callable('content_580b7afd871e51_87073430')) {function content_580b7afd871e51_87073430($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['has_invitations']->value) {?>
    <div class="col-md-12">
        <h4>Вы получили приглашение в проекты:</h4>
        <hr>

        <?php  $_smarty_tpl->tpl_vars['invitation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invitation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invitations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invitation']->key => $_smarty_tpl->tpl_vars['invitation']->value) {
$_smarty_tpl->tpl_vars['invitation']->_loop = true;
?>
            <div class="col-md-9" style="margin-bottom: 20px">
                <div class="col-md-12">
                    <div class="timetable-body">
                        <div class="timetable-name"><span><?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->title;?>
</span></div>

                        <div class="timetable-body-more">
                            <div>
                                    <span>
                                        <?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->leader->last_name;?>
 <?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->leader->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->leader->middle_name;?>

                                    </span>
                            </div>
                            <div>
                                <ul>
                                    <li><strong>Телефон руководителя: </strong><?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->leader->phone;?>
</li>
                                    <li><strong>E-mail участника: </strong><?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->leader->email;?>
</li>
                                </ul>
                            </div>
                            <p><?php echo $_smarty_tpl->tpl_vars['invitation']->value->project->description;?>
</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1">
                <form action="/form/invitation_accept" method="GET">
                    <input id="invitation_id" name="invitation_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invitation']->value->id;?>
">
                    <div class="input-group col-md-12">
                        <button type="submit" class="btn-xs btn-success">Присоединиться к проекту</button>
                    </div>
                </form>
                <form action="/form/invitation_decline" method="GET">
                    <input id="invitation_id" name="invitation_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invitation']->value->id;?>
">
                    <div class="input-group col-md-12">
                        <button type="submit" class="btn-xs btn-danger">Отказаться</button>
                    </div>
                </form>
            </div>
            <hr>
        <?php } ?>
    </div>
<?php }?><?php }} ?>
