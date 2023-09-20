<?php
$num1 = 0;
$num2 = 1;

echo "The first 10 Fibonacci numbers are: ";

for ($i = 1; $i <= 10; $i++) {

    $next = $num1 + $num2; 
    echo $next . ' ';    
    if ($next > 100) {
        break;
    }
    $num1 = $num2;
    $num2 = $next;
}
?>
