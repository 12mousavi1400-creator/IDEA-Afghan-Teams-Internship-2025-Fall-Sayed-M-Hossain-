<?php
$num1 = 0;
$num2 = 0;
$sign = '';

function factorial($n)
{
    if ($n < 0) {
        return "Error: Factorial of negative number!";
    }
    if ($n == 0) return 1;

    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function calculate($num1, $sign, $num2 = null)
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

        case '^':
            $result = pow($num1 , $num2);
            echo "Result: $result";
            break;

        case 'percent_of':
            $result = ($num1 * $num2) / 100;
            echo "Result: $result";
            break;

        case '!':
            echo "Result:". factorial($num1);
    } 
}
calculate(4, '!');
?>
