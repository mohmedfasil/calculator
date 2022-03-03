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

echo "The first number is:".$_POST["fnum"]."<br>";
echo "The second number is:".$_POST["snum"];

$fresult=new Calculator;

if (is_numeric($_POST["fnum"])==true && is_numeric($_POST["snum"])==true)
{
    if (isset($_POST["Addition"]))
    {                
        $a=$fresult->Addition($_POST["fnum"],$_POST["snum"]);
        echo "<b>The Result of addition is $a</b>";
    }
    elseif (isset($_POST["Substraction"]))
    { 
        $b=$fresult->Substraction($_POST["fnum"],$_POST["snum"]);
        echo "<b>The Result of Substraction is $b</b>";
    }
    elseif (isset($_POST["Multiplication"]))
    {   
        $c=$fresult->Multiplication($_POST["fnum"],$_POST["snum"]);
        echo "<b>The Result of Multiplication is $c</b>";
    }
    elseif (isset($_POST["Division"]))
    {
        $d=$fresult->Division($_POST["fnum"],$_POST["snum"]);
        echo "<b>The Result of Division is $d</b>";
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