{extends 'theme/sponsors.tpl'}

{block 'content'}
    <h4>ВЫ ПОПАЛИ В АДМИНКУ</h4>
    <hr>

    <p align="center"><b>Из админки можно скачать списки проектов, участников и посетителей мастер-классов.</b></p>
    <p align="center"><b>Администратор на сайте также может редактировать и удалять идеи из банка идей.</b></p>

    <hr>

    <div align="center">
        <a href="{url route='default' controller='admin' action='list'}" class="btn btn-success">
            Записать свежие данные в файлы (первым делом нажмите сюда)
        </a>
    </div>

    <hr>

    <a href="{$link_to_projects}" target="_blank">
        Список заявок и участников конференции
    </a>

    <hr>

    <a href="{$link_to_masters}" target="_blank">
        Список записавшихся на мастер-классы
    </a>

    <hr>

    <p align="center"><b>Все проекты.</b></p>
    <p align="center"><b>В случае повторной регистрации, отсюда можно удалить лишние записи</b></p>
    {$i = 1}
    {foreach $projects as $k => $project}
        <div class="col-md-12" style="margin-bottom: 20px">
                <div class="col-md-9">
                    <div class="timetable-body">
                        <div class="timetable-name"><span>{$i++}. {$project->title}</span></div>
                        <div class="timetable-body-more">
                            <p>{$project->description}</p>
                            <ul>
                                <li><strong>Телефон руководителя команды: </strong>{$project->leader->phone}</li>
                                <li><strong>E-mail руководителя команды: </strong>{$project->leader->email}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-md-offset-2">
                    <form class="project_delete" action="{url route='default' controller='admin' action='delete_project'}" method="GET">
                        <input id="project_id" name="project_id" type="hidden" value="{$project->id}">
                        <div class="input-group col-md-12">
                            <button type="submit" class="btn-sm btn-danger">Удалить проект!</button>
                        </div>
                    </form>
                </div>
        </div>


    {/foreach}

{/block}