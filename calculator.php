<?php

class Calculator
{
    public $num1,$num2;

    function Addition($num1,$num2)
    {
        $result=$num1+$num2;
        return  $result;
    }
        
    function Substraction($num1,$num2)
    {
        $result=$num1-$num2;
        return $result;
    }
        
    function Multiplication($num1,$num2)
    {
        $result=$num1*$num2;
        return $result;
    }
        
    function Division($num1,$num2)
    {
        if($num2!=0)
        {
            $result=$num1/$num2;
            return $result;
        }
        else
        {
            $result="Infinite (division by zero)";
            return $result;
        }        
    }
}

?>