{extends 'theme/sponsors.tpl'}

{block 'content'}
    <h4>ВСЕ ПРОЕКТЫ</h4>
  
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