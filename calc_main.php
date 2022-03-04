<html>
<head>
    <title>Result Page</title>
    <style>
        body {text-align: center;  margin-top: 100px ; margin-bottom: 100px; margin-right: 400px; 
            margin-left: 400px; border-style: inset; border-width: 10px;}
        
    </style>
</head>
<body>

<?php

require_once "calculator.php";
$Calculator=new Calculator;

$a=$_POST["num1"];
$b=$_POST["num2"];

echo "The first number is:".$a."<br>";
echo "The second number is:".$b;

switch (1)
{
    case isset($_POST["Addition"]):
        $result=$Calculator->Addition($a,$b);
        echo "<br><br><b>The Result of addition is <u> $result </u></b>";
        break;
    case isset($_POST["Substraction"]):
        $result=$Calculator->Substraction($a,$b);
        echo "<br><br><b>The Result of Substraction is <u> $result </u></b>";
        break;
    case isset($_POST["Multiplication"]):
        $result=$Calculator->Multiplication($a,$b);
        echo "<br><br><b>The Result of Multiplication is <u> $result </u></b>";
        break;
    case isset($_POST["Division"]):
        $result=$Calculator->Division($a,$b);
        echo "<br><br><b>The Result of Division is <u> $result </u></b>";
        break;
    default:
        echo "Invalid";
 
}

?>
</body>
</html>