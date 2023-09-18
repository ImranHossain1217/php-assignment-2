<?php
//Task 1: Looping with Increment using a Function

// Using For Loop
function printEvenNumberForLoop($start, $end, $step)
{
  for ($i = $start; $i <= $end; $i += $step) {
    if ($i % 2 == 0) {
      echo "{$i},";
    }
  }
}
printEvenNumberForLoop(1,20,1);

// Using While Loop
function printEvenNumberWhileLoop($start, $end, $step)
{
  $i = $start;
  while ($i <= $end) {
    if ($i % 2 == 0) {
      echo "{$i},";
    }
    $i += $step;
  }
}
printEvenNumberWhileLoop(1,20,1);

// Using Do While Loop
function printEvenNumberDoWhileLoop($start, $end, $step)
{
  $i = $start;
  do {
    if ($i % 2 == 0) {
      echo "{$i},";
    }
    $i += $step;
  } while ($i <= $end);
}
printEvenNumberDoWhileLoop(1, 20, 1);
?>