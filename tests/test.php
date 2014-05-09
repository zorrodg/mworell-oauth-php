<?php

require_once __DIR__ . '/../vendor/autoload.php';

use OAuth1\OAuthServer;
use OAuth1\OAuthSession;
use OAuth1\OAuthRequest;
use OAuth1\OAuthStore;

print_r(get_declared_classes());

//$server = new OAuthServer();
//$session = new OAuthSession();
$request = new OAuthRequest();
//$store = new OAuthStore();

?>