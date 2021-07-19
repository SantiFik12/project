<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <!-- <script src="jquery.min.js"></script> -->
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('.button').on('click', function(e){
                e.preventDefault();
                var country_id_country = $(this).attr('country_id_country'); // Get the parameter user_id from the button
                var users_id_users = $(this).attr('users_id_users'); // Get the parameter director_id from the button
                var method = $(this).attr('method');  // Get the parameter method from the button
                if (method == "Like") {
                    $(this).attr('method', 'Unlike') // Change the div method attribute to Unlike
                    $('#' + country_id_country).replaceWith('<img class="favicon" id="' + country_id_country + '" src="webroot/img/favon.jpg">') // Replace the image with the liked button
                } else {
                    $(this).attr('method', 'Like')
                    $('#' + country_id_country).replaceWith('<img class="favicon" id="' + country_id_country + '" src="webroot/img/favoff.png">')
                }
                $.ajax({
                    url: 'logic/favs.php', // Call favs.php to update the database
                    type: 'GET',
                    data: {country_id_country: country_id_country, users_id_users: users_id_users, method: method},
                    cache: false,
                    success: function(data){
                    }
                });
            });
        });
    </script>
</head>

<body>
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

function checkFavorite($users_id_users, $country_id_country, $conn) {
    $result = $conn->query("SELECT * FROM wishlist WHERE country_id_country = '". $country_id_country."' AND users_id_users = '". $users_id_users."'");
    $numrows =  $result->num_rows;
    if ($numrows == 0) {
        echo "<div class = 'button' method = 'Like'  country_id_country = ".$country_id_country." users_id_users = ".$users_id_users."> <img id=".$country_id_country. " src='webroot/img/favoff.png'> </div>";
    }
    else {
        echo  "<div class = 'button' method = 'Unlike'  country_id_country = ".$country_id_country." users_id_users = ".$users_id_users."> <img id=".$country_id_country. " src='webroot/img/favon.jpg'> </div>";
    }
}

// Query to Get the User ID
$result = $conn->query("SELECT * FROM users WHERE login = '{$_SESSION['user_login']}'");
$row = $result->fetch_assoc();
$users_id_users = $row['id_users'];

?>
</body>
</html>
