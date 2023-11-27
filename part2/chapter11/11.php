<?php
declare(strict_types = 1);
function Sum(int $fst, int $snd) : int {
    return $fst + $snd;
}

echo Sum(2, 2);
echo "<br>";
echo Sum(2.5, 2.5);