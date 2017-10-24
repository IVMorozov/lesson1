<?php
$userName = 'Илья';
$userAge = '35';
$userEmail = 'morozovXXXX@ya.ru';
$userCity = 'Волгоград';
$userinfo = 'Банк России, экономист';

?>
<table border="0">
    <caption><h1>Страница пользователя Илья</h1></caption>
    <tr><td class="firstcol">Имя</td><td><?= $userName ?></td></tr>
    <tr><td class="firstcol">Возраст</td><td><?= $userAge ?></td></tr>
    <tr><td class="firstcol">Адрес электронной почты</td><td><?= $userEmail ?></td></tr>
    <tr><td class="firstcol">Город</td><td><?= $userCity ?></td></tr>
    <tr><td class="firstcol">О себе</td><td><?= $userinfo ?></td></tr>
</table>
<style>
    .firstcol {width: 300px;}
</style>
