<?php
    $empRatePerHr = 20;
    $numWorkingDays=5;
    $maxHrsInMonth=20;
    $totalWorkingDays=0;
    $totalEmpHrs=0;
    $workHrs=0;
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

    function calculateDailyWage($workHrs, $empRatePerHr) {
        $wage = $workHrs*$empRatePerHr;
        return $wage;
    }

    while ($totalEmpHrs < $maxHrsInMonth and $totalWorkingDays < $numWorkingDays) {
        $totalWorkingDays++;
        $workHrs = getWorkingHrs(rand(0, 2));
        $totalEmpHrs = $totalEmpHrs + $workHrs;
        $empDailyWage[$totalWorkingDays] = calculateDailyWage($workHrs, $empRatePerHr);
    }
    $totalSalary = $totalEmpHrs * $empRatePerHr;
    echo "Total Salary is : $totalSalary";
    // echo "Array values :  $empDailyWage";
    print_r($empDailyWage)
?>