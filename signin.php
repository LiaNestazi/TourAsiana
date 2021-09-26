<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM `users` WHERE `login` LIKE '$login'";
$res = mysqli_fetch_all(mysqli_query($connect, $sql),MYSQLI_ASSOC);
if ($res==null){
    $_SESSION['message'] = 'Пользователя с таким логином не существует';
    header('Location: index.php');
}
else {
    if ($res[0]['password'] != $password) {
        $_SESSION['message'] = 'Неверный пароль';
        header('Location: index.php');
    } else {
        $_SESSION['user'] = [
            'id' => $res[0]['id'],
            'full_name' => $res[0]['full_name'],
            'login' => $res[0]['login']
        ];
        header('Location: main.php');
    }
}