<?php
session_start();
?>
<html>
<head>
    <title>TourAsiana - Asian Tours</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="y-center">
<h1 class="tour-title">ARenda</h1>
<h2 class="tour-title"></h2>
<div class="card">
    <p class="par">Вы арендодатель?</p>
    <!-- Форма авторизации-->
    <form action="signin.php" method="post">
        <label>Логин:</label>
        <input type="text" name = "login" placeholder="Введите логин"/>
        <label>Пароль:</label>
        <input type="password" name = "password" placeholder="Введите пароль" />
        <button type="submit">Войти</button>
        <p>
            У Вас нет аккаунта? - <a class="links" href="/register.php">зарегистрируйтесь!</a>
        </p>
        <?php
        if (isset($_SESSION['message'])){
            echo('<p class="msg">'.$_SESSION['message'].'</p>');
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
</body>
</html>
