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
<center>
<div class="container">
    <div class="mb-5 v-card v-sheet theme--light ">
        <header class="pa-2 v-sheet theme--dark v-toolbar primary" style="height: 64px;">
            <div class="v-toolbar__content" style="height: 64px;">
                <strong>01.12.2022</strong>
            </div>
        </header>
        </center>
        <center>
        <div class="v-card__text">
            <div class="pa-5">
                <div class="v-data-table elevation-1 border-table fs theme--light">
                    <div class="v-data-table__wrapper"><table>
                            <colgroup>
                                <col class="">
                                <col class="">
                                <col class="">
                            </colgroup>
                            <thead class="v-data-table-header ">
                            <tr>
                                <th role="columnheader" scope="col" aria-label="Время" class="text-start" style="width: 20%; min-width: 20%;">
                                    <span>Время</span>
                                </th>
                                <th role="columnheader" scope="col" aria-label="Предмет" class="text-start" style="width: 60%; min-width: 60%;">
                                    <span>Предмет</span>
                                </th>
                                <th role="columnheader" scope="col" aria-label="Кабинет" class="text-start" style="width: 20%; min-width: 20%;">
                                    <span>Кабинет</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="">
                                <td class="text-start">13:50</td>
                                <td class="text-start">Сольфеджио</td>
                                <td class="text-start">102</td>
                            </tr>
                            <tr class="">
                                <td class="text-start">15:50</td>
                                <td class="text-start">Муз Литература</td>
                                <td class="text-start">103</td>
                            </tr>
                            <tr class="">
                                <td class="text-start">17:30</td>
                                <td class="text-start">Хор</td>
                                <td class="text-start">101</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5 v-card v-sheet theme--light">
        <header class="pa-2 v-sheet theme--dark v-toolbar primary" style="height: 64px;">
            <div class="v-toolbar__content" style="height: 64px;">
                <strong>02.12.2022</strong>
            </div>
        </header>
        <div class="v-card__text">
            <div class="pa-5">
                <div class="v-data-table elevation-1 border-table fs theme--light">
                    <div class="v-data-table__wrapper">
                        <table>
                            <colgroup>
                                <col class="">
                                <col class="">
                                <col class="">
                            </colgroup>
                            <thead class="v-data-table-header"><tr>
                                <th role="columnheader" scope="col" aria-label="Время" class="text-start" style="width: 20%; min-width: 20%;">
                                    <span>Время</span>
                                </th>
                                <th role="columnheader" scope="col" aria-label="Предмет" class="text-start" style="width: 60%; min-width: 60%;">
                                    <span>Предмет</span>
                                </th>
                                <th role="columnheader" scope="col" aria-label="Кабинет" class="text-start" style="width: 20%; min-width: 20%;">
                                    <span>Кабинет</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="">
                                <td class="text-start">13:50</td>
                                <td class="text-start">Сольфеджио</td>
                                <td class="text-start">102</td>
                            </tr>
                            <tr class="">
                                <td class="text-start">15:50</td>
                                <td class="text-start">Муз Литература</td>
                                <td class="text-start">103</td>
                            </tr>
                            <tr class="">
                                <td class="text-start">17:30</td>
                                <td class="text-start">Хор</td>
                                <td class="text-start">101</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </div>
</div>
</body>
</html>
