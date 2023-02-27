<?php
    $year = 2420; 
    $isLeapYear = false; 

    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                $isLeapYear = true;
            }
        } else {
            $isLeapYear = true;
        }
    }

    if ($isLeapYear) {
        echo "Tahun kabisat";
    } else {
        echo "Bukan tahun kabisat";
    }
?>