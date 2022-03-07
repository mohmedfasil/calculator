<html>
<head>
    <title>Result Page</title>
    <style>
        body {text-align: center;  margin-top: 100px ; margin-bottom: 500px; margin-right: 400px; 
            margin-left: 400px; border-style: inset; border-width: 10px;}
        u{}   
    </style>
</head>
<body>

<?php

require_once "calculator.php";

$calculator=new Calculator;

$a=$_POST["num1"];
$b=$_POST["num2"];
$operation=$_POST["operation"];

echo "<br>The first number is:".$a;
echo "<br>The second number is:".$b;

$fresult=$calculator->calculate($a,$b,$operation);
echo "<br><br><b>The Result of ".$operation." is <u>". $fresult. "</u></b>";

?>


</body>
</html>

