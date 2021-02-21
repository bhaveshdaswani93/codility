<?php
/* 100% solution */
function solution($A, $B) {
    // write your code in PHP7.0
    $count = count($A);
    if($count <=1) {
        return $count;
    }
    
    $answer = 1;
    $currentEnd = $B[0];
    for($i=1;$i<$count;$i++) {
        if($A[$i] > $currentEnd) {
            $answer++;
            $currentEnd = $B[$i];
        }
    }
    return $answer;
}
