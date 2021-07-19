<?php

require_once(dirname(__FILE__)."/../models/db.php");

require_once(dirname(__FILE__) . "/../layouts/head.php");

require_once(dirname(__FILE__) . "/../layouts/header.php");

require_once(dirname(__FILE__) . "/../webroot/styles/favstyle.php");

require_once(dirname(__FILE__) . "/../logic/favorite.php");


echo "<h3><p>Список любимых стран пользователя: ".$_SESSION['user_login']."</p></h3> ";

$result = DB::run(
    "SELECT
  wishlist.users_id_users,
  wishlist.country_id_country,
  country.country_name,
  users.login
FROM wishlist
  INNER JOIN country
    ON wishlist.country_id_country = country.id_country
  INNER JOIN users
    ON wishlist.users_id_users = users.id_users
WHERE users.login ='{$_SESSION['user_login']}'");

$row = $result->fetchAll(PDO::FETCH_ASSOC);?>


<ol class="list-counter-circle">

<?php foreach ($row as $value): ?>
    <li><?php echo $value['country_name']; ?></li>
<?php endforeach; ?>




