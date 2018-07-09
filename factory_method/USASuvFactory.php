<?php
require_once "SuvCarInterface.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.07.2018
 * Time: 22:52
 */
class USASuvFactory implements SuvCarInterface
{
    private $location;
    private $type;
    /**
     * UKSedanFactory constructor.
     */
    public function __construct()
    {
        $this->location = 'USA';
        $this->type = 'suv';
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