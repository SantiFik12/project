<?php require_once(dirname(__FILE__) . "/../models/db.php");?>

<!doctype html>
<html lang="en">
<head>

    <?php require_once(dirname(__FILE__) . "/../layouts/head.php");?>
</head>
<body>

<?php require_once(dirname(__FILE__) . "/../layouts/header.php");?>

<?php if(isset($_SESSION['user_login'])): ?>

    <section id="countries-sec">

        <?php require_once(dirname(__FILE__) . "/../logic/pc_all.php");?>

    </section>

<?php else: ?>

    <?php require_once(dirname(__FILE__) . "/../layouts/not_auth.php");?>

<?php endif; ?>

</body>
</html>
