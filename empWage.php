<?php
    $empCheck = (rand(0, 1));
    if ($empCheck == 1) {
        $empRatePerHr = 20;
        $empHrs = 8;
        $salary = $empRatePerHr * $empHrs;
        echo $salary;
    }
    else {
        $salary = 0;
        echo $salary;
    }
?>