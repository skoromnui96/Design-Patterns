<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.07.2018
 * Time: 21:10
 */
class StrategyContext
{
    private $arrayFunctionRealization;

    public function __construct(ArrayFunction $arrayFunctionRealization)
    {
        $this->arrayFunctionRealization = $arrayFunctionRealization;
    }

    public function executeStrategy(array $elements)
    {
        return $this->arrayFunctionRealization->sort($elements);
    }

}