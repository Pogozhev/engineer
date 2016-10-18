{extends 'theme/sponsors.tpl'}

{block 'content'}
    <script src="/assets/js/masters.js" type="text/javascript"></script>

    <ul class="nav nav-tabs" style="margin-top:30px; margin-bottom: 30px">
        <li role="presentation"><a href="{url route='personal' action='projects'}">Мои проекты</a></li>
        <li role="presentation" class="active"><a href="#">Запись на Мастер-классы</a></li>
        <li role="presentation"><a href="{url route='personal' action='profile'}">Личная информация</a></li>
    </ul>

    <h4>ЗАПИСЬ НА МАСТЕР-КЛАССЫ</h4>
    <hr>
    <p align="center"><b>Вы можете записаться максимум на 5 мастер-классов, не пересекающихся во времени.</b></p>

    <form class="masters_form" action="/personal/save_masters" method="POST">
        <span>Мастер-классы участника</span> {$k = 0}
        <input id="participant_id" name="participant_id" type="hidden" value="{$participant->id}">
        <div class="input-group col-md-12">
            <select id="master1_id" name="master1_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0"
                        >Нет мастер-класса</option>
                {foreach $masters as $m => $master}
                    <option
                            data-begin="{$master->unixtime_begin}"
                            data-end="{$master->unixtime_end}"
                            data-left="{$master_lefts[$m]}"
                            value="{$master->id}"
                            {if isset($p_masters[$k][0])}{if $p_masters[$k][0] == {$master->id}}selected{/if}{/if}>
                        {date( 'd M H:i', $master->unixtime_begin)}-{date( 'H:i', $master->unixtime_end)}. {$master->title} (Осталось мест: {$master_lefts[$m]})
                    </option>
                {/foreach}
            </select>
            <select id="master2_id" name="master2_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                {foreach $masters as $m => $master}
                    <option
                            data-begin="{$master->unixtime_begin}"
                            data-end="{$master->unixtime_end}"
                            data-left="{$master_lefts[$m]}"
                            value="{$master->id}"
                            {if isset($p_masters[$k][1])}{if $p_masters[$k][1] == {$master->id}}selected{/if}{/if}>
                        {date( 'd M H:i', $master->unixtime_begin)}-{date( 'H:i', $master->unixtime_end)}. {$master->title} (Осталось мест: {$master_lefts[$m]})
                    </option>
                {/foreach}
            </select>
            <select id="master3_id" name="master3_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                {foreach $masters as $m => $master}
                    <option
                            data-begin="{$master->unixtime_begin}"
                            data-end="{$master->unixtime_end}"
                            data-left="{$master_lefts[$m]}"
                            value="{$master->id}"
                            {if isset($p_masters[$k][2])}{if $p_masters[$k][2] == {$master->id}}selected{/if}{/if}>
                        {date( 'd M H:i', $master->unixtime_begin)}-{date( 'H:i', $master->unixtime_end)}. {$master->title} (Осталось мест: {$master_lefts[$m]})
                    </option>
                {/foreach}
            </select>
            <select id="master4_id" name="master4_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                {foreach $masters as $m => $master}
                    <option
                            data-begin="{$master->unixtime_begin}"
                            data-end="{$master->unixtime_end}"
                            data-left="{$master_lefts[$m]}"
                            value="{$master->id}"
                            {if isset($p_masters[$k][3])}{if $p_masters[$k][3] == {$master->id}}selected{/if}{/if}>
                        {date( 'd M H:i', $master->unixtime_begin)}-{date( 'H:i', $master->unixtime_end)}. {$master->title} (Осталось мест: {$master_lefts[$m]})
                    </option>
                {/foreach}
            </select>
            <select id="master5_id" name="master5_id" class="form-control">
                <option
                        data-begin="0"
                        data-end="0"
                        data-left="1"
                        value="0">Нет мастер-класса</option>
                {foreach $masters as $m => $master}
                    <option
                            data-begin="{$master->unixtime_begin}"
                            data-end="{$master->unixtime_end}"
                            data-left="{$master_lefts[$m]}"
                            value="{$master->id}"
                            {if isset($p_masters[$k][4])}{if $p_masters[$k][4] == {$master->id}}selected{/if}{/if}>
                        {date( 'd M H:i', $master->unixtime_begin)}-{date( 'H:i', $master->unixtime_end)}. {$master->title} (Осталось мест: {$master_lefts[$m]})
                    </option>
                {/foreach}
            </select>
        </div>
        <div class="input-group col-md-12">
			<button type="submit" class="btn btn-primary">Сохранить список моих Мастер-классов</button>
        </div>
    </form>
{/block}