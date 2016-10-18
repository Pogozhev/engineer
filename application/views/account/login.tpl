{extends 'theme/default.tpl'}

{block 'content'}
    <h4>ВХОД НА САЙТ</h4>
    <hr>

    <span class="label label-important">Вы можете осуществить вход на сайт после регистрации на конференцию.</span>
    <form method="post" action="/account/login">
        <div class="form-group col-md-12">
            <div class="col-md-5">
                <label>E-Mail адрес</label>
                <input type="email" name="email" class="form-control"><br/>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <label>Пароль</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>

        <div class="form-group col-md-12">
            <label class="checkbox">
                <input type="checkbox" name="rememberme" value="true"> Запомнить меня
            </label>
        </div>

        <div class="col-md-2">
            <input type="submit" value="Войти на сайт" class="btn btn-primary"><br/>
        </div>
        <div class="clearfix"></div>
    </form>

    <div style="margin-top: 100px"></div>
    <h4>Сброс пароля</h4>
    <hr>
    <span class="label label-important">Сброс пароля. На указанный адрес придёт письмо с предложением сбросить пароль (будет установлен случайно сгенерированый пароль).</span>
    <form method="post" action="/account/forgot">
        <div class="form-group col-md-12">
            <div class="col-md-5">
                <label>E-Mail адрес</label>
                <input type="email" name="email" class="form-control"><br/>
            </div>
        </div>

        <div class="col-md-2">
            <input type="submit" value="Сбросить пароль" class="btn btn-primary"><br/>
        </div>
        <div class="clearfix"></div>
    </form>
{/block}
