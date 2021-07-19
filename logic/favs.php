<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "travel";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$method = $_GET['method'];
$country_id_country = $_GET['country_id_country'];
$users_id_users = $_GET['users_id_users'];

if ($method == "Like") {
  mysqli_query($conn,"INSERT INTO wishlist (country_id_country, users_id_users) VALUES ('$country_id_country', '$users_id_users')");
}
else {
  mysqli_query($conn,"DELETE FROM wishlist WHERE country_id_country = '$country_id_country' AND users_id_users = '$users_id_users'");
}
?>
