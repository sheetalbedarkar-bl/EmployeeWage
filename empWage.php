<?php
    $empRatePerHr = 20;
    $numWorkingDays=20;
    $maxHrsInMonth=50;
    $totalWorkingDays=0;
    $totalEmpHrs=0;

    function getWorkingHrs($empCheck) {
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
        return $empHrs;
    }
    while ($totalEmpHrs < $maxHrsInMonth and $totalWorkingDays < $numWorkingDays) {
        $totalWorkingDays++;
        $workHrs = getWorkingHrs(rand(0, 2));
        $totalEmpHrs = $totalEmpHrs + $workHrs;
    }
    $totalSalary = $totalEmpHrs * $empRatePerHr;
    echo "Total Salary is : $totalSalary";
?>