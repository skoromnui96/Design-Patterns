<?php
include_once "UKCarI.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12.07.2018
 * Time: 23:39
 */
class LandRover implements UKCarI
{

    public function side()
    {
        return "Right side";
    }

    public function queen()
    {
        return "Queen Elizabeth";
    }
}