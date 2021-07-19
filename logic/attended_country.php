<?php

$country_id = $_POST['attended_country'];
$cookie_name = "attended[$country_id]";

if (isset($_COOKIE['attended']) && array_key_exists($country_id, $_COOKIE['attended']) ) {
    setcookie($cookie_name, '', time() - 400, '/');
} else {
    setcookie($cookie_name, '1', time() + 3600, '/');
}
