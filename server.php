<?php

require __DIR__."/vendor/autoload.php";
use EasyWeChat\factory;

$config = [
    "app_id" => "wx70bef9dff4f69b7f",
    "secret" => "9c1bfa5f9838391f5c683897abfd5f54"
    ];
$app = Factory::officialAccount($config);
$app->server->push(
    function($message){
        return "hello world";
    }
);
$response = $app->server->serve();
$response->send();
