<?php

require_once "Observer.php";
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.07.2018
 * Time: 0:24
 */
class priceSimulator implements Observer
{
    private $currencies;

    public function __construct()
    {
        $this->currencies = array();
    }
    public function addCurrency(Currency $currency)
    {
        array_push($this->currencies, $currency);
    }
    public function updatePrice()
    {
        foreach ($this->currencies as $currency){
            $currency->update();
        }
    }
}