{extends 'theme/sponsors.tpl'}

{block 'content'}

    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    {include 'pages/includes/invitations.tpl'}

    <div class="col-md-12">
        <h4>ВАКАНСИИ</h4>
        <hr>
        <p align="center"><b>Если вы – руководитель или участник проекта, и понимаете, что к вам в команду нужны люди, то вы можете в личном кабинете или при регистрации проекта написать вакансию, которая отобразится на этой страничке. Участники смогут увидеть эту вакансию и подать свою кандидатуру на рассмотрение, чтобы вы выбрали в свою команду лучшего участника.</b></p>
    <hr><br>
        <form class="form_search" id="form_search" action="{url route='default' controller='page' action='vacancies'}" method="GET">

            <label for="tags">Поиск идей по ключевым словам или описанию:</label>
            <div class="input-group col-md-12">
                <div class="col-md-8">
                    <select id="tags" name="tags[]" class="form-control select2-input-tags" multiple="multiple">
                        {foreach $tags as $tag}
                            <option value="{$tag->name}">{$tag->name}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Найти</button>
                </div>
            </div>
        </form>
    <hr><br>

        {foreach $vacancies as $k => $vacancy}
            <div class="collapse in {$vacancy->id}">
                <div class="timetable-body">
                    <div class="timetable-name"><span>{$vacancy->title}</span></div>
                    <div class="timetable-body-more">
                        <p><strong>Вакансия от проекта: </strong>{$vacancy->project->title}</p>
                        <p>{$vacancy->description}</p>
                        <ul>
                            <li><strong>Телефон руководителя команды: </strong>{$vacancy->project->leader->phone}</li>
                            <li><strong>E-mail руководителя команды: </strong>{$vacancy->project->leader->email}</li>
                        </ul>
                        <p><strong>Заявок оставлено на вакансию: </strong>{$vacancy->get_amount()}</p>
                    </div>
                </div>
            </div>
            {if $participant}
                {if $vacancy->project->leader->id != $participant->id}
                    {if $has_applied[$k]}
                        <p>Вы уже подали заявку на эту вакансию.</p>
                    {else}
                        <form class="form_apply" action="/form/vacancy_apply" method="GET">
                            <input id="vacancy_id" name="vacancy_id" type="hidden" value="{$vacancy->id}">
                            <div class="input-group col-md-12">
                                <button type="submit" class="btn btn-primary">Подать заявку</button>
                            </div>
                        </form>
                    {/if}
                {else}
                    <p>Это вакансия одного из ваших проектов.</p>
                {/if}
            {/if}
        {/foreach}
    </div>

    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/ideas.js" type="text/javascript"></script>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
{/block}