<?php
session_start();
?>
<html>
<head>
    <title>TourAsiana - Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Форма регистрации-->
<div class="card"><div class="central">
        <form action="signup.php" method="post">
            <label>ФИО:</label>
            <input type="text" name = "full_name" placeholder="Введите ваше полное ФИО"/>
            <label>Логин:</label>
            <input type="text" name = "login" placeholder="Введите логин"/>
            <label>Пароль:</label>
            <input type="password" name = "password" placeholder="Введите пароль" />
            <label>Подтверждение пароля:</label>
            <input type="password" name = "confirm_password" placeholder="Подтвердите пароль" />
            <button type="submit">Зарегистрироваться</button>
            <p>
                У Вас уже есть аккаунт? - <a class="links" href="/signin_page.php">авторизуйтесь!</a>
            </p>
            <?php
            if (isset($_SESSION['message'])){
                echo('<p class="msg">'.$_SESSION['message'].'</p>');
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>
</div>
</body>
</html>