<?php

//Problem 5:
//Given an integer n, find the sum of the digits of the integer.
//
//Sample input 1:
//62343
//Sample output 1:
//18
//
//Sample input 2:
//1000
//Sample output 2:
//1


function sumDigits($input)
{
    $digitString = (string)$input;

    $sum = 0;
    for ($i = 0; $i < strlen($digitString); $i++) {
        $sum += (int)$digitString[$i];
    }
    return $sum;
}


$input1 = 12345;
echo "Sample input: 1 \n";
echo $input1 . "\n";
echo sumDigits($input1) . "\n\n";

$input2 = 10000;
echo "Sample input: 2 \n";
echo $input2 . "\n";
echo sumDigits($input2);
?>