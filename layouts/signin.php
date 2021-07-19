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


    <!-- Custom styles for this template -->
    <link href="webroot/styles/sign.css" rel="stylesheet">

<body class="text-center">

<main class="form-signin">
    <form action="logic/auth.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста, авторизуйтесь</h1>

        <div class="form-floating">
            <input type="text" name="login" class="form-control">
            <label for="login">Введите логин</label>
        </div>
        <div class="form-floating">
            <input type="password" name="pwd" class="form-control">
            <label for="login">Введите пароль</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="button">Авторизоваться</button>

        <a href="layouts/signup.php">Страница регистрации</a>
    </form>
</main>
</body>