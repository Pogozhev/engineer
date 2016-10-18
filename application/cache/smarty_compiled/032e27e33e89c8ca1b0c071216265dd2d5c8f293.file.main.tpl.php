<?php /* Smarty version Smarty-3.1.18, created on 2016-10-18 14:16:10
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\pages\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2341958042a771a6100-26133902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '032e27e33e89c8ca1b0c071216265dd2d5c8f293' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\pages\\main.tpl',
      1 => 1454256300,
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
  'nocache_hash' => '2341958042a771a6100-26133902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58042a77973739_20040460',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58042a77973739_20040460')) {function content_58042a77973739_20040460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
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
            

<!-- afisha  -->
<div id="myCarousel" class="carousel">
    <img  src="assets\images\mainFoto.jpg" width="100%" >
    <!-- Картинки в карусельке
    <div class="carousel-inner">
        <div class="active item"><img  src="assets\images\mainFoto.jpg" width="100%" ></div>
        <div class="carousel-caption">
            <h4>Первый слайд</h4>
            <p>Регистрируйтесь на все Российскую ярмарку</p>
        </div>
        <div class="item"><img  src="assets\images\mainOne.jpg" width="100%" ></div>
        <div class="carousel-caption">
            <h4>Второй слайд</h4>
            <p>Регистрируйтесь на все Российскую ярмарку</p>
        </div>
        <div class="item"><img  src="assets\images\mainTwo.jpg" width="100%" ></div>
        <div class="carousel-caption">
            <h4>Третий слайд</h4>
            <p>Регистрируйтесь на все Российскую ярмарку</p>
        </div>
    </div>
    <!-- Навигационные элементы
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>-->


    <div id="mainTable">
        <br><br>
        <div class="regbtm">
            <ul class="nav nav-pills">
                <li class="active"><a href="<?php echo smarty_function_url(array('route'=>'form'),$_smarty_tpl);?>
"><h2>Регистрация на ярмарку</h2></a></li>
            </ul>
        </div>

        <br><br>
        <!-- text   -->
        <p><a href="<?php echo URL::site('about');?>
">Ярмарка проектов</a>  – это ежегодное мероприятие, проходящее в рамках научной школы инженерного лидерства для студентов ЭТО, а также студентов, не обучающихся по данной траектории, но имеющих проект и желание его представить. </p>
        Цели Ярмарки:
        <ul>
            <li> помощь студентам в воплощении идей в реальность путем оформления их в грамотно составленный проект, готовый к реализации и участию в грантах </li>
            <li> финансовая и ресурсная поддержка интересных и важных проектов различной направленности </li>
            <li> погружение студентов в сферу проектной деятельности </li>
            <li> обратная связь от экспертов, которая поможет студентам обратить внимание на сложности и понять перспективы развития </li>
        </ul>

        В этом году весь комплекс мероприятий объединен под названием «Научная школа по инженерному изобретательству, проектированию и разработке инноваций «I’m an engineer», или сокращенно IME_2015.
        В комплекс мероприятий Школы входят: (перейдите по ссылке, чтобы узнать) <a href="<?php echo URL::site('about');?>
">О ярмарке</a>

        <br><br>

        <h3>Зачем же нужна ярмарка проектов?!<br>Что тебе делать на ярмарке проектов, если ты...</h3>
        <br><br>

        <table>
            <tr>
                <!-- info student -->
                <div class="tab-content">
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#panel1"> 1 Курс</a></li>
                        <li><a data-toggle="tab" href="#panel2"> 2 Курс</a></li>
                        <li><a data-toggle="tab" href="#panel3"> 3 Курс</a></li>
                        <li><a data-toggle="tab" href="#panel4"> 4 Курс</a></li>
                        <li><a data-toggle="tab" href="#panel5"> Магистрант 1 курса</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="panel1" class="tab-pane fade in active">
                            <h3> 1 Курс</h3>
                            <p>  Ты только влился в учебный процесс, прочувствовал первую конференц-неделю и понял, что время летит быстрее, чем тебе казалось? Хочешь сделать что-то интересное сам, но не знаешь, что именно и с чего начать? Или наоборот, полон идей, но не знаешь, что с ними делать? У тебя есть шанс начать действовать уже сейчас! Придумай идею на мастер-классе, собери команду заинтересованных людей, зарегистрируй проект и участвуй. Покажи, что твои идеи стоят исполнения! Или же, если ты активен и трудолюбив, но не можешь придумать идею сам - найди подходящую вакансию на сайте и влейся в коллектив понравившегося проекта.</p>
                        </div>

                        <div id="panel2" class="tab-pane fade">
                            <h3> 2 Курс</h3>
                            <p>  Ты сам знаешь, что сейчас проектная деятельность для тебя – обязательна. Так почему бы не использовать все шансы, чтобы сделать по-настоящему крутой проект? Мастер-классы для получения практических навыков, детальная проработка проектов и представление их на публике – это то, что поможет тебе самому разобраться в своем проекте, а также понять - чем и кому твой проект может быть интересен, что в нем стоит улучшить, и где могут таиться подводные камни.</p>
                        </div>

                        <div id="panel3" class="tab-pane fade">
                            <h3> 3 Курс</h3>
                            <p>  Ты уже знаком с тем, что такое проектная деятельность и имеешь положительный или отрицательный опыт реализации проекта. И, казалось бы, тебе уже не за чем принимать участие в таком мероприятии как «Ярмарка». Однако, если ты:
                                <br>- хочешь найти себе стажировку и летнюю практику на крутом предприятии
                                <br>- интересуешься научной работой и выполнением проектов для выбора будущей дипломной работы
                                <br>- хочешь делать стоящие проекты, которые будут доведены до конца и воплощены,
                                <br>То тебе стоит прийти! Почему? Потому что на ярмарке будут представлены проекты от кафедр, в которые требуются студенты, вакансии от настоящих предприятий Томска, которые делают интересные проекты, и готовы принять в них студентов ЭТО.</p>
                        </div>

                        <div id="panel4" class="tab-pane fade">
                            <h3> 4 Курс</h3>
                            <p>  Для вас, уважаемые выпускники, есть специальное направление – научное. Ведь ваша научная работа, иначе говоря, дипломный проект – первостепенная задача в этом году. Вы можете представить уже полученные результаты и наработки на ярмарке, получить обратную связь от опытных экспертов, презентовать возможные результаты и перспективы развития. У вас есть возможность не только попрактиковаться, но и выиграть грант на реализацию ваших исследований!</p>
                        </div>

                        <div id="panel5" class="tab-pane fade">
                            <h3> Магистрант 1 курса</h3>
                            <p>  Ты уже освоился на элитке и понял, что без проекта тебе никуда. Если хочешь поскорее включиться в активную деятельность и не просиживать штанишки, ждем тебя на ярмарке! Посети мастер-классы, собери команду, если тебе все еще не хватает людей, а если тебе всего хватает – покажи на что ты способен и практикуй свои навыки выступления на публике! Лучшие проекты получат гранты на реализацию!</p>
                        </div>
                    </div>
                </div>

            </tr>
            <tr>
                <!-- VK Widget -->
                

                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 2, wide: 1, width: "700", height: "500"}, 78711486);
                    </script>

                
            </tr>

        </table>


    </div>
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

</body>
</html><?php }} ?>
