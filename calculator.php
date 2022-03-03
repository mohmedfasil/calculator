<?php

class Calculator
{
    public $num1;
    public $num2;

    function Addition($num1,$num2)
    {
        $result=$num1+$num2;
        echo "<br><br>";
        return  $result;
    }
        
    function Substraction($num1,$num2)
    {
        echo "<br><br>";
        $result=$num1-$num2;
        return $result;
    }
        
    function Multiplication($num1,$num2)
    {
        echo "<br><br>";
        $result=$num1*$num2;
        return $result;
    }
        
    function Division($num1,$num2)
    {
        echo "<br><br>";
        $result=$num1/$num2;
        return $result;
    }
}

?>