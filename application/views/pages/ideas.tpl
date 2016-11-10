{extends 'theme/sponsors.tpl'}

{block 'content'}

    <h4>БАНК ИДЕЙ</h4>
    <p> – это сборник идей студентов, которые так и не реализовались.
        Если у вас нет идеи, то вы можете позаимствовать ее отсюда.
        Если вы решаете взять идею из банка, вы можете написать автору идеи (если он есть), поинтересоваться у него, как она была оформлена и почему не реализовалась. Или же просто придумать свой путь реализации и преобразовать эту идею в проект.</p>

    <hr>

    <form class="form_search" id="form_search" action="{url route='default' controller='page' action='ideas'}" method="GET">

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

    <hr>

    {if $is_admin}
        <form class="collapse form_idea" id="form_general" action="{url route='default' controller='edit' action='edit_idea'}" method="POST">
            <label for="">Название идеи</label>
            <div class="input-group col-md-12">
                <input id="title" name="title" type="text" class="form-control" maxlength="800">
            </div>

            <label for="">Описание идеи</label>
            <div class="input-group col-md-12">
                <textarea id="description" name="description" class="form-control" maxlength="2000"></textarea>
            </div>

            <label for="">Как к Вам обращаться</label>
            <div class="input-group col-md-12">
                <input id="person" name="person" type="text" class="form-control" maxlength="400">
            </div>

            <label for="">Ваш E-mail</label>
            <div class="input-group col-md-12">
                <input id="email" name="email" type="text" class="form-control" maxlength="400">
            </div>

            <label for="tags">Подберите категории/ключевые слова к идее (или введите свои):</label>
            <div class="input-group col-md-12">
                <select id="tags" name="tags[]" class="form-control select2-input-tags" multiple="multiple">
                    {foreach $tags as $tag}
                        <option value="{$tag->name}">{$tag->name}</option>
                    {/foreach}
                </select>
            </div>

            <hr>
            <div class="input-group col-md-12">
                <button type="submit" class="btn btn-primary">Добавить!</button>
            </div>
        </form>

        <div style="margin-bottom: 30px">
            <button type="button" tabindex="-1" class="btn-xs btn-success" id="edit_btn_general">Показать/скрыть форму добавления идей</button>
        </div>
        <hr>
    {/if}
    {foreach $ideas as $idea}
        {if $is_admin}
            <form class="collapse form_idea form{$idea->id}" action="{url route='default' controller='edit' action='edit_idea'}" method="POST">
                <label for="">Название идеи</label>
                <div class="input-group col-md-12">
                    <input id="title" name="title" type="text" class="form-control" maxlength="800" value="{$idea->title}">
                </div>

                <label for="">Описание идеи</label>
                <div class="input-group col-md-12">
                    <textarea id="description" name="description" class="form-control" maxlength="2000">{$idea->description}</textarea>
                </div>

                <label for="">Как к Вам обращаться</label>
                <div class="input-group col-md-12">
                    <input id="person" name="person" type="text" class="form-control" maxlength="400" value="{$idea->person}">
                </div>

                <label for="">Ваш E-mail</label>
                <div class="input-group col-md-12">
                    <input id="email" name="email" type="text" class="form-control" maxlength="400" value="{$idea->email}">
                </div>

                <label for="tags">Добавьте категории/ключевые слова (старые останутся в описании):</label>
                <div class="input-group col-md-12">
                    <select id="tags" name="tags[]" class="form-control select2-input-tags" multiple="multiple">
                        {foreach $tags as $tag}
                            <option value="{$tag->name}">{$tag->name}</option>
                        {/foreach}
                    </select>
                </div>

                <hr>
                <input id="id" name="id" type="hidden" value="{$idea->id}">
                <div class="input-group col-md-12">
                    <button type="submit" class="btn btn-primary">Добавить идею</button>
                </div>
            </form>
        {/if}

        <div class="collapse in idea{$idea->id}">
            <div class="timetable-body">
                <div class="timetable-name"><span>{$idea->title}</span></div>
                <div class="timetable-body-more">
                    <p>{$idea->description}</p>
                    <ul>
                        {if ($idea->person != '')}
                            <li><strong>Автор идеи: </strong>{$idea->person}</li>
                        {/if}
                        {if ($idea->email  != '')}
                            <li><strong>E-mail: </strong>{$idea->email}</li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>

        {if $is_admin}
            <div class="col-md-2">
                <button type="button" tabindex="-1" class="btn-xs btn-warning edit_btn" data-iid="{$idea->id}">Редактировать</button>
            </div>
            <div class="col-md-2">
                <form class="idea_delete" action="{url route='default' controller='admin' action='delete_idea'}" method="GET">
                    <input id="idea_id" name="idea_id" type="hidden" value="{$idea->id}">
                    <div class="input-group col-md-12">
                        <button type="submit" class="btn-xs btn-danger">Удалить!</button>
                    </div>
                </form>
            </div>
        {/if}
    {/foreach}
    <script src="/assets/js/ideas.js" type="text/javascript"></script>
{/block}