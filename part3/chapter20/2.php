<?php
preg_match('/(\d+)/s', "article_123.html", $arMatches);
echo $arMatches[1];