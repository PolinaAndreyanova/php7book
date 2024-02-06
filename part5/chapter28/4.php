<?php
$date = new DateTime("now", new DateTimeZone("Europe/Moscow"));
echo $date -> format("d-m-Y H:i:s");