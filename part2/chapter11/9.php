<?php
function TooManyArgs($fst, $snd, $thd, $fth) {
    echo "Первый параметр: $fst<br>";
    echo "Второй параметр: $snd<br>";
    echo "Третий параметр: $thd<br>";
    echo "Четвертый параметр: $fth<br>";
}

$arPlanets = ["Меркурий", "Венера", "Земля", "Марс"];
TooManyArgs(...$arPlanets);