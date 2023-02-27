<?php
    $berat = 45; 
    $tinggi = 1.6;
    $bmi = $berat / ($tinggi * $tinggi); 

    if ($bmi < 18.5) {
        echo "Berat badan kurang";
    } else if ($bmi >= 18.5 && $bmi <= 24.9) {
        echo "Berat badan normal";
    } else if ($bmi >= 25 && $bmi <= 29.9) {
        echo "Berat badan berlebih";
    } else {
        echo "Obesitas";
    }
?>