<?php
$perms = fileperms("file.txt");
echo decoct($perms) . "<br>";
echo decbin($perms);