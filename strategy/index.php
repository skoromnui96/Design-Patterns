<?php

require_once 'StrategyContext.php';
require_once 'ArrayFunction.php';
require_once 'ArrayPop.php';
require_once 'ArrayRand.php';
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.07.2018
 * Time: 21:09
 */


        $array = ['1','2','3'];
        $strategyPop = new StrategyContext(new ArrayPop());
        $array_item1 =  $strategyPop->executeStrategy($array);

        $strategyRand = new StrategyContext(new ArrayRand());
        $array_item2 =  $strategyRand->executeStrategy($array);

        print_r($array);
        echo '<br />';
        print_r($array_item1);
        echo '<br />';
        print_r($array_item2);

