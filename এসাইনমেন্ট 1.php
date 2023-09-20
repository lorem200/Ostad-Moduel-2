<?php

// For loop 
echo "<h1>Forloop </h1>";
function myFunction(){
    for($x = 2; $x <= 20; $x = $x + 2){
        echo "$x ,";
    }
};
echo myFunction();

//While Loop

echo "<h1> While loop </h1>";
function whileLoop(){
    $x = 2;
while($x <= 20){
    echo "$x ,";
    $x = $x + 2;
}
}
whileLoop();

//Do While loop 

echo "<h1>Do While loop </h1>";
function doWhile(){
    $x = 2;
    do{
        echo "$x ,";
        $x = $x + 2;
    }while($x <= 20);
}
doWhile();
?>