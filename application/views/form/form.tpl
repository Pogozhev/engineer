{extends 'theme/sponsors.tpl'}
{$smarty->cashing = false}

{block 'content'}

    <h4>РЕГИСТРАЦИЯ НА УЧАСТИЕ В КОНФЕРЕНЦИИ</h4>
    <hr>

    <p>Дедлайн регистрации проектов на сайте - <b>-Дата- 2016 года</b></p>
    <br>
    <p>Дедлайн представления проекта, оформленного по образцу - <b>-Дата- 2016 года</b></p>
    <br>
    <p>При возникновении проблем с регистрацией, обязательно делайте скриншот (чтобы мы смогли определить проблему) и присылайте на почту <b>-Адрес-</b></p>
    <p>Вопросы можно задать по телефону: <b> 8 (3822) 606-127</b></p>

    <form id="project_form" action="{url route='default' controller='form' action='saveproject'}" method="POST">
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
                {foreach $branches as $branch}
                    <option value="{$branch->id}">{$branch->id}. {$branch->title}</option>
                {/foreach}
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
            {include 'form/invitation.tpl'}
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
            {include 'form/vacancy.tpl'}
        </div>
        <div id="vacancies"></div>

        <hr>
        <div class="input-group col-md-12">
            <button type="submit" class="btn btn-primary">Зарегистрировать проект</button>
        </div>
    </form>

    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/form.js" type="text/javascript"></script>

{/block}


