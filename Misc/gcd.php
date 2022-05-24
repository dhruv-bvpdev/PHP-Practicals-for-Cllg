<?php

function gcd($a, $b) {
    
    //* Edge Cases
    if ($a == 0)
       return $b;
    if ($b == 0)
       return $a;

    //* Base Case
    if($a == $b)
        return $a ;
     
    if ($a > $b) {
        return gcd( $a-$b , $b );
    }
       
    return gcd( $a , $b-$a );
}

$a = 48 ;
$b = 93 ;
 
echo "GCD of $a and $b is ", gcd($a , $b) ;

?>