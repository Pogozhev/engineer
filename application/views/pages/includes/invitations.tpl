{if $has_invitations}
    <div class="col-md-12">
        <h4>Вы получили приглашение в проекты:</h4>
        <hr>

        {foreach $invitations as $invitation}
            <div class="col-md-9" style="margin-bottom: 20px">
                <div class="col-md-12">
                    <div class="timetable-body">
                        <div class="timetable-name"><span>{$invitation->project->title}</span></div>

                        <div class="timetable-body-more">
                            <div>
                                    <span>
                                        {$invitation->project->leader->last_name} {$invitation->project->leader->first_name} {$invitation->project->leader->middle_name}
                                    </span>
                            </div>
                            <div>
                                <ul>
                                    <li><strong>Телефон руководителя: </strong>{$invitation->project->leader->phone}</li>
                                    <li><strong>E-mail участника: </strong>{$invitation->project->leader->email}</li>
                                </ul>
                            </div>
                            <p>{$invitation->project->description}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1">
                <form action="/form/invitation_accept" method="GET">
                    <input id="invitation_id" name="invitation_id" type="hidden" value="{$invitation->id}">
                    <div class="input-group col-md-12">
                        <button type="submit" class="btn-xs btn-success">Присоединиться к проекту</button>
                    </div>
                </form>
                <form action="/form/invitation_decline" method="GET">
                    <input id="invitation_id" name="invitation_id" type="hidden" value="{$invitation->id}">
                    <div class="input-group col-md-12">
                        <button type="submit" class="btn-xs btn-danger">Отказаться</button>
                    </div>
                </form>
            </div>
            <hr>
        {/foreach}
    </div>
{/if}