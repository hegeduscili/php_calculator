<?php

include 'index.php';

class CalculatorB extends Calculator{

    //B RESZ
 function negyzet($number){
    $this->actual = $number ** 2;
 }

 function negyzetgyok($number){
    $this->actual = sqrt($number);
 }

}

$calculator = new CalculatorB;


print($calculator->negyzet(3));
print($calculator->allapot());
print($calculator->negyzetgyok(4));
print($calculator->allapot());