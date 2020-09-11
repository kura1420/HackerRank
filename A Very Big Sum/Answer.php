<?php

// Sample Input
// 5
// 1000000001 1000000002 1000000003 1000000004 1000000005

// Out Put
// 5000000015

// Complete the aVeryBigSum function below.
function aVeryBigSum($ar) {
    return array_sum($ar);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
