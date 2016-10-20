<?php /* Smarty version Smarty-3.1.18, created on 2016-10-20 18:56:57
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\pages\vacancies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1735758042c1e85f8c3-63572810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5359a4db3c0713c61088e9528057b1fbc05f6a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\pages\\vacancies.tpl',
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
      1 => 1476968215,
      2 => 'file',
    ),
    '66743d4eb1945f96fc3179df4db79a2f83fa0830' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\pages\\includes\\invitations.tpl',
      1 => 1454256300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1735758042c1e85f8c3-63572810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58042c1e9bea22_67884859',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58042c1e9bea22_67884859')) {function content_58042c1e9bea22_67884859($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
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
            

    <?php /*  Call merged included template "pages/includes/invitations.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('pages/includes/invitations.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1735758042c1e85f8c3-63572810');
content_5808bf1a020e21_08098591($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "pages/includes/invitations.tpl" */?>

    <div class="col-md-12">
        <h4>ВАКАНСИИ</h4>
        <hr>
        <p align="center"><b>Если вы – руководитель или участник проекта, и понимаете, что к вам в команду нужны люди, то вы можете в личном кабинете или при регистрации проекта написать вакансию, которая отобразится на этой страничке. Участники смогут увидеть эту вакансию и подать свою кандидатуру на рассмотрение, чтобы вы выбрали в свою команду лучшего участника.</b></p>
    <hr><br>
        <form class="form_search" id="form_search" action="<?php echo smarty_function_url(array('route'=>'default','controller'=>'page','action'=>'vacancies'),$_smarty_tpl);?>
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
    <hr><br>

        <?php  $_smarty_tpl->tpl_vars['vacancy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vacancy']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vacancies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vacancy']->key => $_smarty_tpl->tpl_vars['vacancy']->value) {
$_smarty_tpl->tpl_vars['vacancy']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vacancy']->key;
?>
            <div class="collapse in <?php echo $_smarty_tpl->tpl_vars['vacancy']->value->id;?>
">
                <div class="timetable-body">
                    <div class="timetable-name"><span><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->title;?>
</span></div>
                    <div class="timetable-body-more">
                        <p><strong>Вакансия от проекта: </strong><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->project->title;?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->description;?>
</p>
                        <ul>
                            <li><strong>Телефон руководителя команды: </strong><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->project->leader->phone;?>
</li>
                            <li><strong>E-mail руководителя команды: </strong><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->project->leader->email;?>
</li>
                        </ul>
                        <p><strong>Заявок оставлено на вакансию: </strong><?php echo $_smarty_tpl->tpl_vars['vacancy']->value->get_amount();?>
</p>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['participant']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['vacancy']->value->project->leader->id!=$_smarty_tpl->tpl_vars['participant']->value->id) {?>
                    <?php if ($_smarty_tpl->tpl_vars['has_applied']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>
                        <p>Вы уже подали заявку на эту вакансию.</p>
                    <?php } else { ?>
                        <form class="form_apply" action="/form/vacancy_apply" method="GET">
                            <input id="vacancy_id" name="vacancy_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['vacancy']->value->id;?>
">
                            <div class="input-group col-md-12">
                                <button type="submit" class="btn btn-primary">Подать заявку</button>
                            </div>
                        </form>
                    <?php }?>
                <?php } else { ?>
                    <p>Это вакансия одного из ваших проектов.</p>
                <?php }?>
            <?php }?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2016-10-20 18:56:58
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\pages\includes\invitations.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5808bf1a020e21_08098591')) {function content_5808bf1a020e21_08098591($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['has_invitations']->value) {?>
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
