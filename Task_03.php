<?php

// Task 3: Break on Condition
function fibonacci($limit)
{
    $num1 = 0;
    $num2 = 1;
    $num3 = 0;
    for ($i = 0; $i < $limit; $i++) {
        echo "$num1";
        $num1 = $num1 + $num2;
        $num2 = $num3;
        $num3 = $num1;
        if ($num1 > 100) {
            break;
        }
    }
}
fibonacci(10);
?>