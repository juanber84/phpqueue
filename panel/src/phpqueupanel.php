<?php

$file = "config.json";
$json = json_decode(file_get_contents($file));
echo "<pre>";
var_dump($json->ip);
exec('php -S localhost:8000 -t /Users/juanber/Desktop/WORKSPACE/phpqueue/panel/')
