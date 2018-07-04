<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.07.2018
 * Time: 21:11
 */
class ArrayPop implements ArrayFunction
{
    public function sort(array $array)
    {
        return 'Function array_pop of '. $array . ' = ' . array_pop($array);
    }
}