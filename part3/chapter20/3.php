<?php
preg_match('/(\S+)@([a-z0-9.]+)/is', "Привет от somebody@mail.ru!", $arM);
echo "В тексте найдено: ящик - $arM[1], хост - $arM[2]";