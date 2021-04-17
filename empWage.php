<?php
    $empRatePerHr = 20;
    $numWorkingDays=20;
    $maxHrsInMonth=50;
    $totalWorkingDays=0;
    $totalEmpHrs=0;

    while ($totalEmpHrs < $maxHrsInMonth and $totalWorkingDays < $numWorkingDays) {
        $totalWorkingDays++;
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
        $totalEmpHrs = $totalEmpHrs + $empHrs;
    }
    $totalSalary = $totalEmpHrs * $empRatePerHr;
    echo "Total Salary is : $totalSalary";
?>