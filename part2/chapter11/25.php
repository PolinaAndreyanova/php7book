<?php
function TakeVal($arA) { 
    $x = $arA[1234]; 
}

function TakeRef(&$arA) { 
    $x = $arA[1234]; 
}

function TakeValAndModif($arA) { 
    $arA[1234]++; 
}

function TakeRefAndModif(&$arA) { 
    $arA[1234]++; 
}

Test("TakeVal");
Test("TakeRef");
Test("TakeValAndModif");
Test("TakeRefAndModif");

function Test($Func) {
    $arA =[];

    for ($i = 1; $i <= 100000; $i++) {
        $arA[$i] = $i;
    }
    
    for ($t = time(); $t == time(); ) {}

    for ($N = 0, $t = time(); time() == $t; $N++) {
        $Func($arA);
    }

    printf("<code>$Func</code> took %d itr/sec<br>", $N);
}
