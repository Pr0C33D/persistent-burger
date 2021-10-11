<?php
// https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec

function persistence(int $num): int
{
    $num = (int)$num;
    $total = 1;
    
    $numArray = str_split($num);
    if (true===$numArray) {
        return 0;
    }
    $numArrayCount = count($numArray);
    $count = 0;
  
    if ($numArrayCount > 1) {
        for ($i = 0; $i < $numArrayCount; $i++) {
            $total *= $numArray[$i];
        }
        $count++;
        if (strlen($total) > 1) {
            return $count + persistence($total);
        }
        return $count;
    }
    return $count;
}
?>