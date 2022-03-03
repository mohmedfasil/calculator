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
if (is_numeric($_POST["fnum"])==true && is_numeric($_POST["snum"])==true)
{
    if (isset($_POST["Addition"]))
    {            
        $add=new Calculator;
        $add->Addition($_POST["fnum"],$_POST["snum"]);
    }
    elseif (isset($_POST["Substraction"]))
    {
        $sub=new Calculator;
        $sub->Substraction($_POST["fnum"],$_POST["snum"]); 
    }
    elseif (isset($_POST["Multiplication"]))
    {
        $add=new Calculator;
        $add->Multiplication($_POST["fnum"],$_POST["snum"]);
    }
    elseif (isset($_POST["Division"]))
    {
        $add=new Calculator;
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