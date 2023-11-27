<?php
if (!function_exists("virtual")) { 
    echo "virtual";
    
    function virtual($uri){
        $url = "http://".$_SERVER["HTTP_HOST"].$uri;
        echo file_get_contents($url);
    }
}

virtual("/");