<?php

echo "página inicial";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo $url;