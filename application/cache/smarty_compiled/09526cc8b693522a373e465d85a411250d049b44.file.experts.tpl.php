<?php /* Smarty version Smarty-3.1.18, created on 2016-10-17 11:56:28
         compiled from "C:\OpenServer\domains\techconf.tomsk\application\views\\pages\experts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2042558042c1fc99e67-70275619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09526cc8b693522a373e465d85a411250d049b44' => 
    array (
      0 => 'C:\\OpenServer\\domains\\techconf.tomsk\\application\\views\\\\pages\\experts.tpl',
      1 => 1476683650,
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
  'nocache_hash' => '2042558042c1fc99e67-70275619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58042c1fd984c1_80342455',
  'variables' => 
  array (
    'user' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58042c1fd984c1_80342455')) {function content_58042c1fd984c1_80342455($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'C:\\OpenServer\\domains\\techconf.tomsk\\modules\\smarty3\\vendor\\smarty\\libs\\plugins\\function.url.php';
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
            
    <h1>Эксперты </h1>
    <hr>


    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
        <div class="timetable-body">
            <div class="timetable-name"><span><?php echo $_smarty_tpl->tpl_vars['project']->value->title;?>
</span></div>
            <div class="timetable-place"><strong>Проект от компании: </strong> <?php echo $_smarty_tpl->tpl_vars['project']->value->organization;?>
 </div>
            <div class="timetable-body-more">
                <p><?php echo $_smarty_tpl->tpl_vars['project']->value->description;?>
</p>
                <p><b>Контакты:</b></p>
                <ul>
                    <li><strong>Контактное лицо: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->person;?>
</li>
                    <?php if (($_smarty_tpl->tpl_vars['project']->value->phone!='')) {?>
                        <li><strong>Телефон: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->phone;?>
</li>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['project']->value->email!='')) {?>
                        <li><strong>E-mail: </strong><?php echo $_smarty_tpl->tpl_vars['project']->value->email;?>
</li>
                    <?php }?>

                </ul>
            </div>
        </div>
    <?php } ?>

    <!--<div class="speakers2014">

          <div>
              <div class="for_speaker_img2014">
                  <img src="/assets/images/spiker/one.jpg">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Виктория </span>
                  <span class="position"> JagaJam<br>Генеральный директор</span>
              </div>
          </div>


          <div>
              <div class="for_speaker_img2014">
                  <img src="/assets/images/spiker/two.jpg">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Анна</span>
                  <span class="position">Hungry Boys<br>Руководитель SMM-отдела </span>
              </div>
          </div>


          <div>
              <div class="for_speaker_img2014">
                  <img src="/assets/images/spiker/three.jpg">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Евгения Серебрякова</span>
                  <span class="position">Элитное Техническое Образование<br>Генеральный директор</span>
              </div>
          </div>

  -->

      <!--
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_petr_fedyushkin_14234948409857_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Петр Федюшкин</span>
                  <span class="position">AGIMA<br>Аккаунт-директор</span>
              </div>
              <a href="#bio2329" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_petr_fedyushkin_14234948410473_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2329" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_petr_fedyushkin_14234948409857_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Петр Федюшкин</span>
                              <span class="position">AGIMA<br>Аккаунт-директор</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_petr_fedyushkin_14234948410473_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>Закончил Московский институт электроники и математики. Работает в сфере веб-разработки уже более 16 лет, с 2009 года - аккаунт-директор и руководитель направления SMM интерактивного агентства AGIMA. Под его руководством были разработаны и развивались комплексные digital-проекты для крупнейших российских и международных компаний: Связной Банк, МегаФон, Коммерсантъ, Царицыно, УРАЛСИБ Страхование, Райффайзенбанк и многие другие. Имеет многолетний преподавательский опыт.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_olga_tsigankova_1426104480864_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Ольга Цыганкова </span>
                  <span class="position">Socialist Media<br></span>
              </div>
              <a href="#bio2250" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_olga_tsigankova_14253808625883_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2250" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_olga_tsigankova_1426104480864_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Ольга Цыганкова </span>
                              <span class="position">Socialist Media<br></span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_olga_tsigankova_14253808625883_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p><br>
                              Ольга пришла в SOCIALIST в числе первых сотрудников, и с 2010 года работала над созданием продуктов компании, каждый день, решая задачи, возникающие на пути быстроразвивающегося бизнеса. С 2012 года Ольга Цыганкова взяла на себя руководство одним из самых главных направлений компании - медийным. В должности медиа директора занимается стратегическими и тактическими вопросами развития медийных активов компании SOCIALIST.<br>
                              &nbsp;</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_vladimir_kalaev_1426526782381_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Владимир Калаев</span>
                  <span class="position">Pepper<br>CEO</span>
              </div>
              <a href="#bio2652" class="fancybox speaker_bio">Биография</a>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2652" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_vladimir_kalaev_1426526782381_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Владимир Калаев</span>
                              <span class="position">Pepper<br>CEO</span>
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_pavel_targashin_14253087129267_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Павел Таргашин</span>
                  <span class="position">Fistashki<br>Креативный директор</span>
              </div>
              <a href="#bio2538" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_pavel_targashin_14253087131071_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2538" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_pavel_targashin_14253087129267_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Павел Таргашин</span>
                              <span class="position">Fistashki<br>Креативный директор</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_pavel_targashin_14253087131071_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_gleb_chudetskiy_14239294696174_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Глеб Чудецкий </span>
                  <span class="position">Digital Guru<br>Директор по маркетингу в социальных медиа</span>
              </div>
              <a href="#bio2389" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_gleb_chudetskiy_14239294698479_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2389" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_gleb_chudetskiy_14239294696174_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Глеб Чудецкий </span>
                              <span class="position">Digital Guru<br>Директор по маркетингу в социальных медиа</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_gleb_chudetskiy_14239294698479_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>Чудецкий Глеб Михайлович<br>
                              Закончил Московский Авиационный Институт по двум специальностям - 2008 год по специальности "Экология" и 2009 по специальности "Связи с общественностью". После чего профильные навыки повышал на специализированных программах обучения.<br>
                              <br>
                              На протяжении первых трех лет работы в классическом PR при этом регулярно сталкивался с SMM. Что в последствии и послужило принятием решения уйти в данный профиль полностью.<br>
                              Работал в крупных издательствах (GameLand), агентствах (Comunica, IQDO) и компаниях (QIWI, Marc &amp; Andre). В настоящее время работает директором по маркетингу в социальных медиа в агентстве Digital Guru.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_feliks_zinatullin_14435338862274_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Феликс Зинатуллин</span>
                  <span class="position"><br>Основатель и руководитель проекта Церебро Таргет</span>
              </div>
              <a href="#bio2487" class="fancybox speaker_bio">Биография</a>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2487" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_feliks_zinatullin_14435338862274_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Феликс Зинатуллин</span>
                              <span class="position"><br>Основатель и руководитель проекта Церебро Таргет</span>
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p><u><strong>тезисы выступления:</strong></u></p>

                          <ul>
                              <li>ТОП действий пользователей ВКонтакте</li>
                              <li>Где взять "пробник" аудитории</li>
                              <li>Удачные комбинации аудиторий в ретаргетинге</li>
                          </ul>

                          <p>&nbsp;</p>

                          <p><u><strong>О спикере</strong></u>: Основатель и руководитель проекта Церебро Таргет, лучший SMM-специалист 2014 года по версии Like Awards, эксперт в продвижении бизнеса в социальных сетях.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_oleg_noskov_14240843457436_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Олег Носков</span>
                  <span class="position">RTA<br>Cпециалист по таргетированной рекламе.</span>
              </div>
              <a href="#bio2404" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_oleg_noskov_14240843459035_logo.gif">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2404" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_oleg_noskov_14240843457436_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Олег Носков</span>
                              <span class="position">RTA<br>Cпециалист по таргетированной рекламе.</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_oleg_noskov_14240843459035_logo.gif">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>Сертифицированный специалист по привлечению трафика из социальных сетей.&nbsp;Умеет увеличивать продажи и узнаваемость бренда через таргетированную рекламу.&nbsp;Работает с такими клиентами как Qiwi, L' Oreal, Merz, Total и другие</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_mihail_surov_14235729755589_image.png" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Михаил Суров</span>
                  <span class="position">Progression<br>SMM директор</span>
              </div>
              <a href="#bio2335" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_mihail_surov_14235729763559_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2335" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_mihail_surov_14235729755589_image.png">
                          <div class="right_speaker_bio">
                              <span class="title">Михаил Суров</span>
                              <span class="position">Progression<br>SMM директор</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_mihail_surov_14235729763559_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>&nbsp;</p>

                          <p>Окончил МГТУ им. Баумана по специальности «Компьютерные системы и сети» (дипломная работа на тему «Семантический анализитор естественных языков»).</p>

                          <p>C 2007 года занимается вирусным маркетингом: начал с регистрации блогов в Livejournal под придуманные виртуальные аккаунты. С одним из этих аккаунтов через два года стал блогером-тысячником.</p>

                          <p>В 2009 году работал менеджером по работе с клиентами агентства полного цикла «Планета Информ».</p>

                          <p>С 2013 года возглавляю направление социальных медиа в Progression</p>

                          <p>Клиенты старые/текущие: Reckitt Benckizer, Pepsi, Megafon, Nestle, McDonald’s</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_aleksandra_breus_14249611266584_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Александра Бреус</span>
                  <span class="position">Nectarin<br>Руководитель отдела по работе с клиентами</span>
              </div>
              <a href="#bio2508" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_aleksandra_breus_14249611267506_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2508" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_aleksandra_breus_14249611266584_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Александра Бреус</span>
                              <span class="position">Nectarin<br>Руководитель отдела по работе с клиентами</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_aleksandra_breus_14249611267506_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_ilya_balahnin_1425052255038_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Илья Балахнин</span>
                  <span class="position">Paper Planes New Media &amp; Creative Agency<br>Генеральный директор</span>
              </div>
              <a href="#bio2514" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_ilya_balahnin_14250522551137_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2514" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_ilya_balahnin_1425052255038_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Илья Балахнин</span>
                              <span class="position">Paper Planes New Media &amp; Creative Agency<br>Генеральный директор</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_ilya_balahnin_14250522551137_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>Генеральный директор и управляющий партнер New Media &amp; Digital агентства Paper Planes.<br>
                              Директор школы New Media Idealogy.<br>
                              Руководитель WebInCo Russia.<br>
                              Вице-президент IABC/Russia по инновациям.<br>
                              <br>
                              На протяжении 5 лет Илья остается одним из самых востребованных стратегов в области новых медиа. На его счету десятки успешных кампаний в интернет-среде как на российском, так и на международном уровне.<br>
                              Работая в ведущих компаниях и агентствах, а также в рамках своего агентства Paper Planes Илья поработал с такими компаниями как Сколково, Microsoft, Билайн, Unilever, Coca-Cola Hellenic, Universal, Комстар, Bud, Kodak, Хостинг-Коммьюнити, Русский стандарт и множество других. Среди успешных кейсов в портфеле Paper Planes есть уникальные кейсы по продвижению в Новых медиа нескольких государств, опыт отражения рейдерских захватов, сопровождения высокотехнологичных стартапов.<br>
                              В 2010 году Илья в партнерстве с IABC/Russia открыл инновационный проект - школу Idealogy</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_elena_kupriyanova_14234935327788_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Елена Куприянова</span>
                  <span class="position">Articul Media<br>Руководитель отдела Контент-маркетинга и SMM</span>
              </div>
              <a href="#bio2326" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_elena_kupriyanova_14234935328843_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2326" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_elena_kupriyanova_14234935327788_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Елена Куприянова</span>
                              <span class="position">Articul Media<br>Руководитель отдела Контент-маркетинга и SMM</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_elena_kupriyanova_14234935328843_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>В 2013 году была приглашена на работу редактором сайта в «Оргкомитет „Сочи 2014“», и на самих Играх работала главным редактором официального сайта Олимпийских и Паралимпийских игр Сочи 2014.</p>

                          <p>Своим достижением считает разработку стратегии и контента раздела «Голос Игр» для сайта Сочи 2014, где в нестандартной форме подавались материалы про спортсменов и болельщиков. Во время Олимпиады рубрику каждый день посещали около 40 тыс. человек.</p>

                          <p>В настоящее время занимает должность руководителя отдела контент-маркетинга и SMM в Articul Media. Работает с такими клиентами, как Форум «Открытые инновации», Lancôme, FOX Channel, National Geographic и другие. Также преподает в Digital Marketing Institute, модуль – SMM.</p>

                          <p>&nbsp;</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_svetlana_krilova_13905650336618_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Светлана Крылова</span>
                  <span class="position">Brand Analytics<br>Руководитель Аналитического центра</span>
              </div>
              <a href="#bio719" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_svetlana_krilova_14248684444975_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio719" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_svetlana_krilova_13905650336618_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Светлана Крылова</span>
                              <span class="position">Brand Analytics<br>Руководитель Аналитического центра</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_svetlana_krilova_14248684444975_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_andrey_volkov_14228894973136_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Андрей Волков</span>
                  <span class="position">GRAPE<br>SMM директор</span>
              </div>
              <a href="#bio1004" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_andrey_volkov_13950756653161_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio1004" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_andrey_volkov_14228894973136_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Андрей Волков</span>
                              <span class="position">GRAPE<br>SMM директор</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_andrey_volkov_13950756653161_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p><br>
                              C 2004 по 2008 &nbsp;год работал в качестве выпускающего редактора мониторингов СМИ в компании Park.ru<br>
                              В рекламе и в SMM с 2008-го года. В 2009-v года начал работать в агентстве GRAPE в качестве social media project manager, а с 2010-го возглавил отдел SMM.&nbsp;<br>
                              Ключевые клиенты: Unilever (Axe, Rexona, DoveMen), HTC, Zepter,&nbsp;Pepsico (Домик в деревне, Здрайверы), Mazda, Ahmad, Reckitt Benckiser (Clearasil, Veet), Mondeles (Alpen Gold) и др.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_aleksandr_bakeev_14265785724888_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Александр Бакеев</span>
                  <span class="position"> Social Flow Le Bon Gout<br>Digital Director</span>
              </div>
              <a href="#bio2655" class="fancybox speaker_bio">Биография</a>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2655" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_aleksandr_bakeev_14265785724888_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Александр Бакеев</span>
                              <span class="position"> Social Flow Le Bon Gout<br>Digital Director</span>
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_vasiliy_lebedev_14235778629206_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Василий Лебедев </span>
                  <span class="position">ИКРа<br>Ректор</span>
              </div>
              <a href="#bio2338" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_vasiliy_lebedev_14235778630775_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2338" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_vasiliy_lebedev_14235778629206_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Василий Лебедев </span>
                              <span class="position">ИКРа<br>Ректор</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_vasiliy_lebedev_14235778630775_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_vyacheslav_grabchak_14247997963971_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Вячеслав Грабчак</span>
                  <span class="position">Dr.Jung<br>Директор по стратегии</span>
              </div>
              <a href="#bio2401" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_vyacheslav_grabchak_14248583265001_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2401" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_vyacheslav_grabchak_14247997963971_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Вячеслав Грабчак</span>
                              <span class="position">Dr.Jung<br>Директор по стратегии</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_vyacheslav_grabchak_14248583265001_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_maksim_krugov_14254816321988_image.JPG" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Максим Кругов</span>
                  <span class="position">Artics Internet Solutions<br>Руководитель проектов </span>
              </div>
              <a href="#bio2586" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_maksim_krugov_14254816322906_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2586" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_maksim_krugov_14254816321988_image.JPG">
                          <div class="right_speaker_bio">
                              <span class="title">Максим Кругов</span>
                              <span class="position">Artics Internet Solutions<br>Руководитель проектов </span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_maksim_krugov_14254816322906_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>Более 5 лет занимается интернет-рекламой. Основная специализация:&nbsp;разработка комплексных подходов продвижения, веб-аналитика в связке с бизнес-показателями клиента,&nbsp;оптимизация крупных рекламных кампаний, аудит и анализ рекламных кампаний, выработка рекомендаций для повышения конверсии. Основные клиенты:&nbsp;Совкомбанк, Delivery Club, Окна Комфорта, Kayak, 2TBank, Tele2, S7 Airlines.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_lara_ispravnikova_14247026318988_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Лара Исправникова </span>
                  <span class="position">Связной<br>Руководитель отдела интернет-коммуникаций и социальных сетей</span>
              </div>
              <a href="#bio2460" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_lara_ispravnikova_14247026319739_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2460" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_lara_ispravnikova_14247026318988_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Лара Исправникова </span>
                              <span class="position">Связной<br>Руководитель отдела интернет-коммуникаций и социальных сетей</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_lara_ispravnikova_14247026319739_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>&nbsp;</p>

                          <p>Профессиональный маркетолог с&nbsp;обширным опытом работы в&nbsp;онлайн-торговле, интернет-маркетинге и&nbsp;финансах. Специализация: маркетинг и&nbsp;менеджмент, стратегическое планирование маркетинга, исследования рынка, реализация промо-программ, CRM-решения. До&nbsp;прихода в&nbsp;«Связной» была директором по&nbsp;маркетингу anywayanyday.com, работала в&nbsp;финансовом секторе.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_oleg_barmin_14247975661982_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Олег Бармин</span>
                  <span class="position">ВымпелКом<br> Глава департамента социальных медиа</span>
              </div>
              <a href="#bio2481" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_oleg_barmin_14250492671621_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2481" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_oleg_barmin_14247975661982_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Олег Бармин</span>
                              <span class="position">ВымпелКом<br> Глава департамента социальных медиа</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_oleg_barmin_14250492671621_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p>Олег&nbsp;Бармин&nbsp;– известный блогер, маркетолог, предприниматель. Имеет богатый опыт собственного бизнеса (крупный региональный автодилер), работал директором по маркетингу LiveJournal (блог-платформы №1 в России), а затем директором по региональному развитию медиа-холдинга Rambler&amp;Co. В настоящее время возглавил департамент социальных медиа «ВымпелКом». В профессиональном портфеле создание региональной сетки медиаэкспертов (институт послов ЖЖ), проведение множества маркетинговых кампаний федерального и международного уровня, создание и развитие брендов, формирование и продвижение лидеров мнений, успешные бизнес-кейсы в различных сферах (туризм, общепит, автомобильная и телекоммуникационная индустрии).&nbsp;</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_maks_ulyanov_14235709742788_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Макс Ульянов</span>
                  <span class="position">Bosch &amp; Siemens<br>Менеджер по социальным медиа и управлению репутационными рисками </span>
              </div>
              <a href="#bio2323" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_maks_ulyanov_14235709743451_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2323" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_maks_ulyanov_14235709742788_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Макс Ульянов</span>
                              <span class="position">Bosch &amp; Siemens<br>Менеджер по социальным медиа и управлению репутационными рисками </span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_maks_ulyanov_14235709743451_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_katerina_avdonina_14248850238645_image.png" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Катерина Авдонина</span>
                  <span class="position">Интернет-агентство ДАЛЕЕ<br>Head of SMM</span>
              </div>
              <a href="#bio977" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_ekaterina_avdonina_1394641612315_logo.jpg">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio977" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_katerina_avdonina_14248850238645_image.png">
                          <div class="right_speaker_bio">
                              <span class="title">Катерина Авдонина</span>
                              <span class="position">Интернет-агентство ДАЛЕЕ<br>Head of SMM</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_ekaterina_avdonina_1394641612315_logo.jpg">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p><br>
                              В рекламном бизнесе с 2011 года. Начала "путь сммщика" в агентстве Media Stars, создавая контент для бренд-сообществ OTTO, Натали Турс, Mamas&amp;Papas, Детское радио, ЦПШ. Затем более года проработала в агентстве Hidden Marketing на позиции руководителя проектов, реализовала множество проектов в социальных сетях, блогах и на форумах как для брендов напрямую, так и в сотрудничестве с крупными агентствами. С декабря 2013 года присоединилась к команде ДАЛЕЕ.<br>
                              &nbsp;</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div>
              <div class="for_speaker_img2014">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn2_dmitriy_kazarinov_14228899803026_image.jpg" width="90">
              </div>
              <div class="speaker_info2014">
                  <span class="title">Дмитрий Казаринов </span>
                  <span class="position">Agakat.com<br>Директор по развитию</span>
              </div>
              <a href="#bio2268" class="fancybox speaker_bio">Биография</a>
              <div class="for_logo">
                  <img src="http://www.smileexpo.ru/public/upload/speakers/tn_dmitriy_kazarinov_14230562382869_logo.png">
              </div>
              <div class="clear"></div>
              <div style="display:none;">
                  <div id="bio2268" class="full_speaker_bio">
                      <div class="full_speaker_bio_info">
                          <img src="http://www.smileexpo.ru/public/upload/speakers/tn1_dmitriy_kazarinov_14228899803026_image.jpg">
                          <div class="right_speaker_bio">
                              <span class="title">Дмитрий Казаринов </span>
                              <span class="position">Agakat.com<br>Директор по развитию</span>
                              <img src="http://www.smileexpo.ru/public/upload/speakers/tn_dmitriy_kazarinov_14230562382869_logo.png">
                          </div>
                          <div class="clear"></div>
                      </div>
                      <div class="full_speaker_bio_text">
                          <p><br>
                              В рекламе и СМИ с 1992 года. В качестве топ-менеджера участвовал в реализации известных проектов в сфере телевидения, радио и Интернет.<br>
                              &nbsp;</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>-->
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
