<?php

$fileInputRows = file('input.txt');

$totalArray = array();
$arraySumTotal = array();
$finalResult = 0;

foreach ($fileInputRows as $inputRow) {

    $finalResult = $inputRow;

    while ($finalResult >= 0) {
        $finalResult = floor($finalResult / 3) - 2;
        if ($finalResult > 0) {
            $totalArray[] = $finalResult;
        }
    }

    $arraySumTotal[] = array_sum($totalArray);
    $finalResult = 0;
    unset($totalArray);
}

echo "Result Step 2: " . array_sum($arraySumTotal) . "<br>";