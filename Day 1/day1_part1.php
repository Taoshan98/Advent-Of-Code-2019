<?php

$fileInputRows = file('input.txt');

$finalResult = 0;
foreach ($fileInputRows as $inputRow) {
    $finalResult += floor($inputRow / 3) - 2;
}
echo "Result Step 1: " . $finalResult . "<br>";
