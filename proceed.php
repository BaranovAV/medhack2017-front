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
        });
    </script>
</head>
<body>
<?
$minCol=4;
?>
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
                            <input id="temperature" name="temperature" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group panel panel-info">
                    <div class="panel-heading">Артериальное давление</div>
                    <div class="row panel-body">
                        <label for="sistolic" class="col-sm-<?=$minCol?> control-label">Систолическое</label>
                        <div class="col-sm-2">
                            <input id="sistolic" name="sistolic" type="text" class="form-control">
                        </div>
                        <label for="diastolic" class="col-sm-<?=$minCol?> control-label">Диастолическое</label>
                        <div class="col-sm-2">
                            <input id="diastolic" name="diastolic" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group panel panel-info">
                    <div class="panel-heading"><input id="cough-check" type="checkbox"><label for="cough-check">Кашель</label></div>
                    <div class="panel-body">
                        <div class="row">
                            <label for="cough" class="col-sm-<?=$minCol?> control-label">Тип</label>
                            <div class="col-sm-<?=12-$minCol?>">
                                <select id="cough" name="cough" class="form-control">
                                    <option selected>-</option>
                                    <option value="1">Сухой</option>
                                    <option value="2">Влажный</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="cough2" class="col-sm-<?=$minCol?> control-label">Выделения</label>
                            <div class="col-sm-<?=12-$minCol?>">
                                <select id="cough2" name="cough2" class="form-control">
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
                    <div class="form-group panel panel-info">
                        <div class="panel-heading"><input id="cough-check" type="checkbox"><label for="cough-check">Одышка</label></div>
                        <div class="panel-body">
                            <div class="row">
                                <label for="dyspnea-type" class="col-sm-<?=$minCol?> control-label">Тип</label>
                                <div class="col-sm-col-sm-<?=12-$minCol?> ">
                                    <select id="dyspnea-type" name="dyspnea[type]" class="form-control">
                                        <option value="1">Инспираторная</option>
                                        <option value="2">Экспираторная</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <label for="dyspnea-up" class="control-label">При подъеме на</label>
                    <select id="dyspnea-up" name="dyspnea[up]" class="form-control">
                        <option selected>-</option>
                        <option value="1">1 этаж</option>
                        <option value="2">2 этаж</option>
                        <option value="3">3 этаж</option>
                        <option value="4">4 этаж</option>
                        <option value="5">5 этаж</option>
                    </select>
                    <label for="dyspnea-forward" class="control-label">При Проходе по прямой</label>
                    <input id="dyspnea-forward" name="dyspnea[forward]" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="nausea" class="control-label">Тошнота</label>
                    <select id="nausea" name="nausea" class="form-control">
                        <option selected>-</option>
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
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
                    <label for="mayor-pain" class="control-label">Запор (количество дней)</label>
                    <input id="mayor-pain" name="mayor-pain" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label">Боль:</label><br>
                    <label for="pain-area" class="control-label">Область</label>
                    <input id="pain-area" name="pain" class="form-control" type="text">
                    <label for="pain-2" class="control-label">Где отдается</label>
                    <input id="pain-2" name="pain[2]" class="form-control" type="text">
                    <label for="pain-type" class="control-label">Характер</label>
                    <select id="pain-type" name="pain[type]" class="form-control">
                        <option selected>-</option>
                        <option value="0">острая</option>
                        <option value="1">ноющая</option>
                        <option value="2">тупая</option>
                    </select>
                    <label for="pain-volume" class="control-label">Сила</label>
                    <select id="pain-volume" name="pain[volume]" class="form-control">
                        <option selected>-</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Привычки</label><br>
                    <label class="control-label">Курение</label><br>
                    <label for="habbits-smoke-period" class="control-label">Стаж (лет)</label>
                    <input id="habbits-smoke-period" name="habbits[smoke][period]" class="form-control" type="text">
                    <label for="habbits-smoke-sigarette" class="control-label">Потребление в день (мл)</label>
                    <input id="habbits-smoke-sigarette" name="habbits[smoke][sigarette]" class="form-control" type="text">
                    <label class="control-label">Алкоголь</label><br>
                    <label for="habbits-alcohol" class="control-label">Потребление в неделю (мл)</label>
                    <input id="habbits-alcohol" name="habbits[alcohol]" class="form-control" type="text">
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