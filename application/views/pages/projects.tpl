{extends 'theme/sponsors.tpl'}

{block 'content'}

    {include 'pages/includes/invitations.tpl'}

    <ul class="nav nav-tabs" style="margin-top:30px; margin-bottom: 30px">
        {foreach $years as $year}
            <li role="presentation" {if $year == $the_year}class="active"{/if}>
                <a href="{if $year == $the_year}#{else}{url route='projects'}{query year=$year}{/if}">IME{$year}</a>
            </li>
        {/foreach}
    </ul>

    <div class="col-md-12">
        <h4>ПРОЕКТЫ УЧАСТНИКОВ IME</h4>
        <hr>
        {$i = 1}
        {foreach $projects as $k => $project}
            <div class="col-md-12" style="margin-bottom: 20px">
                <div class="col-md-12">
                    <div class="timetable-body">
                        <div class="timetable-name"><span>{$i++}. {$project->title}</span></div>
                        <div class="timetable-body-more">
                            <p>{$project->description}</p>

                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{/block}
