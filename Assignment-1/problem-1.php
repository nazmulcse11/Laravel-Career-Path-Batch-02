<?php
// Problem 1:
// Given a list of integers, find the minimum of their absolute values.
// Note:
// 'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123.

// Sample input 1:
// 10 12 15 189 22 2 34
// Sample output 1:
// 2

// Sample input 2:
// 10 -12 34 12 -3 123
// Sample output 2:
// 3


function findMinAbsoluteValue($arr) {
    $min = PHP_INT_MAX;
    foreach ($arr as $num) {
        $abs = abs($num);
        if ($abs < $min) {
            $min = $abs;
        }
    }
    return $min;
}

// Sample input 1
$input1 = [10, 12, 15, 189, 22, 2, 34];
$output1 = findMinAbsoluteValue($input1);
echo "Sample input 1: " . "\n";
echo implode(" ", $input1) . "\n";
echo "Sample output 1:\n";
echo $output1 . "\n\n";

// Sample input 2
$input2 = [10, -12, 34, 12, -3, 123];
$output2 = findMinAbsoluteValue($input2);
echo "Sample input 2: " . "\n";
echo implode(" ", $input2) ."\n";
echo "Sample output 2: \n";
echo $output2;

?>
