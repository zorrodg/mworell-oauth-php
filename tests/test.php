<?php

require_once __DIR__ . '/../vendor/autoload.php';

use OAuth1\OAuthServer;

print_r(get_declared_classes());

$test = new OAuthServer();
?>