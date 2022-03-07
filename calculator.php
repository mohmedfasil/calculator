<?php

class Calculator
{
    public $num1,$num2,$operation;

    public function Addition($num1,$num2)
    {
        $result=$num1+$num2;
        return $result;
    }
        
    public function Substraction($num1,$num2)
    {
        $result=$num1-$num2;
        return $result;
    }
        
    public function Multiplication($num1,$num2)
    {
        $result=$num1*$num2;
        return $result;
    }
        
    public function Division($num1,$num2)
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
    
    public function calculate($num1,$num2,$operation)
    {
        switch ($operation)
        {
            case "Addition":                   
                $result1=$this->Addition($num1,$num2);
                return $result1;
                break;
            case "Substraction":
                $result1=$this->Substraction($num1,$num2);
                return $result1;
                break;
            case "Multiplication":
                $result1=$this->Multiplication($num1,$num2);
                return $result1;
                break;
            case "Division":
                $result1=$this->Division($num1,$num2);
                return $result1;
                break; 
        }
    }
    
} 
/*switch ($this->operation)
{
    case "Addition":   
        $result=Addition($this->num1,$this->num2);
        return $this->$result;  
        break;*/

?>