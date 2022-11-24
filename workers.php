<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Расписание</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5 ">
    <h3 class="mb-5">Наши работники</h3>
    <div class="d-flex flex-wrap">

<div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Директор</h4>
    </div>
    <div class="card-body">
        <img src="img/ava.jpg" class="img-thumbnail" alt="">
        <ul class="list-unstyled mt-3 mb-4">
            <center>
                <li>Ветров Генадий Васильевич</li>
                <li>Директор музыкальной школы №7</li>
                <li>Телефон для связи</li>
                <li><strong>89509501235</strong></li>
            </center>
        </ul>
    </div>
</div>
<div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Заместитель директора</h4>
    </div>
    <div class="card-body">
        <img src="img/ava.jpg" class="img-thumbnail" alt="">
        <ul class="list-unstyled mt-3 mb-4">
            <center>
                <li>Данилович Елизавета Михайловна</li>
                <li>Учитель по <strong>аккордеону</strong></li>
                <li>Записаться на занятие</li>
                <li><strong>89021465681</strong></li>
            </center>
        </ul>
    </div>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>