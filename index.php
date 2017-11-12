<?
$contentFile = $_GET['view'];
if (!$contentFile) {
    $contentFile='index';
}
$contentFile="view/$contentFile.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/jquery.3.2.1.min.js"></script>
    <style>
        body > .container {
            padding: 70px 15px 20px;
        }
    </style>
</head>
<body>

<nav id="w3" class="navbar-inverse navbar-fixed-top navbar">
    <div class="container">
<!--        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w3-collapse"><span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span></button><a class="navbar-brand" href="/">ООО "Цетта"</a>-->
<!--        </div>-->
        <div id="w3-collapse" class="collapse navbar-collapse">
            <ul id="w4" class="navbar-nav navbar-right nav">
                <li><a href="?">Start</a></li>
                <li><a href="?view=proceed">Anketa</a></li>
                <li><a href="?view=login">Log in</a></li>
                <li><form action="?view=logout" method="post">
                        <button type="submit" class="btn btn-link logout">Log out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
<? require $contentFile; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>