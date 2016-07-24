<?php
/**
 * Created by PhpStorm.
 * User: bienko
 * Date: 24.07.16
 * Time: 18:43
 */
namespace App\Libraries;


class Calculator
{
    public function add($x, $y)
    {
        if(!is_numeric($x) || !is_numeric($y))
        {
            throw new \InvalidArgumentException;
        }
        return $x + $y;
    }
}