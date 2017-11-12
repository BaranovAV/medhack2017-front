<!doctype html>
<html lang="en">
<head>
    <title>Anketa for doctor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/jquery.3.2.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(['#pain-check','#dyspnea-check','#cough-check'].join()).click(function () {
                let obj=$(this);
                obj.parents('.form-group').children('.panel-body').find('select').each(function(k,v){ $(v).prop('disabled', !obj.prop('checked')) });
                obj.parents('.form-group').children('.panel-body').find('input').each(function(k,v){ $(v).prop('disabled', !obj.prop('checked')) });
            });
        });
    </script>
</head>
<style>
    .panel-body .row {
        margin-top: 5px;
    }
</style>
<body>
<? $minCol=4; ?>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" role="form" action="">
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
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>