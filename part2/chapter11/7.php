<?php
function MyEcho() {  
    foreach (func_get_args() as $v) {
        echo "$v<br>\n";
    }
}

MyEcho("Меркурий", "Венера", "Земля", "Марс");