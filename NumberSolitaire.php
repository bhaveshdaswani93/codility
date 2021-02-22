<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
    $dp = [];
    $dp[0] = $A[0];
    $count = count($A);
   
    for($i=1;$i<$count;$i++) {
         $max = -INF;
        for($j=1;$j<=6;$j++){
            if($i-$j>=0){
                 $max = max( $dp[$i-$j]+$A[$i], $max );
            }
        }
        $dp[$i] = $max;
    }
    return $dp[$count - 1];
}
