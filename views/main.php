<?php

namespace views;


class main implements view
{
    public function render($data)
    {

        echo '<!doctype html>';
        echo '<html lang="en">';

        require_once "layouts/head.php";

        require_once "layouts/header.php";

        echo '<body>';

        if(isset($_SESSION['user_login'])){

            require_once "layouts/main.php";

        } else {

            require_once "layouts/not_auth.php";

        }

        echo '</body>';
        echo '</html>';
    }


}
