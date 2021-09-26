<?php
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if ($full_name!=''&&$login!=''&&$password!='') {
    if ($password === $confirm_password) {
        $sql = "SELECT * FROM `users` WHERE `login` LIKE '$login'";
        $res = mysqli_fetch_assoc(mysqli_query($connect,$sql));
        if ($res!=null){
            $_SESSION['message'] = 'Такой логин уже используется';
            header('Location: register.php');
        }else {
            $password = md5($password);
            $sql = "INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES (NULL, '$full_name', '$login', '$password')";
            mysqli_query($connect, $sql);
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: index.php');
        }
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: register.php');
    }
}
else {
    $_SESSION['message'] = 'Поля не могут быть пустыми';
    header('Location: register.php');
}