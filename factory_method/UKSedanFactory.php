<?php
require_once "SuvCarInterface.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.07.2018
 * Time: 22:53
 */
class UKSedanFactory implements SuvCarInterface
{
    private $location;
    private $type;
    /**
     * UKSedanFactory constructor.
     */
    public function __construct()
    {
        $this->location = 'UK';
        $this->type = 'sedan';
    }

    public function getLocation()
    {
        echo $this->location;
        echo "<br />";
    }

    public function getType()
    {
        echo $this->type;
        echo "<br />";
    }
}