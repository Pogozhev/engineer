<?php /* Smarty version Smarty-3.1.18, created on 2016-10-25 00:41:04
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326045804362a5a5013-57818607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e56b3f03bce68a413683c88a29174a80d5411d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\form\\form.tpl',
      1 => 1477142909,
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
      1 => 1477325092,
      2 => 'file',
    ),
    'd06d2527f87a203ca6ab1fc0c256e607fb8c2b6b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\form\\invitation.tpl',
      1 => 1454228340,
      2 => 'file',
    ),
    '3862fa522aafba53580cc8b6bfa36283381349ba' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\form\\vacancy.tpl',
      1 => 1477334456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326045804362a5a5013-57818607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5804362a6c5918_41387299',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804362a6c5918_41387299')) {function content_5804362a6c5918_41387299($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
?>﻿<!DOCTYPE html>
<!--<html>-->
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js"></script>



    <title>Ярмарка проектов</title>

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
            

    <h4>РЕГИСТРАЦИЯ НА УЧАСТИЕ В КОНФЕРЕНЦИИ</h4>
    <hr>

    <p>Дедлайн регистрации проектов на сайте - <b>-Дата- 2016 года</b></p>
    <br>
    <p>Дедлайн представления проекта, оформленного по образцу - <b>-Дата- 2016 года</b></p>
    <br>
    <p>При возникновении проблем с регистрацией, обязательно делайте скриншот (чтобы мы смогли определить проблему) и присылайте на почту <b>-Адрес-</b></p>
    <p>Вопросы можно задать по телефону: <b> 8 (3822) 606-127</b></p>

    <form id="project_form" action="<?php echo smarty_function_url(array('route'=>'default','controller'=>'form','action'=>'saveproject'),$_smarty_tpl);?>
" method="POST">
        <legend>Название проекта*</legend>
        <div class="input-group col-md-12">
            <input id="project_title" name="project_title" type="text" class="form-control" maxlength="800">
        </div>
        <span class="help-block">
            Напишите рабочее короткое название проекта, которое будет отображать суть. Это название будет отображаться в базе проектов, зарегистрированных на Ярмарку.
        </span>

        <legend>Описание проекта*</legend>
        <div class="input-group col-md-12">
            <textarea id="project_description" name="project_description" class="form-control"></textarea>
        </div>
        <span class="help-block">
            В нескольких предложениях опишите суть вашего проекта, чтобы он был понятен для тех, кто совершенно не разбирается в вашей профессиональной тематике.
        </span>

        <legend>Отрасль проекта*</legend>
        <div class="input-group col-md-12">
            <select id="project_branch" name="project_branch" class="form-control">
                <?php  $_smarty_tpl->tpl_vars['branch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['branch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['branches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['branch']->key => $_smarty_tpl->tpl_vars['branch']->value) {
$_smarty_tpl->tpl_vars['branch']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['branch']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['branch']->value->id;?>
. <?php echo $_smarty_tpl->tpl_vars['branch']->value->title;?>
</option>
                <?php } ?>
            </select>
        </div>

        <legend>Приглашения к участию в проекте</legend>
        <span class="help-block">
            Перечислите электронные адреса других предполагаемых участников команды.<br>
            Они получат приглашение присоединиться к проекту, как только зарегистрируются на сайте, используя указанный адрес.<br>
            Вы можете также отправить им уведомление по указанному адресу.
        </span>
        <button type="button" class="btn-xs btn-success add_author" style="margin-bottom: 7px">Добавить приглашение</button>
        <div id="invitation_template">
            <?php /*  Call merged included template "form/invitation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('form/invitation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '326045804362a5a5013-57818607');
content_580e55c0b71f36_01822842($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "form/invitation.tpl" */?>
        </div>
        <div id="invitations"></div>

        <legend>Вакансии</legend>
        <span class="help-block">
            Опишите вакансий для людей, требующихся в проект, в формате:
            <ul>
                <li>Кто нужен (если есть предпочтения по направлению обучения, полу, курсу)</li>
                <li>Для чего нужен (что надо сделать по проекту)</li>
                <li>Что должен уметь (какими навыками и компетенциями должен обладать человек)</li>
                <li>Дополнительно по желанию: командная роль (генератор идей, конструктор, тайм-менеджер и проч.), прочие пожелания.</li>
            </ul>
        </span>
        <button type="button" class="btn-xs btn-success add_vacancy" style="margin-bottom: 7px">Добавить вакансию</button>
        <div id="vacancy_template">
            <?php /*  Call merged included template "form/vacancy.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('form/vacancy.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '326045804362a5a5013-57818607');
content_580e55c0b8a6a7_25680286($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "form/vacancy.tpl" */?>
        </div>
        <div id="vacancies"></div>

        <hr>
        <div class="input-group col-md-12">
            <button type="submit" class="btn btn-primary">Зарегистрировать проект</button>
        </div>
    </form>

    <script src="/assets/js/form.js" type="text/javascript"></script>


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

    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>



