<?php require_once(dirname(__FILE__) . "/../layouts/head.php");?>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<link href="webroot/styles/sign.css" rel="stylesheet">

<body class="text-center">

<main class="form-signin">
    <form action="logic/reg.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

        <div class="form-floating">
            <input type="text" name="login" class="form-control">
            <label for="login">Введите логин</label>
        </div>
        <div class="form-floating">
            <input type="password" name="pwd" class="form-control">
            <label for="login">Введите пароль</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="button">Зарегистрироваться</button>

        <a href="layouts/signin.php">Страница авторизации</a>
    </form>
</main>
</body>


