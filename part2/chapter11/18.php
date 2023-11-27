<?php
function Father($a) { 
    echo $a, "<br>";

    function Child($b) { 
        echo $b + 1, "<br>";
        return $b * $b;
    }

    return $a * $a * Child($a); 
}

Father(10);
Child(30);