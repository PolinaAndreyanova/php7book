<?php
function Template($__fname, $vars)
{
    ob_start();
    extract($vars, EXTR_OVERWRITE);
    include($__fname);
    $text = ob_get_contents();
    ob_end_clean();
    return $text;
}