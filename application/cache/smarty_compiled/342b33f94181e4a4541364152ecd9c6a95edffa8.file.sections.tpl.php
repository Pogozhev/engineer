<?php /* Smarty version Smarty-3.1.18, created on 2016-10-25 03:28:53
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\pages\sections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30901580439a6742198-42712136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342b33f94181e4a4541364152ecd9c6a95edffa8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\pages\\sections.tpl',
      1 => 1477344506,
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
      1 => 1477344529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30901580439a6742198-42712136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580439a685cc76_03018587',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580439a685cc76_03018587')) {function content_580439a685cc76_03018587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
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
                    <!--<li class="sidebar-option"><a href="<?php echo URL::site('vacancies');?>
"> <div class="btm">Вакансии</div></a></li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('experts');?>
"><div class="btm">Эксперты</div></a></li>
                    <li class="sidebar-option"><a href="<?php echo URL::site('foto');?>
"><div class="btm">Галерея </div></a></li>-->
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
            

    <h4>ПРОГРАММА ЯРМАРКИ</h4>
    <hr>

    <p><b style="color:#ec8b3d;display:inline-block; padding-left:10px; border-left: 7px solid #ec8b3d;">«Оранжевый»</b> - только для тех, кто зарегистрировал свой проект</p>
    <p><b style="color:blue;display:inline-block; padding-left:10px; border-left: 7px solid blue;">«Синий»</b> - только по предварительной регистрации на сайте</p>
    <p><b style="color:green;display:inline-block; padding-left:10px; border-left: 7px solid green;">«Зелёный»</b> - вход свободный</p>


<h3><i class="fa fa-clock-o"></i> 10 ноября 2016 года</h3>
<ul class="timetable-items">
      <li class="blue">
        <div class="timetable-time">16:10<br>18:20</div>
        <div class="timetable-body">

            <div class="timetable-name"><span >Мастер-класс по созданию и развитию стартапа </span></div>
            <div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19к. </div>
            <div class="timetable-place"> 
Цель стартап-интенсива — дать студентам простые инструменты для создания небольшого интернет-проекта, которые позволят получить первый бизнес-опыт и немного заработать, не отвлекаясь от учёбы

            <div class="timetable-body-more">
                <p>
<ul>
                 Программа мастер-класса:
  <li> Генерация идей стартапа. Как придумать и выбрать идею для бизнеса.  </li> 

  <li> Бизнес-модели стартапов. Как перейти от хорошей идеи к работающему бизнесу. Что делать в первые четыре недели после открытия бизнеса.</li> 

  <li> Прототипирование сайта или мобильного приложения. От фантазий и планов к первым клиентам и продажам.</li> 

  <li> Продвижение проекта в интернете. Ищем потенциальных клиентов и придумываем программу превращения их в благодарных пользователей. По возможности без затрат.</li> 

  <li> Презентации полученных результатов участниками.</li> 
</ul>
                </p>

                <p><b>Ведущий:</b></p>
                <ul>
                    <li>Глеб Тертычный, CEO компании Telefacer.com, эксперт Фонда развития интернет-инициатив и новосибирского Академпарка. Предприниматель</li>
                </ul>
            </div>
        </div>
      </li>

<!--_________________________________________________________________________________________________________________________________________________-->
<h3><i class="fa fa-clock-o"></i> 11 ноября 2016 года</h3>
<ul class="timetable-items">
      <li class="blue">
        <div class="timetable-time">16:20<br>17:00</div>
        <div class="timetable-body">

            <div class="timetable-name">Открытие школы «I’m engineer» </div>
       <!--<div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19к. </div> -->
            <div class="timetable-place"> Открытие школы «I’m engineer». Итоги 2015 года, перспективы 2016 года. Что ждет нас на школе «I’m engineer».

                <!--  <div class="timetable-body-more">
                      <p>
                          Специально для секции научной работы, специально приглашенный гость Максим Титов поднимет очень важную и животрепещущую тему.
                          Если вы получаете истинное удовольствие от занятий научной деятельностью, вас манит мир открытий, экспериментов, гипотез и их доказательств, то вы, должно быть, уже задумывались – а что дальше? Куда пойти после того, как ВУЗ будет окончен?
                          Если ваши намерения в науке серьезны, или вы пока не решились посвятить ей свою жизнь, но вас к ней невероятно тянет – эта беседа точно для вас!
                          Количество участников будет ограничено, потому что Максим Титов хочет именно поговорить с вами, а не провести лекцию. Вы можете задать вопросы человеку, который реализовал свой научный потенциал в очень большом масштабе, но начинал он так же, как и вы – в университете, на третьем курсе.
                      </p>

                      <p><b>Ведущий:</b></p>
                      <ul>
                          <li>Максим Титов, руководитель коллаборации RD51 CERN</li>
                      </ul>
                  </div> -->
        </div>
      </li>
    <li class="blue">
        <div class="timetable-time">17:00<br>17:30 </div>
        <div class="timetable-body">

            <div class="timetable-name">Кофе-брейк - Персональные консультации ученого совета школы </div>
            <!--<div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19 к.</div>-->
        </div>

    </li>

    <li class="blue">
        <div class="timetable-time">17:30<br>21:00 </div>
        <div class="timetable-body">

            <div class="timetable-name">Большая игра «Специалисты будущего» </div>
            <!--<div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19 к.</div>-->
        </div>

    </li>
    </ul>

    <!--_________________________________________________________________________________________________________________________________________________-->

    <h3><i class="fa fa-clock-o"></i> 12 ноября 2016 года</h3>

    <ul class="timetable-items">
        <li class="blue">
            <div class="timetable-time">14:30 <br> 19:10 </div>
            <div class="timetable-body">

                <div class="timetable-name">Проектирование от А до Я  </div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                <div class="timetable-place"> Что такое проект? Зачем они нам нужны? Чего мы не знаем о проектах? Чего нам не хватает? Как начать? Что делать дальше? Практикум в игровой форме.

                </div>
            </div>
        </li>
        <li class="blue">
            <div class="timetable-time">14:30 <br> 19:10 </div>
            <div class="timetable-body">

                <div class="timetable-name">Как приручить паяльник?  </div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                <div class="timetable-place"> Приглашенные гости проведут мастер-класс по схемотехнике и пайке. Участники научатся собирать небольших роботов, которые останутся у них на память.</div>

            </div>
        </li>
        <li class="blue">
            <div class="timetable-time">14:30 <br> 18:00 </div>
            <div class="timetable-body">

                <div class="timetable-name">Хакатон: подготовка </div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                <div class="timetable-place"> Вводное занятие для желающих принять участие в мероприятии, которое по длительности занимает сутки и направлено на решение сложных инженерных задач.</div>
            </div>
        </li>
</ul>


<!--_________________________________________________________________________________________________________________________________________________-->
                <h3><i class="fa fa-clock-o"></i> 13 ноября 2016 года</h3>

                <ul class="timetable-items">
                    <li class="blue">
                        <div class="timetable-time">12:00 <br> 16:50 </div>
                        <div class="timetable-body">

                            <div class="timetable-name">Школа Нескучного Доклада </div>
                            <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                            <div class="timetable-place"> Команда Science Slam расскажет об основах успешного выступления и покажет, как это выглядит на практике.</div>
                        </div>

                    </li>

                    <li class="blue">
                        <div class="timetable-time">13:00 <br> 16:50 </div>
                        <div class="timetable-body">

                            <div class="timetable-name">А вы еще не программируете микроконтроллеры?  </div>
                            <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                            <div class="timetable-place"> Один из самых необходимых навыков для современного инженера – умение программировать контроллеры. Здесь этому учат. </div>
                        </div>
                    </li>
                    <li class="blue">
                        <div class="timetable-time">15:00 <br> 16:50 </div>
                        <div class="timetable-body">

                            <div class="timetable-name">Хакатон: подготовка</div>
                            <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                            <div class="timetable-place">Второе вводное занятие для желающих принять участие в мероприятии, которое по длительности занимает сутки и направлено на решение сложных инженерных задач.</div>

                        </div>
                    </li>
                    <li class="blue">
                        <div class="timetable-time">17:00 <br> 19:00 </div>
                        <div class="timetable-body">

                            <div class="timetable-name">Инженерный кинопоказ</div>
                            <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                            <div class="timetable-place"> Просмотр актуального кино и совместное обсуждение.</div>
                        </div>
                    </li>
                    <li class="blue">
                        <div class="timetable-time">16:30 <br> 18:30 </div>
                        <div class="timetable-body">

                            <div class="timetable-name">Территория грантов или как не думать о деньгах</div>
                            <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                            <div class="timetable-place"> Где искать деньги на проект? Как решиться подать заявку? Практическое занятие в форме деловой игры.</div>
                        </div>

                    </li>
                    <li class="blue">
                        <div class="timetable-time">18:30 <br> 19:00 </div>
                        <div class="timetable-body">

                            <div class="timetable-name">Кофе-брейк без галстуков</div>
                            <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                        </div>


                    </li>
                </ul>
<!--_________________________________________________________________________________________________________________________________________________-->
<h3><i class="fa fa-clock-o"></i> 18 ноября 2016 года</h3>

    <ul class="timetable-items">

       <li class="blue">
            <div class="timetable-time">15:00<br>16:00</div>
            <div class="timetable-body">

                <div class="timetable-name">Регистрация + кофе-брейк</div>
                <!--<div class="timetable-place"><b>Место проведения:</b>105 ауд. 19 к. </div>-->

             </div>


        </li>

        <li class="blue">
            <div class="timetable-time">16:00<br>16:30</div>
            <div class="timetable-body">

                <div class="timetable-name">Приветствие</div>
                <!--<div class="timetable-place"><b>Место проведения:</b>105 ауд. 19 к. </div>-->

            </div>


        </li>

        <li class="blue">
            <div class="timetable-time">17:00<br>19:30</div>
            <div class="timetable-body">

                <div class="timetable-name">Торопа Экспертов </div>
                <!--<div class="timetable-place"><b>Место проведения:</b>105 ауд. 19 к. </div>-->
                <div class="timetable-place">Большое мероприятие с приглашенными экспертами для проектных команд. Общение, возможность задать вопросы, получить поддержку от ведущих экспертов города и области, доработка идей и разработок. </div>

            </div>


        </li>

        <li class="blue">
            <div class="timetable-time">18:00</div>
            <div class="timetable-body">

                <div class="timetable-name">Хакатон: старт </div>
                <!--<div class="timetable-place"><b>Место проведения:</b>105 ауд. 19 к. </div>-->

            </div>


        </li>
        <li class="blue">
            <div class="timetable-time">19:30<br>20:00</div>
            <div class="timetable-body">

                <div class="timetable-name">Кофе-брейк без галстуков</div>
                <!--<div class="timetable-place"><b>Место проведения:</b>105 ауд. 19 к. </div>-->

            </div>

        </li>
</ul>
  <!--  <li class="blue">
            <div class="timetable-time">14:00<br>16:30</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Генерирование идеи группа №1 </span></div>
                <div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19к.</div>
		<div class="timetable-place"> Здесь вы сможете узнать об основных методах генерации идей и сразу же применить их на практике. После данного МК у вас будет команда и множество идей для создания своего уникального проекта.
                <div class="timetable-body-more">
                    <p> 3.	Да, на сайте есть банк идей. Да, есть множество вакансий и проектов, которым не хватает специалистов. Но что делать, если твои амбиции не позволяют пользоваться готовыми идеями и присоединяться к другим командам?! Конечно, создавать СВОЕ! 
Сгенерировать идею, которая спасет мир, набрать команду супер-технарей и выиграть с ними главный приз Ярмарки проектов I’m an engineer – не это ли твоя главная цель?! 
На этом мастер-классе тебе помогут не только с идеей, но и с командой близких по духу людей, которые могут стать твоими верными соратниками в проектной деятельности на ЭТО! Не отдавай никому свой главный приз Ярмарки – 30 000 рублей! Ведь возможно именно твоя будущая идея достойна этого гранта! Осталось только поймать ее и воплотить в жизнь. Как минимум с первым пунктом тебе помогут именно на этом МК! А быть может и со вторым…все зависит от тебя!
И даже если амбициозные мировые цели – это не твое, но у тебя есть насущные проблемы, которые надо решать, приходи на этот МК. Тебе расскажут, как из всего вокруг смастерить такую идею, за которую и денег дать не жалко!

</p>
<p><b>Ведущий: </b></p>
                    <ul type="disc">
                        <li>Тимошин Никита  </li>

                    </ul>
                </div>
            </div>

 </li><li class="blue">
            <div class="timetable-time">17:00<br>19:30</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Мастер-класс по пайке группа №2</span></div>
                <div class="timetable-place"><b>Место проведения:</b> Красноармейская 147</div>
		<div class="timetable-place"> Участники мастер-класса построят свою первую электронную схему и узнают принципы работы некоторых электронных компонентов, узнают, как устроены многие окружающие нас электронные устройства. Узнают, что такое электрический ток, какие бывают радиодетали и как они работают, соберут некоторые электронные схемы.

Программа мастер-класса:
	<ul>
	<li>Закон Ома.</li>
	<li>Базовые электронные компоненты.</li>
	<li>Макетирование и изготовление печатных плат.</li>
	<li>Измерительные приборы: мультиметр, осцилограф.</li>
	<li>Практическое обучение пайке с изготовлением простейшей электронной схемы.</li>
	</ul>
 
                <div class="timetable-body-more">
                    <p>1.	Ты уже учишься в университете (а возможно даже давно!), искренне считаешь себя закоренелым технарём, знаешь все шутки из соц-сетей о том, как правильно держать паяльник, но при этом никогда этот самый паяльник в руках не держал?! Тогда тебе к нам! 
Увлекательные тонкости выбора припоя, запах плавящегося материала, романтика выбора оптимальной рабочей температуры и чувство причастности к тайной группе «паявших» не оставит тебя равнодушным в холодные осенние выходные! </p>
<p><b>Ведущий: </b></p>
                    <ul type="disc">
                        <li>Римма Пак  </li>
<li><a href="http://cmit.ru" target="_blank">ЦМИТ "Дружба"</a></li>

                    </ul>
                </div>
            </div>

             

        </li><li class="blue">
            <div class="timetable-time">17:00<br>19:30</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Генерирование идеи группа №2</span></div>
                <div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19к.</div>
		<div class="timetable-place"> Здесь вы сможете узнать об основных методах генерации идей и сразу же применить их на практике. После данного МК у вас будет команда и множество идей для создания своего уникального проекта.
                <div class="timetable-body-more">
                    <p> 3.	Да, на сайте есть банк идей. Да, есть множество вакансий и проектов, которым не хватает специалистов. Но что делать, если твои амбиции не позволяют пользоваться готовыми идеями и присоединяться к другим командам?! Конечно, создавать СВОЕ! 
Сгенерировать идею, которая спасет мир, набрать команду супер-технарей и выиграть с ними главный приз Ярмарки проектов I’m an engineer – не это ли твоя главная цель?! 
На этом мастер-классе тебе помогут не только с идеей, но и с командой близких по духу людей, которые могут стать твоими верными соратниками в проектной деятельности на ЭТО! Не отдавай никому свой главный приз Ярмарки – 30 000 рублей! Ведь возможно именно твоя будущая идея достойна этого гранта! Осталось только поймать ее и воплотить в жизнь. Как минимум с первым пунктом тебе помогут именно на этом МК! А быть может и со вторым…все зависит от тебя!
И даже если амбициозные мировые цели – это не твое, но у тебя есть насущные проблемы, которые надо решать, приходи на этот МК. Тебе расскажут, как из всего вокруг смастерить такую идею, за которую и денег дать не жалко!

</p>
<p><b>Ведущий: </b></p>
                    <ul type="disc">
                        <li>Тимошин Никита  </li>

                    </ul>
                </div>
            </div>
        </li> ->>
<!--__________________________________________________________________________________________________________________________________________________________________-->
<h3><i class="fa fa-clock-o"></i> 19 ноября 2016 года</h3>

       <ul class="timetable-items">
           <li class="blue">
               <div class="timetable-time">14:00 <br> 16:00 </div>
               <div class="timetable-body">

                   <div class="timetable-name">Консультационная поддержка проектов перед защитой</div>
                   <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->


                   </div>

           </li>
           <li class="blue">
               <div class="timetable-time">16:00 <br> 18:00 </div>
               <div class="timetable-body">

                   <div class="timetable-name">Большой Воркшоп НТИ</div>
                   <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                   <div class="timetable-place"> Обсуждение одной из актуальных проблем внутри групп. Модераторы – приглашенные эксперты.</div>

               </div>
           </li>
           <li class="blue">
               <div class="timetable-time">18:00 <br> 18:30 </div>
               <div class="timetable-body">

                   <div class="timetable-name">Кофе-брейк без галстуков</div>
                   <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->

               </div>
           </li>
           <li class="blue">
               <div class="timetable-time">20:00 </div>
               <div class="timetable-body">

                   <div class="timetable-name">Хакатон: финиш</div>
                   <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div> -->

               </div>
           </li>
       </ul>
       <!--<li class="blue">
            <div class="timetable-time">10:00<br>13:00</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Программирование контроллеров группа №2</span></div>
                <div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19к. </div>
		<div class="timetable-place"> Цель МК – получение базовых навыков работы в среде MexBIOS для программирования микроконтроллеров
Студенты получат навыки – быстрой разработки программ для DSP микроконтроллеров
Программа мастер-класса:
<ul>
	<li>Вводная часть - презентация</li>
	<li>Изучение различных способов программирования в среде MBDS</li>
	<li>Изучение способов программирование в среде</li>
	<li>Изучение различных режимов работ</li>	
	<li>Создание системы управления силовой установкой лифта</li>
	<li>Рассмотрение примера работы силовой установкой лифта</li>
	<li>Создание собственной системы управления лифта</li>
	<li>Создание системы управления двухкоординатным приводом</li>
	<li>Изучение управления шаговым двигателем</li>
</ul>

                    
                <div class="timetable-body-more">
                    <p>Эти маленькие восхитительные комочки процессора и соединений, одни размером с рабочий стол, другие же не больше спичечного коробка – кто знает, что на самом деле они могут? Только те, кто самостоятельно программировал их хоть раз в жизни!  АЛУ, ЦПУ и ОЗУ, порты ввода и вывода, АЦП – даже если масса этих непонятных букв ни о чем тебе не говорит, ты все равно сможешь спрограммировать свой первый контроллер делать простейшие задачи! Ведь ничего не может быть проще работы на крутых схемах под руководством крутых мастеров. </p>
                     <p><b>Ведущий: </b></p>
                    <ul type="disc">
                        <li>Киселев Алексей, кандидат технических наук  </li>
<li><a href="http://mechatronica-pro.com" target="_blank">ООО "НПФ Мехатроника-Про"</a></li>

                    </ul>

                    
                </div>
            </div>             -->



<!--__________________________________________________________________________________________________________________________________________________________________-->
    <h3><i class="fa fa-clock-o"></i> 20 ноября 2016 года</h3>
    <ul class="timetable-items">
        <li class="blue">
            <div class="timetable-time">11:30 <br> 12:00 </div>
            <div class="timetable-body">

                <div class="timetable-name">Регистрация на защиту</div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->


            </div>
        </li>
        <li class="blue">
            <div class="timetable-time">12:00 <br> 14:00 </div>
            <div class="timetable-body">

                <div class="timetable-name">Итоговая защита проектов </div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->
                <div class="timetable-place"> Защита проработанных проектов по секциям.</div>

            </div>
        </li>
        <li class="blue">
            <div class="timetable-time">14:00 <br> 14:30 </div>
            <div class="timetable-body">

                <div class="timetable-name">Кофе-брейк</div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div>-->

            </div>
        </li>
        <li class="blue">
            <div class="timetable-time">14:30 <br> 15:00 </div>
            <div class="timetable-body">

                <div class="timetable-name">Награждение</div>
                <!--<div class="timetable-place"><b> Место проведения:</b> 139ауд.(коридор) 19к.</div> -->
                <div class="timetable-place"> Вручение подарков и призов победителям.</div>

            </div>
        </li>
    </ul>

<!--__________________________________________________________________________________________________________________________________________________________________-->
    <!-- <h3><i class="fa fa-clock-o"></i> 21 ноября 2015 года</h3>

        <ul class="timetable-items">
    <li class="blue">
        <div class="timetable-time">14:00<br>14:30 </div>
        <div class="timetable-body">

            <div class="timetable-name">Кофе-брейк - Персональные консультации ученого совета школы </div>
            <div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19 к.</div>
	    <div class="timetable-place"> Возможность спросить совета о проекте у экспертов в неформальной обстановке, просмотреть план дня и определить личную траекторию на день в зависимости от секции и направления проекта
            


        </div>
    </li><li class="green">
        <div class="timetable-time">14:30<br>14:40</div>
        <div class="timetable-body">

            <div class="timetable-name"><span>Установочная лекция «Ярмарка проектов, ярмарка идей – возможности и ограничения?»</span></div>
            <div class="timetable-place"><b>Место проведения:</b> 139 ауд. 19 к.</div>
	    <div class="timetable-place"> Для того, чтобы работа с экспертами над проектом была максимально полезной для каждого, будет рассказано о всех возможностях, технических ограничениях и путях, по которым вы сможете вывести свой проект в лидеры на Ярмарке.
            <div class="timetable-body-more">
                <p>Формат ярмарки всегда неизменен, но наполнение и цели меняются каждый год. Чтобы быть на гребне волны, понимать тенденции, требования и критерии оценки ваших проектов, вам будет рассказано о предстоящих событиях. 
Как за огромным количеством людей, суматохой регистраций и переходов, общим движением увидеть реальные возможности, которые сильно поднимут ваш проект над другими?
Как не потеряться во всем, что будет происходить и не скатиться к периферии всей деятельности?
Задайте себе эти вопросы и попытайтесь найти ответы внутри себя. А на установочной лекции вам расскажут ответы по версии организаторов и Администрации ОЭО.
</p>
<p><b>Ведущий: </b></p>
                    <ul type="disc">
                        <li>Серебрякова Евгения Николаевна, начальник ОЭО, директор IQ Group </li>
						

                    </ul>

            </div>


        </div>
    </li><li class="red">
        <div class="timetable-time">14:40<br>16:00</div>
        <div class="timetable-body">

            <div class="timetable-name"><span>Экспертная сессия</span></div>
            <div class="timetable-place"><b>Место проведения:</b> 139, 105, 104, 112, 113 ауд. 19 к.</div>
            <div class="timetable-place"> Техническая база проекта – это его фундамент. Без нее ни один проект не сможет воплотиться во всей полноте и достаточно серьезно.
                    Для того, чтобы ваш проект был технически оправдан, имел ценность, и чтобы вы понимали его суть, специально приглашенные эксперты отраслей помогут вам докопаться до истины.
                
		<div class="timetable-body-more">
                <p>В основе каждого проекта лежит проблема. Что-то, что не устраивает вас в окружающем мире, что вы очень хотите решить. Вам хочется сделать мир проще, добрее, уютнее, прекраснее в целом. И это замечательно!
Но понимаете ли вы суть проблемы во всей полноте? Правильный ли путь решения выбрали? На чем вообще основывается ваше решение?
Эксперты, которые отлично разбираются в технической базе, понимают суть физических, математических, социальных, компьютерных, медицинских, биологических и других процессов, смогут направить вас в нужное русло, чтобы ваш проект был реально применим в настоящей жизни.
Ведь главная цель всей Ярмарки не только помочь вам сделать проекты в теоретической базе, но натолкнуть вас и на практические решения, чтобы вы смогли воплотить ваш проект в жизнь.
</p>

               <p><b>Эксперты: </b></p>
                    <ul type="disc">
			<li><a href="http://it.innoclusters.ru/" target="_blank">Инновационного территориального кластера Томской области</a> Исполнительный директор Соколовский Игорь Эдуардович</li>
<li> <a href="http://sriinfotech.com/" target="_blank">SRI Infotech Inc</a> Тимлид команды разработки систем безопасности Дусеев Вагиз Рауфович</li>
			<li> <a href="http://contek.ru/" target="_blank">ООО "Контек-Софт"</a> Директор  Соснин Владимир Николаевич</li>
                        <li> <a href="http://electt.ru/" target="_blank">ООО "Элект"</a> Директор Золотовкий Константин Владимирович </li>
			<li> <a href="http://niipp.ru/" target="_blank">АО "НИИПП"</a> 	Начальник отдела медицинской техники Кривошеин Валентин Валентинович </li>

<li> <a href="http://niipp.ru/" target="_blank">АО "НИИПП"</a> Заместитель главного инженера Дохтуров Всеволод Всеволодович </li>
			<li> <a href="http://ft-e.com/" target="_blank">ООО "Физтех-Энерго"</a>  Директор Ерошевский Григорий Евгеньевич </li>
			<li> <a href="http://spinor.ru/" target="_blank">ООО "Спинор"</a> Зам. директора Евстигнеева Дарья Сергеевна</li>
			<li> <a href="http://iidf.ru/" target="_blank">ФРИИ</a>  Представитель фонда в Томске Екатерина Дмитриевна Автеньева </li>
			<li> <a href="http://ssmu.ru/ru/" target="_blank">СибГМУ</a> Первый проректор Деев Иван Анатольевич</li>
			<li> Комитет по атомной промышленности АТО Председатель Комитета Дроздов Николай Николаевич</li>
			<li> <a href="http://di-group.info/" target="_blank">DI-Group</a> 	Директор Ковалев Игорь Владимирович </li>
			<li> <a href="http://npowest.ru/" target="_blank">НПО "ВЭСТ"</a> 	Председатель совета директоров Кривошеин Олег Юрьевич</li>
			
			<li> <a href="http://oez.tomsk.ru/" target="_blank">ОЭЗ ТВТ "Томск"</a>  Ведущий эксперт управления взаимодействия с резидентами Осадченко Александр Александрович  </li>
			<li> <a href="http://ipc.tsc.ru/" target="_blank">ООО "Золотарь"</a> Директор Бричков Антон Сергеевич</li>
			<li> <a href="http://cmit.ru/" target="_blank">ЦМИТ Дружба</a>  Руководитель Юрий Владимирович Васильев</li>
			<li> <a href="http://mechatronica-pro.com/ru" target="_blank">ООО "НПФ Мехатроника-ПРО"</a> 	Директор Гусев Николай Владимирович</li>
			<li> <a href="http://ergolight.ru/" target="_blank">ООО "Эрголайт"</a> 	Директор Шевелев Михаил Юрьевич </li>
			<li> <a href="http://esto.tomsk.gov.ru/" target="_blank">Томский центр ресурсосбережения и энергоэффективности</a>  Генеральный директор Дмитриев Александр Владимирович</li>
			<li> <a href="http://siamoil.ru" target="_blank">ООО ТНПВО "СИАМ"</a> 	Заместитель коммерческого директора по сбыту Швыркунова Ольга Николаевна </li>
			<li> <a href="http://edu.tomsk.ru" target="_blank">ТОИПКРО</a> 	Ректор Замятина Оксана Михайловна</li>
			<li> ТПУ. Кафедра экологии и БЖД Заведующий кафедрой Романенко Сергей Владимирович </li>
			<li> ТПУ Доцент Кафедры технологии автоматизированного машиностроительного производства Шамина Ольга Борисовна</li>

                    </ul>


        </div>
    </li><li class="red">
        <div class="timetable-time">16:00<br>18:00</div>
        <div class="timetable-body">

            <div class="timetable-name"><span>Деловая игра «Тропа экспертов»</span></div>
            <div class="timetable-place"><b>Место проведения:</b>  139, холл, 105, 104, 112, 113 ауд. 19 к.</div>
            <div class="timetable-place"> В проекте самое важное – это не идея, а реализация. А для грамотной реализации нужно понимать все стороны проекта: его минусы и плюсы, умение распределять время и обязанности, видеть синергию многих отраслей, а также грамотно его презентовать.
                    Всему этому и многому другому вы научитесь у экспертов оформления проекта.
                
		<div class="timetable-body-more">
                <p>После того, как вы разберетесь с технической базой проекта, вы подниметесь на новую ступень: как донести суть проекта окружающим? Как оформить проект? Как его преподать? Как организовать работу так, чтобы у вас все получилось?
Это важные вопросы, без которых любой, даже самый важный технически проект обречен на провал.
Вы вольны сами выбирать, к какому эксперту стоит пойти. Что вы умеете лучше всего? А что – хуже? Оцените себя, свою команду и ваши общие возможности адекватно и непредвзято. И идите к тем экспертам, которые помогут устранить ваши проеблемы.
</p>

                <p><b>Эксперты:</b></p>
                <ul type="disc">
                    <li>Серебрякова Евгения Николаевна</li>
					<li>Шамина Ольга Борисовна</li>
					<li>Чернов Александр Владимирович</li>
					<li>Тараник Максим</li>
					<li>Солодовникова Ольга Михайловна</li>
					<li>Денчук Дарья Сергеевна</li>
					<li>Стародубцева Дарья</li>
					<li>Бай Юлий</li>
					<li>Морозов Василий</li>
					

                </ul>
            </div>


        </div>
    </li><li class="green">
        <div class="timetable-time">18:00<br>21:00</div>
        <div class="timetable-body">

            <div class="timetable-name"><span>Самостоятельная работа внутри групп</span></div>
            <div class="timetable-place"><b>Место проведения:</b> 105 ауд. 19 к.</div>
	    <div class="timetable-place"> Возможность доработать проект и сделать презентацию в команде за компьютерами в 105 аудитории – это хороший шанс проработать все сразу и вместе. Воспользуйтесь им, чтобы завтра не суетиться.
            <div class="timetable-body-more">
                <p>Этот пункт самостоятельной работы даже важнее, чем предыдущий. Ведь теперь вы больше понимаете о вашем проекте. Вы проработали базу, поняли оформление и подачу. Теперь важно сделать такую презентацию, чтобы она была не только оформлена правильно, но еще и могла донести до всех слушателей завтра именно то, что вы хотите сказать. 
С чего нужно начать? Что важно сказать экспертам, чтобы они поняли важность проекта? Что вообще стоит учитывать в презентации, а что на самом деле не важно на этом этапе?
Составление грамотной презентации – это половина выигрыша. И если вы составите презентацию сейчас, то завтра во время доработки проектов вы сможете уже ее редактировать до финального варианта, тренировать речь, подправлять мелкие штрихи.
Не лишайте себя возможности подготовить проект правильно и красиво. От этого зависит ваш выигрыш!
</p>
            </div>
        </div>

    </li>
</ul>

    <h3><i class="fa fa-clock-o"></i> 22 ноября 2015 года</h3>

       <ul class="timetable-items">
       <li class="green">
            <div class="timetable-time">11:00<br>12:00</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Воскресный завтрак, презентация «Реальные источники финансирования молодежных проектов»</span></div>
                <div class="timetable-place"><b>Место проведения:</b> Московский тракт 2, строение 7</div>
		<div class="timetable-place"> Фандрайзинг, определение возможного развития проектов вне ярмарки.
                        Эксперт в получении грантов, реализации проектов и отчетности по ней, расскажет вам о всех финансовых возможностях. Только практические навыки получения финансирования.
                    
                <div class="timetable-body-more">
                    <p>Часто у студентов рождаются отличные идеи. Они помогают людям, решают их проблемы, отвечают на запросы века. Но студенты искренне не понимают, что можно сделать для того, чтобы получить возможности развивать этот проект – финансирование. 
Эксперт фандрайзинга – это не просто звание. Это десятки выигранных конкурсов, грантов, поддержек и стипендий.
Это практические знания о том, где лежат деньги и что нужно сделать, чтобы получить их для своего проекта. Ведь за Ярмаркой вас ждет множество возможностей для реализации своего проекта.
</p>
                    <p><b>Спикеры: </b></p>
                    <ul type="disc">
                        <li>Кузнецов Андрей Александрович, финансовый директор ООО "ДИ-Групп"</li>

                    </ul>
                </div>
            </div>

        </li><li class="red">
            <div class="timetable-time">12:00<br>13:00</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Время на доработку проектов / Кофе-брейк</span></div>
                <div class="timetable-place"><b>Место проведения:</b> Московский тракт 2, строение 7</div>
		<div class="timetable-place"> Возможность доработать презентацию до финального варианта, поработать в командах для оценки выступления по критериям Ярмарки, предварительно презентовать свой финальный проект эксперту и получить от него хорошую обратную связь.
                <div class="timetable-body-more">
                    <p>Это последний час, когда вы можете что-то исправить в своей презентации и речи.
Так же вы можете воспользоваться помощью других команд, экспертов, чтобы оценить свой проект по критериям, по которым вас будут оценивать эксперты на самой Ярмарке.
Возможность выстроить свою речь согласно тому, что важно при оценке – это возможность победить.
</p>
                </div>
            </div>

        </li><li class="red">
            <div class="timetable-time">13:00<br>15:30</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Ярмарка проектов</span></div>
                <div class="timetable-place"><b>Место проведения:</b> Московский тракт 2, строение 7</div>
		<div class="timetable-place"> Собери всю силу воли в кулак и расскажи участникам и экспертам о своем проекте так, чтобы все поняли, почему именно ты должен выиграть!
                <div class="timetable-body-more">
                    <p> Это именно тот момент, для которого все начиналось! Ярмарка проектов.
Вы представите свой проект во всей красоте, расскажете заранее отработанную презентацию, посвятите слушателей в свою идею и планы ее реализации.
Для того, чтобы максимально полно описать все, что вы проработали за три дня ярмарки и девять дней всей школы, вы должны собрать все силы в кулак, отбросить волнение и максимально ярко и грамотно представить свой проект. То есть, применить полученные на школе знания на практике.
</p>
 <p><b>Эксперты: </b></p>
                    <ul type="disc">
			<li><a href="http://it.innoclusters.ru/" target="_blank">Инновационного территориального кластера Томской области</a> Исполнительный директор Соколовский Игорь Эдуардович</li>
<li> <a href="http://sriinfotech.com/" target="_blank">SRI Infotech Inc</a> Тимлид команды разработки систем безопасности Дусеев Вагиз Рауфович</li>
			<li> <a href="http://contek.ru/" target="_blank">ООО "Контек-Софт"</a> Директор  Соснин Владимир Николаевич</li>
                        <li> <a href="http://electt.ru/">ООО "Элект"</a> 	Директор Золотовкий Константин Владимирович </li>
			<li> <a href="http://niipp.ru/" target="_blank">АО "НИИПП"</a> 	Начальник отдела медицинской техники Кривошеин Валентин Валентинович </li>

<li> <a href="http://niipp.ru/">АО "НИИПП"</a> Заместитель главного инженера Дохтуров Всеволод Всеволодович </li>
			<li> <a href="http://ft-e.com/" target="_blank">ООО "Физтех-Энерго"</a>  Директор Ерошевский Григорий Евгеньевич </li>
			<li> <a href="http://spinor.ru/" target="_blank">ООО "Спинор"</a> Зам. директора Евстигнеева Дарья Сергеевна</li>
			<li> <a href="http://iidf.ru/" target="_blank">ФРИИ</a>  Представитель фонда в Томске Екатерина Дмитриевна Автеньева </li>
			<li> <a href="http://ssmu.ru/ru/" target="_blank">СибГМУ</a> Первый проректор Деев Иван Анатольевич</li>
			<li> Комитет по атомной промышленности АТО Председатель Комитета Дроздов Николай Николаевич</li>
			<li> <a href="http://di-group.info/" target="_blank">DI-Group</a> 	Директор Ковалев Игорь Владимирович </li>
			<li> <a href="http://npowest.ru/" target="_blank">НПО "ВЭСТ"</a> 	Председатель совета директоров Кривошеин Олег Юрьевич</li>
			
			<li> <a href="http://oez.tomsk.ru/" target="_blank">ОЭЗ ТВТ "Томск"</a>  Ведущий эксперт управления взаимодействия с резидентами Осадченко Александр Александрович  </li>
			<li> <a href="http://ipc.tsc.ru/" target="_blank">ООО "Золотарь"</a> Директор Бричков Антон Сергеевич</li>
			<li> <a href="http://cmit.ru/" target="_blank">ЦМИТ Дружба</a>  Руководитель Юрий Владимирович Васильев</li>
			<li> <a href="http://mechatronica-pro.com/ru" target="_blank">ООО "НПФ Мехатроника-ПРО"</a> 	Директор Гусев Николай Владимирович</li>
			<li> <a href="http://ergolight.ru/" target="_blank">ООО "Эрголайт"</a> 	Директор Шевелев Михаил Юрьевич </li>
			<li> <a href="http://esto.tomsk.gov.ru/" target="_blank">Томский центр ресурсосбережения и энергоэффективности</a>  Генеральный директор Дмитриев Александр Владимирович</li>
			<li> <a href="http://siamoil.ru" target="_blank">ООО ТНПВО "СИАМ"</a> 	Заместитель коммерческого директора по сбыту Швыркунова Ольга Николаевна </li>
			<li> <a href="http://edu.tomsk.ru" target="_blank">ТОИПКРО</a> 	Ректор Замятина Оксана Михайловна</li>
			<li> ТПУ. Кафедра экологии и БЖД Заведующий кафедрой Романенко Сергей Владимирович </li>			
			<li> ТПУ Доцент Кафедры технологии автоматизированного машиностроительного производства Шамина Ольга Борисовна</li>

                    </ul>
                </div>
            </div>
        </li>

            <li class="red">
                <div class="timetable-time">15:30<br>15:50</div>
                <div class="timetable-body">

                    <div class="timetable-name"><span>Кофе-брейк</span></div>
                    <div class="timetable-place"><b>Место проведения:</b> Московский тракт 2, строение 7</div>
			<div class="timetable-place"> Чтобы ожидание результатов не было томительным, ты можешь последний раз попить чай или кофе на Ярмарке, написать о ней свой отзыв и просто расслабиться.
                    <div class="timetable-body-more">
                        <p></p>

                    </div>


                </div>
            </li>

            <li class="green">
            <div class="timetable-time">15:50<br>16:10</div>
            <div class="timetable-body">

                <div class="timetable-name"><span>Официальное закрытие </span></div>
                <div class="timetable-place"><b>Место проведения:</b> Московский тракт 2, строение 7</div>
		<div class="timetable-place"> Награждение победителей денежными и инициативными призами
                <div class="timetable-body-more">
                    <p> После недолгого, но трудного совещания, эксперты вынесут вердикт, кто будет удостоин денежных призов для реализации проектов.
Это будут гранты на 10 000, 20 000, 30 000 рублей.
Они могут быть использованы на покупку комплектующих, установку, аренду оборудования – на любые расходники, которые потребуются вам для реализации проекта.
Так же будут объявлены победители конкурсов, которые будут проходить параллельно:
«открытие года», «великое начинание», «польза обществу» и другие, о которых будет сообщено позже в новостях.
Самому яркому, самому смышленому, самому креативному участникам ярмарки так же будут выданы ценные яркие призы от Отдела элитного образования!
</p>
                </div>
            </div>
        </li>
    </ul>-->


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
