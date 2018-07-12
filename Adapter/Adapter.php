<?php
include_once "UACarI.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12.07.2018
 * Time: 23:51
 */
class Adapter implements UKCarI
{
    private $adapter;
    public function __construct(UACarI $adapter)
    {
        $this->adapter = $adapter;
    }

    public function side()
    {
        return $this->adapter->printRoad();
    }

    public function queen()
    {
        return $this->adapter->printPresident();
    }
}