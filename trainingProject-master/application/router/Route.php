<?php
namespace App\router;
class Route implements RouterInterface{
    public function callController(string $name="index", $params=[]) {
        echo "call".__CLASS__."here";
    }

    function __construct() {}
}

