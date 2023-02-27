<?php
$bilangan = 23; 

$prima = true;

if ($bilangan < 2) { 
    $prima = false;
} 
else {
    for ($i = 2; $i <= sqrt($bilangan); $i++) { 
        if ($bilangan % $i == 0) { 
            $prima = false; 
            break; 
        }
    }
}

if ($prima) {
    echo "Bilangan prima";
} else {
    echo "Bukan bilangan prima";
}
?>