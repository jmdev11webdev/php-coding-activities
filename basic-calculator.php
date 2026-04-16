<?php 
$num1 = readline("Enter first number: ");
$operator = readline("Enter Operator; +, -, *, /: ");
$num2 = readline("Enter second number: ");

if ($operator == "+"){
    echo $num1 + $num2;
} elseif ($operator == "-") {
    echo $num1 - $num2;
} elseif ($operator == '*') {
    echo $num1 * $num2;
} elseif ($operator == "/") {
    echo $num1 / $num2;
} else {
    echo "Enter Valid Operator";
}

?>

