<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap уроки</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<a data-toggle="collapse" href="#hide">JS Collapse</a>
<div class="collapse in" id="hide">
    Какой-либо скрытый текст!
</div>

<div class="panel-group" id="collapse-group">
    <div class="panel panel-info">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">Первый</a>
        </div>
        <div id="el1" class="collapse in">
            <div class="panel-body">Текст который должен тут быть</div>
        </div>
    </div>

    <div class="panel panel-danger">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">Второй</a>
        </div>
        <div id="el2" class="collapse">
            <div class="panel-body">Текст который должен тут быть</div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
