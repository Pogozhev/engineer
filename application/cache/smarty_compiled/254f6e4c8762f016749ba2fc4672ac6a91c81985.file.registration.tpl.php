<?php /* Smarty version Smarty-3.1.18, created on 2016-10-17 18:18:44
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\account\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5298580434a4839b49-62835723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254f6e4c8762f016749ba2fc4672ac6a91c81985' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\account\\registration.tpl',
      1 => 1476706719,
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
      1 => 1454311920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5298580434a4839b49-62835723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580434a493da56_50016746',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580434a493da56_50016746')) {function content_580434a493da56_50016746($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
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
                    <li class="sidebar-option"><a href="<?php echo URL::site('sections');?>
"> <div class="btm">Программа ярмарки</div></a></li>
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
            
    <script src="/assets/js/jquery.form.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/register.js" type="text/javascript"></script>

    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

    <h4>РЕГИСТРАЦИЯ ПОЛЬЗОВАТЕЛЯ</h4>
    <hr>

    <p class="info"><b>Зарегистрированные пользователи допускаются к участию в конференции и мастер-классах.</b></p>

    <form id="register_form" method="post" action="/account/register">

        <div class="input-group col-md-12">
            <label class="col-md-2" for="last_name">Фамилия*</label>
            <div class="col-md-5">
                <input
                        id="last_name"
                        name="last_name"
                        type="text"
                        class="form-control val-required"
                        maxlength="40">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-2" for="first_name">Имя*</label>
            <div class="col-md-5">
                <input
                        id="first_name"
                        name="first_name"
                        type="text"
                        class="form-control val-required"
                        maxlength="40">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-2" for="middle_name">Отчество</label>
            <div class="col-md-5">
                <input
                        id="middle_name"
                        name="middle_name"
                        type="text"
                        class="form-control"
                        maxlength="40">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-2" for="email">E-mail*</label>
            <div class="col-md-5">
                <input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control"
                        maxlength="60">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-2" for="password">Пароль*</label>
            <div class="col-md-5">
                <input
                        id="password"
                        name="password"
                        type="password"
                        class="form-control"
                        maxlength="40">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-2" for="password_conf">Повторите пароль*</label>
            <div class="col-md-5">
                <input
                        id="password_conf"
                        name="password_conf"
                        type="password"
                        class="form-control"
                        maxlength="40">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-2" for="phone">Контактный телефон*</label>
            <div class="col-md-5">
                <input
                        id="phone"
                        name="phone"
                        type="text"
                        class="form-control val-required"
                        maxlength="12">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-12" for="url_vk">Ссылка на страницу ВКонтакте (если есть)</label>
            <div class="col-md-5">
                <input
                        id="url_vk"
                        name="url_vk"
                        type="text"
                        class="form-control"
                        maxlength="100">
            </div>
        </div>
        <div class="input-group col-md-12">
            <label class="col-md-12" for="url_fb">Ссылка на страницу в Facebook (если есть)</label>
            <div class="col-md-5">
                <input
                        id="url_fb"
                        name="url_fb"
                        type="text"
                        class="form-control"
                        maxlength="100">
            </div>
        </div>

        <div class="form-group col-md-12">
            Место обучения в данный момент:
            <label class="radio-block">
                <input type="radio" class="school" name="is_university" value="0"> <strong>Школа</strong>
            </label>
            <label class="radio-block">
                <input type="radio" class="university" name="is_university" value="1" checked> <strong>ВУЗ</strong>
            </label>
        </div>
        <div class="col-md-12">
            <div class="collapse school">
                <div class="input-group col-md-12">
                    <label class="col-md-4" for="school_title">Полное название школы*</label>
                    <div class="col-md-8">
                        <input
                                id="school_title"
                                name="school_title"
                                type="text"
                                class="form-control val-required"
                                maxlength="255">
                    </div>
                </div>
                <div class="input-group col-md-12">
                    <label class="col-md-4" for="school_class">Название класса*</label>
                    <div class="col-md-4">
                        <input
                                id="school_class"
                                name="school_class"
                                type="text"
                                class="form-control val-required"
                                maxlength="255">
                    </div>
                </div>
            </div>

            <div class="collapse in university">
                <div class="input-group col-md-12">
                    <label class="col-md-4" for="course">Курс*</label>
                    <div class="col-md-4">
                        <select id="course" name="course" class="form-control">
                            <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['course']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['course']->value->title;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="input-group col-md-12">
                    <label class="col-md-4" for="uni_title">Полное название ВУЗа*</label>
                    <div class="col-md-8">
                        <input
                                id="uni_title"
                                name="uni_title"
                                type="text"
                                class="form-control val-required"
                                maxlength="255">
                    </div>
                </div>
                <div class="input-group col-md-12">
                    <label class="col-md-4" for="uni_inst">Институт*</label>
                    <div class="col-md-8">
                        <input
                                id="uni_inst"
                                name="uni_inst"
                                type="text"
                                class="form-control val-required"
                                maxlength="255">
                    </div>
                </div>
                <div class="input-group col-md-12">
                    <label class="col-md-5" for="uni_group">Группа основного образования*</label>
                    <div class="col-md-4">
                        <input
                                id="uni_group"
                                name="uni_group"
                                type="text"
                                class="form-control val-required"
                                maxlength="255">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    Являетесь ли Вы студентом системы элитного технического образования?
                    <label class="radio-block">
                        <input type="radio" class="elit_no" name="is_elit" value="0" checked> <strong>Нет</strong>
                    </label>
                    <label class="radio-block">
                        <input type="radio" class="elit_yes" name="is_elit" value="1"> <strong>Да</strong>
                    </label>
                </div><br>
                <div class="col-md-12">
                    <div class="collapse elit">
                        <div class="input-group col-md-12">
                            <label class="col-md-5" for="elit_group">Номер элитной группы*</label>
                            <div class="col-md-4">
                                <input
                                        id="elit_group"
                                        name="elit_group"
                                        type="text"
                                        class="form-control val-required"
                                        maxlength="20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- <legend>Ваши компетенции*</legend>
        <div class="input-group col-md-12">
            <textarea id="competences" name="competences" class="form-control"></textarea>
        </div>
        <span class="help-block">
            Опишите ваши навыки и умения. Что вы умеете делать отлично, чему только учитесь (прим: пайка, сборка механизмов, программирование контроллеров в совершенстве, черчение, математическое моделирование в процессе освоения, знание физических процессов на уровне начальных знаний). Набор навыков и умений может быть любым, вспоминайте все, что для вас привычно и просто – это может быть жизненно необходимо в каком-либо из проектов.
        </span>

        <legend>Ваши интересы*</legend>
        <div class="input-group col-md-12">
            <textarea id="interests" name="interests" class="form-control"></textarea>
        </div>
        <span class="help-block">
            Опишите сферу ваших интересов – какие проекты и области знаний привлекают вас (прим: медицина, разработка освещения для растений в теплице, написание сайтов, продвижение проектов). Опишите все ваши интересы, даже если вам кажется, что они не пригодятся в проектах – в командах бывают совершенно неожиданные потребности.
        </span>
        -->

        <label for="tags">Выберите подходящие Вам компетенции или таланты (в крайнем случае, введите свои):</label>
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
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
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
