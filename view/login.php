<h2>Информация о полььзователе</h2>

<form class="form-horizontal" role="form" id="contactForm" action="process.php" method="post">
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Имя</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="Имя">
        </div>
    </div>
    <div class="form-group">
        <label for="inputSurname" class="col-sm-2 control-label">Фамилия</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSurname" placeholder="Фамилия">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPatronymic" class="col-sm-2 control-label">Отчество</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPatronymic" placeholder="Отчество">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassport" class="col-sm-2 control-label">Серия и номер паспорта</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassport" placeholder="Серия и номер паспорта">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPolicy" class="col-sm-2 control-label">Полис МС</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPolicy" placeholder="Полис МС">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Согласие на обработку персональных данных
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default">Продолжить</button>
        </div>
    </div>
</form>
<script>
    $("#contactForm").submit(function(event){
        form=$("#contactForm");
        $.ajax({
            type: form.prop('method'),
            url: form.prop('action'),
            data: form.serialize(),
            success : function(text){
                if (text == "success"){
                    setTimeout('document.location.replace("?view=proceed")', 1000);
                }
            }
        });
        event.preventDefault();
    });
</script>