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
$Calculator=new Calculator;

$a=$_POST["num1"];
$b=$_POST["num2"];

echo "<br>The first number is:".$a."<br>";
echo "The second number is:".$b;

if (isset($_POST["Addition"])==1)
{
    $operation=$_POST["Addition"];
}
if (isset($_POST["Substraction"])==1)
{
    $operation=$_POST["Substraction"];
}
if (isset($_POST["Multiplication"])==1)
{
    $operation=$_POST["Multiplication"];
}
if (isset($_POST["Division"])==1)
{
    $operation=$_POST["Division"];
}



switch ($operation)
{
    case "ADD":
        $result=$Calculator->Addition($a,$b);
        echo "<br><br><b>The Result of addition is <u> $result </u></b>";   
        break;
    case "SUB":
        $result=$Calculator->Substraction($a,$b);
        echo "<br><br><b>The Result of Substraction is <u> $result </u></b>";
        break;
    case "MUL":
        $result=$Calculator->Multiplication($a,$b);
        echo "<br><br><b>The Result of Multiplication is <u> $result </u></b>";
        break;
    case "DIV":
        $result=$Calculator->Division($a,$b);
        echo "<br><br><b>The Result of Division is <u> $result </u></b>";
        break; 
}

?>
</body>
</html>