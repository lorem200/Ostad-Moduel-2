<?php
function printFibonacci($count) {
    $first = 0;
    $second = 1;

    echo "The first $count Fibonacci numbers are: ";

    for ($i = 1; $i <= $count; $i++) { 
        echo $first . ' ';
        $next = $first + $second;
  
        $first = $second;
        $second = $next;
    }

    echo "\n";
}
printFibonacci(15);
?>
