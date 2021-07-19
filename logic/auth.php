<?php

require_once(dirname(__FILE__)."/../models/db.php");

$login=trim($_POST['login']);
$pwd=trim($_POST['pwd']);



if(!empty($login) && !empty($pwd)) {

    $sql = 'SELECT login, password FROM users WHERE login = :login';
    $params= [':login' => $login];

    $stmt= DB:: prepare($sql);
    $stmt -> execute($params);

    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user) {
        if(password_verify($pwd,$user->password)){
            $_SESSION['user_login'] = $user->login;
            header('Location: ../index.php');
        } else{
            echo 'Вы ввели неверный логин или пароль';
        }
    } else {
        echo 'Вы ввели неверный логин или пароль';
    }

} else {
    echo 'Пожалуйста, заполните все поля';
}
