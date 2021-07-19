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
<link href="webroot/styles/headers.css" rel="stylesheet">



<div class="container">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
    </a>
    <nav>
        <?php if(isset($_SESSION['user_login'])): ?>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
           <li><a href="index.php" class="nav-link px-2 link-dark">Главная</a></li>
            <li><a href="layouts/favpage.php" class="nav-link px-2 link-dark">Избранное</a></li>
        </ul>
        <?php else: ?>
        <div class="col-md-3 text-end">
            <form action="layouts/signin.php">
            <button type="submit" class="btn btn-outline-primary me-2">Авторизироваться</button>
            </form>
            <form action="layouts/signup.php">
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
        <?php endif; ?>

    </nav>
</header>
</div>
<hr>
