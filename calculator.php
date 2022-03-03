<html>
    <head>
        <title>Calculator Page</title>    
    </head>
    <body>

    <?php

    class Calculator
    {
        public $num1;
        public $num2;
    
        function Addition($num1,$num2)
        {
        
            $sum=$num1+$num2;
            echo "<br><br>";
            echo "<b>The Result of addition is $sum</b>";
        }
        
        function Substraction($num1,$num2)
        {
            echo "<br>";
            $sum=$num1-$num2;
            echo "<b>The Result of substraction is $sum</b>";
        }
            
        function Multiplication($num1,$num2)
        {
            echo "<br>";
            $sum=$num1*$num2;
            echo "<b>The Result of multiplication is $sum</b>";
        }
        
        function Division($num1,$num2)
        {
            echo "<br>";
            $sum=$num1/$num2;
            echo "<b>The Result of division is $sum</b>";
        }
    }
    ?>
    </body>
</html>