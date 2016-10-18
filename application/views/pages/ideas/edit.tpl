{extends 'theme/sponsors.tpl'}

{block 'content'}

    <h4>БАНК ИДЕЙ</h4>
    <hr>

    <form class="" id="form_idea" action="{url route='default' controller='edit' action='edit_idea'}" method="POST">
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

        <hr>
      <div class="input-group col-md-12">
            <button type="submit" class="btn btn-primary">Добавить идею</button>
        </div>
    </form>

    {foreach $ideas as $idea}
        <div class="timetable-body">
            <div class="timetable-name"><span>{$idea->title}</span></div>
            <div class="timetable-body-more">
                <p>{$idea->description}</p>
                <ul>
                    {if !is_null($idea->person)}
                        <li><strong>Автор идеи: </strong>{$idea->person}</li>
                    {/if}
                    {if !is_null($idea->email)}
                        <li><strong>E-mail: </strong>{$idea->email}</li>
                    {/if}
                </ul>
            </div>
        </div>
    {/foreach}

    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/js/ideas.js" type="text/javascript"></script>

{/block}