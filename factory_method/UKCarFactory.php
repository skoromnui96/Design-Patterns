<?php
require_once "UKSuvFactory.php";
require_once "UKSedanFactory.php";
require_once "CarFactoryInterface.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.07.2018
 * Time: 22:49
 */
class UKCarFactory implements CarFactoryInterface
{
    public function buildCar($type)
    {
        $car = null;

        switch ($type) {
            case 'suv':
                $car = new UKSuvFactory();
                break;
            case 'sedan':
                $car = new UKSedanFactory();
                break;
            default:
                $car = new UKSedanFactory();
                break;
        }

        return $car;
    }
}