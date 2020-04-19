<?php
    error_reporting(0);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."hereisyoucode:)");

    require('../connection.php');

    $result = $mysql->query(
        "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'"
    );

    $user = $result->fetch_assoc();
    if (count($user) == 0){
        echo "You write uncorrect login or password... Try again"." <a href='/exit.php'>Exit</a>.";
        
        exit();
    }

    setcookie('user', $user['name'], time() + 60*60, "/");

    $mysql->close();

    header('Location: /')
?>