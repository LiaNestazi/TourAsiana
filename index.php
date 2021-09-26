<?php
session_start();
require_once 'menu.php'
?>
<html>
<head>
    <title>ARenda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="y-center">

    <h1 class="tour-title">Какое жилье вы ищете?</h1>
    <div class="card">
        <form action="contacts.php" method="post">
            <input type="text" name="text" placeholder="Поиск по сайту"><button type="submit" name="search">Поиск</button>
        </form>
    </div>
<div class="card">
    <p class="par">Вы арендодатель?</p>
    <!-- Форма авторизации-->
        <form action="signin_page.php" method="post">
            <button type="submit">Войти</button>
        </form>
    <form action="register.php" method="post">
        <button type="submit">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>