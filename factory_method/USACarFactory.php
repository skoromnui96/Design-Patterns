<?php
require_once "USASedanFactory.php";
require_once "USASuvFactory.php";
require_once "CarFactoryInterface.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.07.2018
 * Time: 22:49
 */
class USACarFactory implements CarFactoryInterface
{
    public function buildCar($type)
    {
        $car = null;

        switch ($type) {
            case 'suv':
                $car = new USASuvFactory();
                break;
            case 'sedan':
                $car = new USASedanFactory();
                break;
            default:
                $car = new USASedanFactory();
                break;
        }

        return $car;
    }
}