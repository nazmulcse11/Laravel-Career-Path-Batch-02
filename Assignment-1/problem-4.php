<?php

//Problem 4:
//Print the following pattern based on the given number n (can be any number).
//Sample input: 5
//Sample output:
//       *
//      ***
//     *****
//    *******
//   *********

function printPyramidPattern($number){
    for ($i = 0; $i < $number; $i++) {
        for ($j = $number-$i; $j >1; $j--) {
            echo " ";
        }

        for($k = 0; $k < 2*$i+1; $k++){
            echo "*";
        }
        echo "\n";
    }
}

$number = 5;

echo "Sample input: $number \n";
echo "Sample output: \n";
printPyramidPattern($number);

?>