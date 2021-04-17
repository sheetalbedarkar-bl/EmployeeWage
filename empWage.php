<?php
    $empCheck = (rand(0, 2));
    $empRatePerHr = 20;
    if ($empCheck == 1) {
        $empHrs = 8;
    }
    elseif ($empCheck == 2) {
        $empHrs = 4;
    }
    else {
        $empHrs = 0;
    }
    $salary = $empRatePerHr * $empHrs;
    echo $salary;
?>