<?php
function MyEcho(...$planets) {  
    foreach ($planets as $v) {
        echo "$v<br>\n";
    }
}

MyEcho("Меркурий", "Венера", "Земля", "Марс");