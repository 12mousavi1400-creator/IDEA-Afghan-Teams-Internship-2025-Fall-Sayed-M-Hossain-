<?php
$num1 = 0;
$num2 = 0;
$sign = '';

function calculate($num1, $sign, $num2)
{
    switch ($sign) {
        case '+':
            $result = $num1 + $num2;
            echo "Result: $result";
            break;
        case '-':
            $result = $num1 - $num2;
            echo "Result: $result";
            break;

        case '*':
            $result = $num1 * $num2;
            echo "Result: $result";
            break;

        case '/':
            $result = $num1 / $num2;
            echo "Result: $result";
            break;

        case '%':
            $result = $num1 % $num2;
            echo "Result: $result";
            break;
    } 
}
calculate(12, '%', 2);
?>
