{extends 'theme/sponsors.tpl'}

{block 'content'}
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>

    <h4>ПРОЕКТЫ ОТ ПРЕДПРИЯТИЙ</h4>
    <p>
        В этом разделе хранятся настоящие проекты от университета или предприятий города, которые требуют для своей реализации студентов в команду. Вы можете связаться с контактным лицом проекта и подать заявку на участие, или же собрать свою команду, взять задачу для решения, и работать на предприятие удаленно.
    </p>
    <hr>


    <hr>
    {foreach $projects as $project}
        <div class="timetable-body">
            <div class="timetable-name"><span>{$project->title}</span></div>
            <div class="timetable-place"><strong>Проект от компании: </strong> {$project->organization} </div>
            <div class="timetable-body-more">
                <p>{$project->description}</p>
                <p><b>Контакты:</b></p>
                <ul>
                    <li><strong>Контактное лицо: </strong>{$project->person}</li>
                    {if ($project->phone  != '')}
                        <li><strong>Телефон: </strong>{$project->phone}</li>
                    {/if}
                    {if ($project->email  != '')}
                        <li><strong>E-mail: </strong>{$project->email}</li>
                    {/if}

                </ul>
            </div>
        </div>
    {/foreach}


    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/ideas.js" type="text/javascript"></script>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

{/block}