<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Config;
use Sdk\App;

$config = new Config;
$app = new App($config);

$app->view('/', 'Home.html');
$app->view('/contact', 'Contact.html');
$app->view('/services', 'Services.html');

$app->get('/pgp', 'Pgp::render');
$app->get('/pgp/raw', 'Pgp::renderRaw');

$app->run();
