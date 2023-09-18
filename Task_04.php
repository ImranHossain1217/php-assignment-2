<?php
//Task 4: Fibonacci Series printing using a Function
function fibonacci($limit)
{
    $num1 = 0;
    $num2 = 1;
    $num3 = 0;
    for ($i = 0; $i < $limit; $i++) {
        echo "{$num1}";
        $num1 = $num1 + $num2;
        $num2 = $num3;
        $num3 = $num1;
    }
}
fibonacci(15);
?>