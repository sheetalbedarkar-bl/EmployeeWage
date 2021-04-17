<?php
    $empCheck = (rand(0, 2));
    $empRatePerHr = 20;

    switch ($empCheck) {
        case 1:
            $empHrs = 8;
            break;
        case 2:
            $empHrs = 4;
            break;
        default:
            $empHrs = 0;
    }
    $salary = $empRatePerHr * $empHrs;
    echo $salary;
?>