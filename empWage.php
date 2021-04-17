<?php
    $empRatePerHr = 20;
    $numWorkingDays=20;
    $totalSalary=0;

    for ($day = 1; $day <= 20; $day++) {
        $empCheck = (rand(0, 2));
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
    $totalSalary = $totalSalary + $salary;
    }
    echo "Total Salary is : $totalSalary";
?>