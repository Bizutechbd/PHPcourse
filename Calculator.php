<?php
/**
 * Created by PhpStorm.
 * User: ADN
 * Date: 2/23/2019
 * Time: 8:38 PM
 */

class Calculator
{

    function __construct($a, $b, $operend)
    {
        if ($operend == '+') {

         echo   $this->add($a, $b);

        } elseif ($operend == '-') {
         echo   $this->sub($a, $b);

        } elseif ($operend == '*') {
         echo   $this->multi($a, $b);

        } elseif ($operend == '/') {

          echo  $this->div($a, $b);
        }
    }


    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;

    }

    public function multi($a, $b)
    {
        return $a * $b;

    }

    public function div($a, $b)
    {
        return $a / $b;

    }

}