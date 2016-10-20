<?php /* Smarty version Smarty-3.1.18, created on 2016-10-20 18:49:51
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\pages\ideas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1395958042b78f17034-67149963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce1a63321a42f91b9f35e11782a28f8cdcd3fc1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\pages\\ideas.tpl',
      1 => 1476962025,
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
      1 => 1476962025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1395958042b78f17034-67149963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58042b79182de0_10841992',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58042b79182de0_10841992')) {function content_58042b79182de0_10841992($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
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
            

    <h4>БАНК ИДЕЙ</h4>
    <p> – это сборник идей студентов, которые так и не реализовались.
        Если у вас нет идеи, то вы можете позаимствовать ее отсюда.
        Если вы решаете взять идею из банка, вы можете написать автору идеи (если он есть), поинтересоваться у него, как она была оформлена и почему не реализовалась. Или же просто придумать свой путь реализации и преобразовать эту идею в проект.</p>

    <hr>

    <form class="form_search" id="form_search" action="<?php echo smarty_function_url(array('route'=>'default','controller'=>'page','action'=>'ideas'),$_smarty_tpl);?>
" method="GET">

        <label for="tags">Поиск идей по ключевым словам или описанию:</label>
        <div class="input-group col-md-12">
            <div class="col-md-8">
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

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Найти</button>
            </div>
        </div>
    </form>

    <hr>

    <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
        <form class="collapse form_idea" id="form_general" action="<?php echo smarty_function_url(array('route'=>'default','controller'=>'edit','action'=>'edit_idea'),$_smarty_tpl);?>
" method="POST">
            <label for="">Название идеи</label>
            <div class="input-group col-md-12">
                <input id="title" name="title" type="text" class="form-control" maxlength="800">
            </div>

            <label for="">Описание идеи</label>
            <div class="input-group col-md-12">
                <textarea id="description" name="description" class="form-control" maxlength="2000"></textarea>
            </div>

            <label for="">Как к Вам обращаться</label>
            <div class="input-group col-md-12">
                <input id="person" name="person" type="text" class="form-control" maxlength="400">
            </div>

            <label for="">Ваш E-mail</label>
            <div class="input-group col-md-12">
                <input id="email" name="email" type="text" class="form-control" maxlength="400">
            </div>

            <label for="tags">Подберите категории/ключевые слова к идее (или введите свои):</label>
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

            <hr>
            <div class="input-group col-md-12">
                <button type="submit" class="btn btn-primary">Добавить!</button>
            </div>
        </form>

        <div style="margin-bottom: 30px">
            <button type="button" tabindex="-1" class="btn-xs btn-success" id="edit_btn_general">Показать/скрыть форму добавления идей</button>
        </div>
        <hr>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['idea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['idea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ideas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['idea']->key => $_smarty_tpl->tpl_vars['idea']->value) {
$_smarty_tpl->tpl_vars['idea']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
            <form class="collapse form_idea form<?php echo $_smarty_tpl->tpl_vars['idea']->value->id;?>
" action="<?php echo smarty_function_url(array('route'=>'default','controller'=>'edit','action'=>'edit_idea'),$_smarty_tpl);?>
" method="POST">
                <label for="">Название идеи</label>
                <div class="input-group col-md-12">
                    <input id="title" name="title" type="text" class="form-control" maxlength="800" value="<?php echo $_smarty_tpl->tpl_vars['idea']->value->title;?>
">
                </div>

                <label for="">Описание идеи</label>
                <div class="input-group col-md-12">
                    <textarea id="description" name="description" class="form-control" maxlength="2000"><?php echo $_smarty_tpl->tpl_vars['idea']->value->description;?>
</textarea>
                </div>

                <label for="">Как к Вам обращаться</label>
                <div class="input-group col-md-12">
                    <input id="person" name="person" type="text" class="form-control" maxlength="400" value="<?php echo $_smarty_tpl->tpl_vars['idea']->value->person;?>
">
                </div>

                <label for="">Ваш E-mail</label>
                <div class="input-group col-md-12">
                    <input id="email" name="email" type="text" class="form-control" maxlength="400" value="<?php echo $_smarty_tpl->tpl_vars['idea']->value->email;?>
">
                </div>

                <label for="tags">Добавьте категории/ключевые слова (старые останутся в описании):</label>
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

                <hr>
                <input id="id" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idea']->value->id;?>
">
                <div class="input-group col-md-12">
                    <button type="submit" class="btn btn-primary">Добавить идею</button>
                </div>
            </form>
        <?php }?>

        <div class="collapse in idea<?php echo $_smarty_tpl->tpl_vars['idea']->value->id;?>
">
            <div class="timetable-body">
                <div class="timetable-name"><span><?php echo $_smarty_tpl->tpl_vars['idea']->value->title;?>
</span></div>
                <div class="timetable-body-more">
                    <p><?php echo $_smarty_tpl->tpl_vars['idea']->value->description;?>
</p>
                    <ul>
                        <?php if (($_smarty_tpl->tpl_vars['idea']->value->person!='')) {?>
                            <li><strong>Автор идеи: </strong><?php echo $_smarty_tpl->tpl_vars['idea']->value->person;?>
</li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['idea']->value->email!='')) {?>
                            <li><strong>E-mail: </strong><?php echo $_smarty_tpl->tpl_vars['idea']->value->email;?>
</li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
            <div class="col-md-2">
                <button type="button" tabindex="-1" class="btn-xs btn-warning edit_btn" data-iid="<?php echo $_smarty_tpl->tpl_vars['idea']->value->id;?>
">Редактировать</button>
            </div>
            <div class="col-md-2">
                <form class="idea_delete" action="<?php echo smarty_function_url(array('route'=>'default','controller'=>'admin','action'=>'delete_idea'),$_smarty_tpl);?>
" method="GET">
                    <input id="idea_id" name="idea_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idea']->value->id;?>
">
                    <div class="input-group col-md-12">
                        <button type="submit" class="btn-xs btn-danger">Удалить!</button>
                    </div>
                </form>
            </div>
        <?php }?>
    <?php } ?>


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
    <script src="/assets/js/register.js" type="text/javascript"></script>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/form.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/ideas.js" type="text/javascript"></script>

</body>
</html><?php }} ?>
