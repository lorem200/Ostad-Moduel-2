<?php
for ($i = 1; $i <= 50; $i++) {
    // Check if $i is a multiple of 5
    if ($i % 5 == 0) {     
        continue;
    }   
    echo $i . ' ';
}

?>
