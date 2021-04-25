<?php
namespace App\router;
interface RouterInterface{
    public function callController(string $name="index", $params=[]);
}