{extends 'theme/sponsors.tpl'}
{$smarty->cashing = false}

{block 'content'}

    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>


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
                            {foreach $courses as $course}
                                <option value="{$course->id}">{$course->title}</option>
                            {/foreach}
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
                {foreach $tags as $tag}
                    <option value="{$tag->name}">{$tag->name}</option>
                {/foreach}
            </select>
        </div>

        <hr>
        <div class="input-group col-md-12">
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </div>
    </form>

    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/register.js" type="text/javascript"></script>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

{/block}


