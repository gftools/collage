<?php
require_once 'vendor/autoload.php';







// $a = password_hash('password', PASSWORD_BCRYPT);


// print $a;



$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();
