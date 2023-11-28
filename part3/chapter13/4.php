<?php
$str = "Привет, мир!";
echo "В строке &quot;$str&quot; " . strlen($str) . " байт<br>";
echo "В строке &quot;$str&quot; " . mb_strlen($str) . " символов<br>";