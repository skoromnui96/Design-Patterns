<?php
include "UACarI.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12.07.2018
 * Time: 23:49
 */
class Zaz implements UACarI
{
    public function printRoad()
    {
        return "Left hand";
    }
    public function printPresident()
    {
        return "Poroshenko";
    }


}