
    <h1>Добро пожаловать, <?php echo $_SESSION['user_login'];?> </h1>
    <a href="logic/logout.php">Выйти из аккаунта</a>
    <br>
    <br>
    <div class="container">
        <h3 class="mb-5">Континенты</h3>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="webroot/img/6.jpg">
                    <div class="card-body">
                        <p class="card-text">Все страны</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="document.location='countries/allcountries.php'" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="webroot/img/1.jpg">
                    <div class="card-body">
                        <p class="card-text">Европа</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="document.location='countries/europe.php'" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="webroot/img/2.jpg">
                    <div class="card-body">
                        <p class="card-text">Азия и Океания</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="document.location='countries/asia.php'" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="webroot/img/3.jpg">
                    <div class="card-body">
                        <p class="card-text">Африка</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="document.location='countries/africa.php'" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="webroot/img/4.jpg">
                    <div class="card-body">
                        <p class="card-text">Северная Америка</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="document.location='countries/north_america.php'" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="webroot/img/5.jpg">
                    <div class="card-body">
                        <p class="card-text">Южная Америка</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" onclick="document.location='countries/south_america.php'" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>