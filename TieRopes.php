<?php
/*100% solution*/
function solution($K, $A) {
    // write your code in PHP7.0
    $count = count($A);
    if($K>array_sum($A)){
        return 0;
    }
    $i=0;
    $ans=0;
    $length=0;
    while($i<$count) {
        $length+=$A[$i];
        if($length >= $K) {
            $ans++;
            $length=0;
        }
        $i++;
    }
    return $ans;
    
}
