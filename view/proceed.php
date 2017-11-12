<? $minCol=4; ?>
<style>
    .panel-body > .row {
        margin-top: 5px;
    }
</style>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>Hello, world!</h2>
        <form action="process.php" method="post" id="proceedForm">
            <div class="form-group">
                <div class="row">
                    <label for="reason" class="col-sm-<?=$minCol?> control-label">Цель обращения</label>
                    <div class="col-sm-<?=12-$minCol?>">
                        <select id="reason" name="reason" class="form-control custom-select">
                            <option value="1">Заболевание</option>
                            <option value="2">Диспансеризация</option>
                            <option value="3">Профосмотр</option>
                            <option value="4">МСЭ</option>
                            <option value="5">Выдача документов</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label for="temperature" class="col-sm-<?=$minCol?> control-label">Температура тела</label>
                    <div class="col-sm-2">
                        <input id="temperature" name="temperature" type="text" class="form-control" placeholder="36,6">
                    </div>
                    <div class="col-sm-1 control-label pull-left">
                        C°
                    </div>
                </div>
            </div>
            <div class="form-group panel panel-info">
                <div class="panel-heading">Артериальное давление</div>
                <div class="row panel-body">
                    <label for="sistolic" class="col-sm-<?=$minCol?> control-label">Систолическое</label>
                    <div class="col-sm-2">
                        <input id="sistolic" name="sistolic" type="text" class="form-control" placeholder="mm">
                    </div>
                    <label for="diastolic" class="col-sm-<?=$minCol?> control-label">Диастолическое</label>
                    <div class="col-sm-2">
                        <input id="diastolic" name="diastolic" type="text" class="form-control" placeholder="mm">
                    </div>
                </div>
            </div>
            <div class="form-group panel panel-info">
                <div class="panel-heading"><input id="pain-check" type="checkbox"><label for="pain-check">Боль</label></div>
                <div class="panel-body">
                    <div class="row">
                        <label for="pain-area" class="col-sm-<?=$minCol?> control-label">Область</label>
                        <div class="col-sm-<?=12-$minCol?>">
                            <input id="pain-area" name="pain" class="form-control" type="text" placeholder="левая грудь" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <label for="pain-2" class="col-sm-<?=$minCol?> control-label">Где отдается</label>
                        <div class="col-sm-<?=12-$minCol?>">
                            <input id="pain-2" name="pain[2]" class="form-control" type="text" placeholder="правая грудь" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <label for="pain-type" class="col-sm-<?=$minCol?> control-label">Характер</label>
                        <div class="col-sm-<?=12-$minCol?>">
                            <select id="pain-type" name="pain[type]" class="form-control" disabled>
                                <option value="0">острая</option>
                                <option value="1">ноющая</option>
                                <option value="2">тупая</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="pain-volume" class="col-sm-<?=$minCol?> control-label">Сила</label>
                        <div class="col-sm-<?=12-$minCol?>">
                            <select id="pain-volume" name="pain[volume]" class="form-control" disabled>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5" selected>5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group panel panel-info">
                <div class="panel-heading"><input id="dyspnea-check" type="checkbox"><label for="dyspnea-check">Одышка</label></div>
                <div class="panel-body">
                    <div class="row">
                        <label for="dyspnea-type" class="col-sm-<?=$minCol?> control-label">Тип</label>
                        <div class="col-sm-<?=12-$minCol?> ">
                            <select id="dyspnea-type" name="dyspnea[type]" class="form-control" disabled>
                                <option value="1">Инспираторная</option>
                                <option value="2">Экспираторная</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="dyspnea-type" class="col-sm-<?=$minCol?> control-label">При подъеме на</label>
                        <div class="col-sm-<?=12-$minCol?> ">
                            <select id="dyspnea-up" name="dyspnea[up]" class="form-control" disabled>
                                <option selected>-</option>
                                <option value="1">1 этаж</option>
                                <option value="2">2 этаж</option>
                                <option value="3">3 этаж</option>
                                <option value="4">4 этаж</option>
                                <option value="5">5 этаж</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="dyspnea-type" class="col-sm-<?=$minCol?> control-label">При проходе по прямой</label>
                        <div class="col-sm-2">
                            <input id="dyspnea-forward" name="dyspnea[forward]" class="form-control" type="text" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group panel panel-info">
                <div class="panel-heading"><input id="cough-check" type="checkbox"><label for="cough-check">Кашель</label></div>
                <div class="panel-body">
                    <div class="row">
                        <label for="cough" class="col-sm-<?=$minCol?> control-label">Тип</label>
                        <div class="col-sm-<?=12-$minCol?>">
                            <select id="cough" name="cough" class="form-control" disabled>
                                <option selected>-</option>
                                <option value="1">Сухой</option>
                                <option value="2">Влажный</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="cough2" class="col-sm-<?=$minCol?> control-label">Выделения</label>
                        <div class="col-sm-<?=12-$minCol?>">
                            <select id="cough2" name="cough2" class="form-control" disabled>
                                <option selected>-</option>
                                <option value="1">слизистые</option>
                                <option value="0">гнойные</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="soply" class="control-label">Насморк</label>
                <select id="soply" name="soply" class="form-control">
                    <option value="0" selected>Нет</option>
                    <option value="1">Выделения слизистые</option>
                    <option value="2">Выделения гнойные</option>
                </select>
            </div>
            <div class="form-group">
                <label for="voice" class="control-label">Изменение голоса</label>
                <select id="voice" name="voice" class="form-control">
                    <option value="1">Да</option>
                    <option value="0" selected>Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="weakness" class="control-label">Слабость</label>
                <select id="weakness" name="weakness" class="form-control">
                    <option value="1">Да</option>
                    <option value="0" selected>Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dizziness" class="control-label">Головокружение</label>
                <select id="dizziness" name="dizziness" class="form-control">
                    <option value="1">Да</option>
                    <option value="0" selected>Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nausea" class="control-label">Тошнота</label>
                <select id="nausea" name="nausea" class="form-control">
                    <option value="1">Да</option>
                    <option value="0" selected>Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="vomiting" class="control-label">Рвота (количество раз)</label>
                <input id="vomiting" name="vomiting" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="diarrhea" class="control-label">Понос (количество раз)</label>
                <input id="diarrhea" name="diarrhea" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="constipation" class="control-label">Запор (количество дней)</label>
                <input id="constipation" name="constipation" class="form-control" type="text">
            </div>
            <div class="form-group panel panel-info">
                <div class="panel-heading">Привычки</div>
                <div class="panel-body">
                    <div class="row">
                        <label for="habbits-smoke-period" class="col-sm-<?=$minCol?> control-label">Стаж курения</label>
                        <div class="col-sm-2">
                            <input id="habbits-smoke-period" name="habbits[smoke][period]" class="form-control" type="text">
                        </div>
                        <label for="habbits-smoke-period" class="col-sm-<?=$minCol?> control-label">Потребление в день</label>
                        <div class="col-sm-2">
                            <input id="habbits-smoke-sigarette" name="habbits[smoke][sigarette]" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <label for="habbits-alcohol" class="col-sm-<?=$minCol?> control-label">Потребление алкоголя в неделю</label>
                        <div class="col-sm-2">
                            <input id="habbits-alcohol" name="habbits[alcohol]" class="form-control" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Отправить</button>
            </div>
        </form>
    </div>
    </div>
<script>
    $(document).ready(function() {
        $(['#pain-check','#dyspnea-check','#cough-check'].join()).click(function () {
            let checkbox=$(this);
            let panel=checkbox.parents('.form-group').children('.panel-body');
            panel.find('select').each(function(k,v){ $(v).prop('disabled', !checkbox.prop('checked')) });
            panel.find('input').each(function(k,v){ $(v).prop('disabled', !checkbox.prop('checked')) });
        });
    });
    $("#proceedForm").submit(function(event){
        form=$("#proceedForm");
        event.preventDefault();
        $.ajax({
            type: form.prop('method'),
            url: form.prop('action'),
            data: form.serialize(),
            success : function(text){
                if (text == "success"){
                    setTimeout('document.location.replace("?")', 1000);
                }
            }
        });
    });
</script>