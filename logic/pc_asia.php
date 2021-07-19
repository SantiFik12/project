<?php

require_once(dirname(__FILE__)."/../models/db.php");

require_once(dirname(__FILE__) . "/../logic/favorite.php");


$i=16;
$j=1;

$sql_europe = 'SELECT * FROM country WHERE country.region = "азия"';



$result = DB::query($sql_europe); ?>

<section class="main-content">
    <div class="container">
        <h1 class="text-center text-uppercase">Страны и их столицы</h1>
        <br>
        <br>
        <div class="row">
            <?php while ($country = $result->fetch(PDO::FETCH_OBJ)):?>
            <div class="col-sm-4">
                <div class="place-card">
                    <div class="place-card__img">
                        <img src="webroot/img/nature<?php echo ($i++)?>.jpg" class="place-card__img-thumbnail" alt="Thumbnail">
                    </div>
                    <div class="place-card__content">
                        <h5 class="place-card__content_header"><a class="text-dark"><?php echo $country->country_name;?></a> <?php echo $fav_image = checkFavorite($users_id_users, $country->id_country, $conn);?></h5>
                        <div class="flex-center">
                            <p class="mb-0"><i class="fa fa-map-marker"></i> <span class="text-muted"><?php echo $country->capital;?></span></p>

                            <div class="rating-box">
                                <div class="star-rating__container">
                                    <div class="star-rating__wrapper">
                                        <div class="star-rating__avg"></div>
                                        <div class="star-rating" data-id="page-1<?php echo ($j++)?>">
                                            <div class="star-rating__bg">
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="star-rating__live">
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-rating="1">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-rating="2">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-rating="3">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-rating="4">
                                                    <path fill="currentColor"

                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                                <svg class="star-rating__item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-rating="5">
                                                    <path fill="currentColor"
                                                          d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="star-rating__votes"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php continue; ?>
        </div>

    </div>
</section>
<?php endwhile; ?>





