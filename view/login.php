<div class="site-login">
    <h1>Вход</h1>

    <form id="login-form" class="form-horizontal" action="/login" method="post">
        <div class="row">
            <div class="form-group field-loginform-username required">
                <label class="col-lg-2 control-label" for="loginform-username">Имя пользователя</label>
                <div class="col-lg-3"><input id="loginform-username" class="form-control" name="LoginForm[username]"
                                             autofocus="" aria-required="true" type="text"></div>
                <div class="col-lg-8">
                    <div class="help-block help-block-error "></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group field-loginform-password required">
                <label class="col-lg-2 control-label" for="loginform-password">Пароль</label>
                <div class="col-lg-3"><input id="loginform-password" class="form-control" name="LoginForm[password]"
                                             aria-required="true" type="password"></div>
                <div class="col-lg-8">
                    <div class="help-block help-block-error "></div>
                </div>
            </div>
        </div>
        <div class="form-group field-loginform-rememberme">
            <div class="col-lg-offset-2 col-lg-3"><input name="LoginForm[rememberMe]" value="0" type="hidden"><input
                        id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="" type="checkbox">
                <label for="loginform-rememberme">Запомнить меня</label></div>
            <div class="col-lg-8">
                <div class="help-block help-block-error "></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-11">
                <button type="submit" class="btn btn-primary" name="login-button">Войти</button>
            </div>
        </div>

    </form>
</div>
<script>
    $("#contactForm").submit(function (event) {
        form = $("#contactForm");
        $.ajax({
            type: form.prop('method'),
            url: form.prop('action'),
            data: form.serialize(),
            success: function (text) {
                if (text == "success") {
                    setTimeout('document.location.replace("?view=proceed")', 1000);
                }
            }
        });
        event.preventDefault();
    });
</script>