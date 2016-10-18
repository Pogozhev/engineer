<?php /* Smarty version Smarty-3.1.18, created on 2016-10-18 18:02:04
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\personal\masters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19271580436014f0156-90685038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e818bfe7fa5c4809fad82de0ef202ea1309d35a6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\personal\\masters.tpl',
      1 => 1454228340,
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
      1 => 1476777390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19271580436014f0156-90685038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5804360173ddf0_67276649',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804360173ddf0_67276649')) {function content_5804360173ddf0_67276649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
?>﻿<!DOCTYPE html>
<!--<html>-->
<html lang="en">
<head>
    <title>Ярмарка проектов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/main.css" rel="stylesheet" media="screen">

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
                    <li class="sidebar-option"><a href="<?php echo URL::site('vacancies');?>
"> <div class="btm">Вакансии</div></a></li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('experts');?>
"><div class="btm">Эксперты</div></a></li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('foto');?>
"><div class="btm">Галерея </div></a></li>
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
            
    <script src="/assets/js/masters.js" type="text/javascript"></script>

    <ul class="nav nav-tabs" style="margin-top:30px; margin-bottom: 30px">
        <li role="presentation"><a href="<?php echo smarty_function_url(array('route'=>'personal','action'=>'projects'),$_smarty_tpl);?>
">Мои проекты</a></li>
        <li role="presentation" class="active"><a href="#">Запись на Мастер-классы</a></li>
        <li role="presentation"><a href="<?php echo smarty_function_url(array('route'=>'personal','action'=>'profile'),$_smarty_tpl);?>
">Личная информация</a></li>
    </ul>

    <h4>ЗАПИСЬ НА МАСТЕР-КЛАССЫ</h4>
    <hr>
    <p align="center"><b>Вы можете записаться максимум на 5 мастер-классов, не пересекающихся во времени.</b></p>

    <form class="masters_form" action="/personal/save_masters" method="POST">
        <span>Мастер-классы участника</span> <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable(0, null, 0);?>
        <input id="participant_id" name="participant_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['participant']->value->id;?>
">
        <div class="input-group col-md-12">
            <select id="master1_id" name="master1_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0"
                        >Нет мастер-класса</option>
                <?php  $_smarty_tpl->tpl_vars['master'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['master']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['masters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['master']->key => $_smarty_tpl->tpl_vars['master']->value) {
$_smarty_tpl->tpl_vars['master']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['master']->key;
?>
                    <option
                            data-begin="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_begin;?>
"
                            data-end="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_end;?>
"
                            data-left="<?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
"
                            <?php if (isset($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][0])) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][0]==$_tmp1) {?>selected<?php }?><?php }?>>
                        <?php echo date('d M H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_begin);?>
-<?php echo date('H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_end);?>
. <?php echo $_smarty_tpl->tpl_vars['master']->value->title;?>
 (Осталось мест: <?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
)
                    </option>
                <?php } ?>
            </select>
            <select id="master2_id" name="master2_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                <?php  $_smarty_tpl->tpl_vars['master'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['master']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['masters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['master']->key => $_smarty_tpl->tpl_vars['master']->value) {
$_smarty_tpl->tpl_vars['master']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['master']->key;
?>
                    <option
                            data-begin="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_begin;?>
"
                            data-end="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_end;?>
"
                            data-left="<?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
"
                            <?php if (isset($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][1])) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][1]==$_tmp2) {?>selected<?php }?><?php }?>>
                        <?php echo date('d M H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_begin);?>
-<?php echo date('H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_end);?>
. <?php echo $_smarty_tpl->tpl_vars['master']->value->title;?>
 (Осталось мест: <?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
)
                    </option>
                <?php } ?>
            </select>
            <select id="master3_id" name="master3_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                <?php  $_smarty_tpl->tpl_vars['master'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['master']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['masters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['master']->key => $_smarty_tpl->tpl_vars['master']->value) {
$_smarty_tpl->tpl_vars['master']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['master']->key;
?>
                    <option
                            data-begin="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_begin;?>
"
                            data-end="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_end;?>
"
                            data-left="<?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
"
                            <?php if (isset($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][2])) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][2]==$_tmp3) {?>selected<?php }?><?php }?>>
                        <?php echo date('d M H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_begin);?>
-<?php echo date('H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_end);?>
. <?php echo $_smarty_tpl->tpl_vars['master']->value->title;?>
 (Осталось мест: <?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
)
                    </option>
                <?php } ?>
            </select>
            <select id="master4_id" name="master4_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                <?php  $_smarty_tpl->tpl_vars['master'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['master']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['masters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['master']->key => $_smarty_tpl->tpl_vars['master']->value) {
$_smarty_tpl->tpl_vars['master']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['master']->key;
?>
                    <option
                            data-begin="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_begin;?>
"
                            data-end="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_end;?>
"
                            data-left="<?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
"
                            <?php if (isset($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][3])) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][3]==$_tmp4) {?>selected<?php }?><?php }?>>
                        <?php echo date('d M H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_begin);?>
-<?php echo date('H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_end);?>
. <?php echo $_smarty_tpl->tpl_vars['master']->value->title;?>
 (Осталось мест: <?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
)
                    </option>
                <?php } ?>
            </select>
            <select id="master5_id" name="master5_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                <?php  $_smarty_tpl->tpl_vars['master'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['master']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['masters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['master']->key => $_smarty_tpl->tpl_vars['master']->value) {
$_smarty_tpl->tpl_vars['master']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['master']->key;
?>
                    <option
                            data-begin="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_begin;?>
"
                            data-end="<?php echo $_smarty_tpl->tpl_vars['master']->value->unixtime_end;?>
"
                            data-left="<?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
"
                            <?php if (isset($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][4])) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['master']->value->id;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['p_masters']->value[$_smarty_tpl->tpl_vars['k']->value][4]==$_tmp5) {?>selected<?php }?><?php }?>>
                        <?php echo date('d M H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_begin);?>
-<?php echo date('H:i',$_smarty_tpl->tpl_vars['master']->value->unixtime_end);?>
. <?php echo $_smarty_tpl->tpl_vars['master']->value->title;?>
 (Осталось мест: <?php echo $_smarty_tpl->tpl_vars['master_lefts']->value[$_smarty_tpl->tpl_vars['m']->value];?>
)
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="input-group col-md-12">
			<button type="submit" class="btn btn-primary">Сохранить список моих Мастер-классов</button>
        </div>
    </form>

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

</body>
</html><?php }} ?>
