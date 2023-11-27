<?php
function Dumper($obj) {
    echo 
        "<pre>",
            htmlspecialchars(DumperGet($obj)),
        "</pre>"; 
}

function DumperGet(&$obj, $leftSp = "") { 
    if (is_array($obj)) {
        $type = "Array[".count($obj)."]"; 
    } elseif (is_object($obj)) {
        $type = "Object";
    } elseif (gettype($obj) == "boolean") {
        return $obj ? "true" : "false";
    } else {
        return "\"$obj\"";
    }
    $buf = $type; 
    $leftSp .= "    ";
    for (Reset($obj); list($k, $v) = current($obj); next($obj)) {
        if ($k === "GLOBALS") {
            continue;
        }
        $buf .= "\n$leftSp$k => ".DumperGet($v, $leftSp);
    }
    return $buf;
}