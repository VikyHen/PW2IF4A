<?php
$a = 1;
$b = 2; 

do {
    $c = $a + $b; 
    if ($c > 100) { 
        break;
    }
    echo $c . " "; 
    $a = $b; 
    $b = $c;
} while (true); 
?>