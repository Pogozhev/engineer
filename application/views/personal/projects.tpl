{extends 'theme/sponsors.tpl'}

{block 'content'}
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/team.js" type="text/javascript"></script>

    <ul class="nav nav-tabs" style="margin-top:30px; margin-bottom: 30px">
        <li role="presentation" class="active"><a href="#">Мои проекты</a></li>
        <li role="presentation"><a href="{url route='personal' action='masters'}">Запись на Мастер-классы</a></li>
        <li role="presentation"><a href="{url route='personal' action='profile'}">Личная информация</a></li>
    </ul>

    {include 'pages/includes/invitations.tpl'}

    <div class="col-md-12">
        <h4>МОИ ПРОЕКТЫ</h4>
        <hr>
        <p>Пока регистрация закрыта</p>
        <a href="{url route='form'}" class="btn btn-primary">ЗАРЕГИСТРИРОВАТЬ НОВЫЙ ПРОЕКТ</a>
        <br><br>
        {$i = 1}
        {foreach $projects as $pid => $project}
            <div class="col-md-12" style="margin-bottom: 20px">
                <div class="timetable-body">
                    <div class="timetable-name">
                        <span>{$i++}. {$project->title}</span>
                    </div>
                    <div class="timetable-body-more">
                        <h4>Описание проекта</h4>
                        <hr>
                        <p>{$project->description}</p>
                        <div>
                            <ul>
                                <li><strong>Тип проекта: </strong>{$project->branch->title}</li>
                            </ul>
                        </div>
                        <h4>Команда проекта</h4>
                        <hr>
                        {foreach $participants[$pid] as $k => $participant}
                            <div class="col-md-12">
                                <div class="{if $k != $leader_ids[$pid] && $is_leader[$pid]}col-md-8{else}col-md-11{/if}">
                                    <div><span>{$participant->last_name} {$participant->first_name} {$participant->middle_name}</span></div>
                                    <div>
                                        <ul>
                                            <li><strong>Телефон участника: </strong>{$participant->phone}</li>
                                            <li><strong>E-mail участника: </strong>{$participant->email}</li>
                                        </ul>
                                    </div>
                                </div>
                                {if $k != $leader_ids[$pid] && $is_leader[$pid]}
                                    <div class="col-md-3">
                                        <form class="form_delete_participant" action="/team/remove_participant" method="GET">
                                            <input id="participant_id" name="participant_id" type="hidden" value="{$participant->id}">
                                            <input id="project_id" name="project_id" type="hidden" value="{$project->id}">
                                            <div class="input-group col-md-12">
                                                <button type="submit" class="btn-xs btn-danger">Исключить из команды</button>
                                            </div>
                                        </form>
                                    </div>
                                {/if}
                            </div>
                        {/foreach}

                        <h4>Приглашения в проект</h4>
                        <hr>
                        {foreach $pinvitations[$pid] as $iid => $invitation}
                            <div class="col-md-12">
                                <div class="{if $is_leader[$pid]}col-md-8{else}col-md-11{/if}">
                                    <div><span><strong>Email: </strong>{$invitation->email}</span></div>
                                </div>
                                {if $is_leader[$pid]}
                                    <div class="col-md-3">
                                        <form class="form_delete_invitation" action="/team/delete_invitation" method="GET">
                                            <input id="invitation_id" name="invitation_id" type="hidden" value="{$invitation->id}">
                                            <div class="input-group col-md-12">
                                                <button type="submit" class="btn-xs btn-warning">Отменить приглашение</button>
                                            </div>
                                        </form>
                                    </div>
                                {/if}
                            </div>
                        {/foreach}

                        {if $is_leader[$pid]}
                            <div class="collapse invitation" data-pid="{$project->id}">
                                <h4>Добавить приглашение (до семи приглашений в проекте)</h4>
                                <hr>
                                <form class="add_invitation" action="/team/add_invitation" method="POST">
                                    <input id="count_invitations" name="count_invitations" type="hidden" value="{count($pinvitations[$pid])}">
                                    <input id="project_id" name="project_id" type="hidden" value="{$project->id}">

                                    <span class="help-block">
                                        Перечислите электронные адреса других предполагаемых участников команды.<br>
                                        Они получат приглашение присоединиться к проекту, как только зарегистрируются на сайте, используя указанный адрес.<br>
                                        Вы можете также отправить им уведомление по указанному адресу.
                                    </span>

                                    <div class="input-group col-md-12">
                                        <label class="col-md-2" for="email_invite">E-mail*</label>
                                        <div class="col-md-5">
                                            <input
                                                    id="email_invite"
                                                    name="email_invite"
                                                    type="text"
                                                    class="form-control val-required val-email"
                                                    maxlength="100">
                                        </div>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <div class="col-md-1">
                                            <input id="notify" name="notify" type="checkbox">
                                        </div>
                                        <label class="col-md-11" for="notify">Отправить уведомление на электронную почту</label>
                                    </div>

                                    <div class="input-group col-md-12">
                                        <button type="submit" class="btn-xs btn-primary">Добавить приглашение</button>
                                    </div>
                                </form>
                            </div>
                        {/if}

                        <h4>Вакансии проекта</h4>
                        <hr>
                        {foreach $vacancies[$pid] as $vid => $vacancy}
                            <div class="col-md-12">
                                <div class="{if $is_leader[$pid]}col-md-8{else}col-md-11{/if}">
                                    <div><span>{$vacancy->title}</span></div>
                                    <div>
                                        <ul>
                                            <li><strong>Описание вакансии: </strong>{$vacancy->description}</li>
                                        </ul>
                                    </div>
                                </div>
                                {if $is_leader[$pid]}
                                    <div class="col-md-3">
                                        <form class="form_delete_vacancy" action="/team/remove_vacancy" method="GET">
                                            <input id="vacancy_id" name="vacancy_id" type="hidden" value="{$vacancy->id}">
                                            <div class="input-group col-md-12">
                                                <button type="submit" class="btn-xs btn-warning">Удалить вакансию</button>
                                            </div>
                                        </form>
                                    </div>
                                {/if}
                            </div>

                            <div class="col-md-12"><span>Заявки, оставленные на данную вакансию</span></div>
                            {foreach $vacancies_participants[$pid][$vid] as $ka => $a_participant}
                                <div class="col-md-12">
                                    <div class="{if $is_leader[$pid]}col-md-8{else}col-md-11{/if}">
                                        <div><span>{$a_participant->last_name} {$a_participant->first_name} {$a_participant->middle_name}</span></div>
                                        <div>
                                            <ul>
                                                <li><strong>Телефон: </strong>{$a_participant->phone}</li>
                                                <li><strong>E-mail: </strong>{$a_participant->email}</li>
                                                <li><strong>Компетенции: </strong>{$a_participant->competences}</li>
                                                <li><strong>Интересы: </strong>{$a_participant->interests}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    {if $is_leader[$pid]}
                                        <div class="col-md-3">
                                            <form class="form_add_participant" action="/team/add_participant" method="GET">
                                                <input id="vacancy_id" name="vacancy_id" type="hidden" value="{$vacancy->id}">
                                                <input id="participant_id" name="participant_id" type="hidden" value="{$a_participant->id}">
                                                <input id="project_id" name="project_id" type="hidden" value="{$project->id}">
                                                <div class="input-group col-md-12">
                                                    <button type="submit" class="btn-xs btn-success">Принять заявку</button>
                                                    <span>Заявитель будет включён в состав команды.</span>
                                                </div>
                                            </form>
                                        </div>
                                    {/if}
                                </div>
                            {/foreach}
                        {/foreach}

                        {if $is_leader[$pid]}
                            <div class="collapse vacancy" data-pid="{$project->id}">
                                <h4>Добавить вакансию (до семи вакансий в проекте)</h4>
                                <hr>
                                <form class="add_vacancy" action="/team/add_vacancy" method="POST">
                                    <input id="count_vacancies" name="count_vacancies" type="hidden" value="{count($vacancies[$pid])}">
                                    <input id="project_id" name="project_id" type="hidden" value="{$project->id}">

                                    <span class="help-block">
                                        Опишите вакансию для людей, требующихся в проект, в формате:
                                        <ul>
                                            <li>Кто нужен (если есть предпочтения по направлению обучения, полу, курсу)</li>
                                            <li>Для чего нужен (что надо сделать по проекту)</li>
                                            <li>Что должен уметь (какими навыками и компетенциями должен обладать человек)</li>
                                            <li>Дополнительно по желанию: командная роль (генератор идей, конструктор, тайм-менеджер и проч.), прочие пожелания.</li>
                                        </ul>
                                    </span>

                                    <div class="input-group col-md-12">
                                        <label class="col-md-12" for="vacancy_title">Название вакансии*</label>
                                        <div class="col-md-12">
                                            <input
                                                    id="vacancy_title"
                                                    name="vacancy_title"
                                                    type="text"
                                                    class="form-control val-required"
                                                    maxlength="200">
                                        </div>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <label class="col-md-12" for="vacancy_description">Описание вакансии*</label>
                                        <textarea id="vacancy_description" name="vacancy_description" class="form-control val-required"></textarea>
                                    </div>

                                    <label for="tags">Подберите категории/ключевые слова к вакансии (или введите свои):</label>

                                    <div class="input-group col-md-12">
                                        <select id="tags" name="tags[]" class="form-control select2-input-tags" multiple="multiple">
                                            {foreach $tags as $tag}
                                                <option value="{$tag->name}">{$tag->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>

                                    <div class="input-group col-md-12">
                                        <button type="submit" class="btn-xs btn-primary">Добавить вакансию</button>
                                    </div>
                                </form>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{/block}
