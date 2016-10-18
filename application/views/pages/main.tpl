﻿{extends 'theme/sponsors.tpl'}

{block 'content'}

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
                <li class="active"><a href="{url route='form'}"><h2>Регистрация на ярмарку</h2></a></li>
            </ul>
        </div>

        <br><br>
        <!-- text   -->
        <p><a href="{URL::site('about')}">Ярмарка проектов</a>  – это ежегодное мероприятие, проходящее в рамках научной школы инженерного лидерства для студентов ЭТО, а также студентов, не обучающихся по данной траектории, но имеющих проект и желание его представить. </p>
        Цели Ярмарки:
        <ul>
            <li> помощь студентам в воплощении идей в реальность путем оформления их в грамотно составленный проект, готовый к реализации и участию в грантах </li>
            <li> финансовая и ресурсная поддержка интересных и важных проектов различной направленности </li>
            <li> погружение студентов в сферу проектной деятельности </li>
            <li> обратная связь от экспертов, которая поможет студентам обратить внимание на сложности и понять перспективы развития </li>
        </ul>

        В этом году весь комплекс мероприятий объединен под названием «Научная школа по инженерному изобретательству, проектированию и разработке инноваций «I’m an engineer», или сокращенно IME_2015.
        В комплекс мероприятий Школы входят: (перейдите по ссылке, чтобы узнать) <a href="{URL::site('about')}">О ярмарке</a>

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
                {literal}

                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 2, wide: 1, width: "700", height: "500"}, 78711486);
                    </script>

                {/literal}
            </tr>

        </table>


    </div>
</div>

{/block}

