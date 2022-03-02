<html>
    <head>
        <title>Result Page</title>
    </head>
    <body>

    <?php

    class Calculator
    {
        public $num1;
        public $num2;
    }   

    class Additions extends Calculator
    {
        function Addition($num1,$num2)
        {
            
            $sum=$num1+$num2;
            echo "<br>";
            echo "<b>The Result of addition is $sum</b>";
        }
    }

    class Substractions extends Calculator
    {
        function Substraction($num1,$num2)
        {
            echo "<br>";
            $sum=$num1-$num2;
            echo "<b>The Result of substraction is $sum</b>";
        }
    }
            
    class Multiplications extends Calculator
    {
        function Multiplication($num1,$num2)
        {
            echo "<br>";
            $sum=$num1*$num2;
            echo "<b>The Result of multiplication is $sum</b>";
        }
    }

    class Divisions extends Calculator
    {
        function Division($num1,$num2)
        {
            echo "<br>";
            $sum=$num1/$num2;
            echo "<b>The Result of division is $sum</b>";
        }
    }

    echo "The first number is:".$_POST["fnum"]."<br>";
    echo "The second number is:".$_POST["snum"];
    if (is_numeric($_POST["fnum"])==true && is_numeric($_POST["snum"])==true)
    {
        if (isset($_POST["Addition"]))
        {
            
            $add=new Additions;
            $add->Addition($_POST["fnum"],$_POST["snum"]);
            
        }
        elseif (isset($_POST["Substraction"]))
        {
            $sub=new Substractions;
            $sub->Substraction($_POST["fnum"],$_POST["snum"]); 
        }
        elseif (isset($_POST["Multiplication"]))
        {
            $add=new Multiplications;
            $add->Multiplication($_POST["fnum"],$_POST["snum"]);
        }
        elseif (isset($_POST["Division"]))
        {
            $add=new Divisions;
            $add->Division($_POST["fnum"],$_POST["snum"]);
        }
    }
    else
    {
        echo "<br>";
        echo "Please enter numeric values only on both fields";
    }
 


    

    ?>
    </body>
</html>