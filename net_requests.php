<?php
function main_handler($event, $context) {
    $url = 'https://cloud.tencent.com';
    echo file_get_contents($url);
    return "hello world";
}
?> 
