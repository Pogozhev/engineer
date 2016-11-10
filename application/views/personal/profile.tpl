{extends 'theme/sponsors.tpl'}
{$smarty->cashing = false}

{block 'content'}



    <ul class="nav nav-tabs" style="margin-top:30px; margin-bottom: 30px">
        <li role="presentation"><a href="{url route='personal' action='projects'}">Мои проекты</a></li>
        <li role="presentation"><a href="{url route='personal' action='masters'}">Запись на Мастер-классы</a></li>
        <li role="presentation" class="active"><a href="#">Личная информация</a></li>
    </ul>

    <h4>ЛИЧНЫЕ ДАННЫЕ</h4>
    <hr>

    <div><span>{$participant->last_name} {$participant->first_name} {$participant->middle_name}</span></div>
    <div><span><strong>E-mail: </strong>{$participant->email}</span></div>

    <p class="info"><b>Вы можете изменить (актуализировать) часть личных данных. Пожалуйста, следите за их актуальностью.</b></p>

    <form id="profile_form" method="post" action="/account/edit_profile">
        <input id="participant_id" name="participant_id" type="hidden" value="{$participant->id}">
        <div class="input-group col-md-12">
            <label class="col-md-2" for="phone">Контактный телефон*</label>
            <div class="col-md-5">
                <input
                        id="phone"
                        name="phone"
                        type="text"
                        class="form-control val-required"
                        maxlength="12"
                        value="{$participant->phone}">
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
                        maxlength="100"
                        value="{$participant->url_vk}">
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
                        maxlength="100"
                        value="{$participant->url_fb}">
            </div>
        </div>

        <div class="form-group col-md-12">
            Место обучения в данный момент:
            <label class="radio-block">
                <input type="radio" class="school" name="is_university" value="0" {if !$is_university}checked{/if}> <strong>Школа</strong>
            </label>
            <label class="radio-block">
                <input type="radio" class="university" name="is_university" value="1" {if $is_university}checked{/if}> <strong>ВУЗ</strong>
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
                                maxlength="255"
                                value="{if !$is_university}{$school->title}{/if}">
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
                                maxlength="255"
                                value="{if !$is_university}{$school->class}{/if}">
                    </div>
                </div>
            </div>

            <div class="collapse in university">
                <div class="input-group col-md-12">
                    <label class="col-md-4" for="course">Курс*</label>
                    <div class="col-md-4">
                        <select id="course" name="course" class="form-control">
                            {foreach $courses as $course}
                                <option value="{$course->id}" {if $is_university}{if $university->course_id == $course->id}selected{/if}{/if}>{$course->title}</option>
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
                                maxlength="255"
                                value="{if $is_university}{$university->university_title}{/if}">
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
                                maxlength="255"
                                value="{if $is_university}{$university->institute_title}{/if}">
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
                                maxlength="255"
                                value="{if $is_university}{$university->group_title}{/if}">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    Являетесь ли Вы студентом системы элитного технического образования?
                    <label class="radio-block">
                        <input type="radio" class="elit_no" name="is_elit" value="0" {if $is_university}{if $university->is_elit == 0}checked{/if}{else}checked{/if}> <strong>Нет</strong>
                    </label>
                    <label class="radio-block">
                        <input type="radio" class="elit_yes" name="is_elit" value="1" {if $is_university}{if $university->is_elit == 1}checked{/if}{/if}> <strong>Да</strong>
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
                                        maxlength="20"
                                        value="{if $is_university}{$university->elit_group_title}{/if}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<legend>Ваши компетенции*</legend>
        <div class="input-group col-md-12">
            <textarea id="competences" name="competences" class="form-control">{$participant->competences}</textarea>
        </div>
        <span class="help-block">
            Опишите ваши навыки и умения. Что вы умеете делать отлично, чему только учитесь (прим: пайка, сборка механизмов, программирование контроллеров в совершенстве, черчение, математическое моделирование в процессе освоения, знание физических процессов на уровне начальных знаний). Набор навыков и умений может быть любым, вспоминайте все, что для вас привычно и просто – это может быть жизненно необходимо в каком-либо из проектов.
        </span>

        <legend>Ваши интересы*</legend>
        <div class="input-group col-md-12">
            <textarea id="interests" name="interests" class="form-control">{$participant->interests}</textarea>
        </div>
        <span class="help-block">
            Опишите сферу ваших интересов – какие проекты и области знаний привлекают вас (прим: медицина, разработка освещения для растений в теплице, написание сайтов, продвижение проектов). Опишите все ваши интересы, даже если вам кажется, что они не пригодятся в проектах – в командах бывают совершенно неожиданные потребности.
        </span>-->

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
            <button type="submit" class="btn btn-primary">Изменить личные данные</button>
        </div>
    </form>

    <hr><br>

    <form id="password_form" method="post" action="/account/change_password">
        <div class="input-group col-md-12">
            <label class="col-md-3" for="password">Новый пароль*</label>
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
            <label class="col-md-3" for="password_conf">Повторите пароль*</label>
            <div class="col-md-5">
                <input
                        id="password_conf"
                        name="password_conf"
                        type="password"
                        class="form-control"
                        maxlength="40">
            </div>
        </div>

        <hr>
        <div class="input-group col-md-12">
            <button type="submit" class="btn btn-primary">Изменить пароль</button>
        </div>
    </form>

    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/register.js" type="text/javascript"></script>


{/block}


