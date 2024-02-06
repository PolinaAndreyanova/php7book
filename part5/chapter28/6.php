<?php
$nowDate = new DateTime();
$date = $nowDate -> sub(new DateInterval("P3Y1M14DT12H19M2S"));
echo $date -> format("Y-m-d H:i:s");