</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-10-25 00:41:04
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\form\invitation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_580e55c0b71f36_01822842')) {function content_580e55c0b71f36_01822842($_smarty_tpl) {?><div class="collapse author" data-id="myid">
    <h4>&#10149; Предполагаемый участник <button type="button" class="btn-xs btn-success add_author[myid]" style="margin-bottom: 7px">Добавить приглашение</button></h4>

    <div class="input-group col-md-12">
        <label class="col-md-2" for="email_invite[myid]">E-mail*</label>
        <div class="col-md-5">
            <input
                    id="email_invite[myid]"
                    name="email_invite[myid]"
                    type="text"
                    class="form-control val-required val-email"
                    maxlength="40">
        </div>
        <div class="col-md-2 col-md-offset-3">
            <button type="button" tabindex="-1" class="btn-xs btn-danger" id="remove_author[myid]"">Удалить</button>
        </div>
    </div>
    <div class="input-group col-md-12">
        <div class="col-md-1">
            <input
                    id="notify[myid]"
                    name="notify[myid]"
                    type="checkbox">
        </div>
        <label class="col-md-11" for="notify[myid]">Отправить уведомление на электронную почту</label>
    </div>
</div>



<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-10-25 00:41:04
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\form\vacancy.tpl" */ ?>
<?php if ($_valid && !is_callable('content_580e55c0b8a6a7_25680286')) {function content_580e55c0b8a6a7_25680286($_smarty_tpl) {?><div class="collapse vacancy" data-id="vid">

     <h4>
        &#10149; Вакансия
        <!--<button type="button" class="btn-xs btn-success add_vacancy[vid] addb" style="margin-bottom: 7px">Добавить вакансию</button>-->
    </h4>

    <div class="input-group col-md-12">
        <label class="col-md-6" for="vacancy_title[vid]">Название вакансии*</label>
        <div class="col-md-2 col-md-offset-4">
            <button type="button" tabindex="-1" class="btn-xs btn-danger remb" id="remove_vacancy[vid]">Удалить</button>
        </div>
        <div class="col-md-12">
            <input
                    id="vacancy_title[vid]"
                    name="vacancy_title[vid]"
                    type="text"
                    class="form-control val-required"
                    maxlength="40">
        </div>

    </div>

    <div class="input-group col-md-12">
        <label class="col-md-12" for="vacancy_description[vid]">Описание вакансии*</label>
        <textarea id="vacancy_description[vid]" name="vacancy_description[vid]" class="form-control val-required"></textarea>
    </div>

    <label for="tags">Подберите категории/ключевые слова к вакансии (или введите свои):</label>

    <div class="input-group col-md-12">
        <select id="vacancy_tags[vid]" name="vacancy_tags[vid][]" class="form-control select2-input-tags" multiple="multiple">
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



</div>






<?php }} ?>
