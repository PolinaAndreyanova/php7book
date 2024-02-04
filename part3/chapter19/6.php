<?php
function local2gm($localStamp = false) {
    if ($localStamp === false) {
        $localStamp = time();
    }
    $tzOffset = date("Z", $localStamp);
    return $localStamp - $tzOffset;
}

function gm2local($gmStamp = false, $tzOffset = false) {
    if ($gmStamp === false) {
        return time();
    }
    if ($tzOffset === false) {
        $tzOffset = date("Z", $gmStamp);
    }
    else {
        $tzOffset *= 60 * 60;
    }
    return $gmStamp + $tzOffset;
}