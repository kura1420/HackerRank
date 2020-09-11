<?php

// Sample Input
// 6
// -4 3 -9 0 4 1  

// Sample Output
// 0.500000
// 0.333333
// 0.166667

function plusMinus($arr) {
    $count = count($arr);
    $plus = 0;
    $minus = 0;
    $zero = 0;
    
    for ($i=0; $i<$count; $i++) {
        if ($arr[$i] > 0) {
            $plus += 1;
        } elseif ($arr[$i] < 0) {
            $minus += 1;
        } else {
            $zero += 1;
        }
    }
    
    echo $plus / $count ."\n";
    echo $minus / $count ."\n";
    echo $zero / $count ."\n";
}

$arr = [-4, 3, -9, 0, 4, 1];

print_r(plusMinus($arr));
