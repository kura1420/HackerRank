<?php

// Sample Input
// 6 

//Sample Output
//      #
//     ##
//    ###
//   ####
//  #####
// ######

function staircase($n) {
    for ($i=1; $i<=$n; $i++) {
        for ($j=($n -1); $j>=$i; $j--){
            echo " ";
        }
        
        for ($k=1; $k<=$i; $k++) {
            echo "#";
        }
        echo "\n";
    }
}

$n = 6;

staircase($n);
