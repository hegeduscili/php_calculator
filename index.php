<?php

class Calculator{

    public $actual = 0;

    // Ez a metódus hozzáadja a paraméterként kapott számot az aktuális eredményhez.
    function osszead($number){

        $this->actual += $number;
    }

    // Ez a metódus kivonja a paraméterként kapott számot az aktuális eredményből. 
   function kivon($number){

    $this->actual -= $number;


    }
    // Ez a metódus megszorozza az aktuális eredményt a paraméterként kapott számmal.
    function szoroz($number){

        $this->actual *= $number;


    }
    // Ez a metódus elosztja az aktuális eredményt a paraméterként kapott számmal.
    function oszt($number){
        $this->actual /= $number;

    }
    // Ez a metódus kiírja az aktuális eredményt.
    function allapot(){
        print  $this->actual . "<br>";
    }

   
}

$calculator = new Calculator;

print_r($calculator->osszead(2));
print($calculator->allapot());
print_r($calculator->osszead(3));
print($calculator->allapot());
print_r($calculator->kivon(3));
print($calculator->allapot());
print($calculator->kivon(5));
print($calculator->allapot());
print_r($calculator->osszead(11));
print($calculator->allapot());
print_r($calculator->szoroz(2));
print($calculator->allapot());
print_r($calculator->oszt(2));
print($calculator->allapot());

