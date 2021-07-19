<?php

namespace models;


class main extends model
{
    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        $this->data = require_once(dirname(__FILE__) . "/db.php");
    }
}