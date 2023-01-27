<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Config;
use App\Middleware\HtmlHeader;
use Sdk\App;

$config = new Config;
$app = new App($config);
$headerMiddleware = new HtmlHeader;

$app->addMiddleware($headerMiddleware);

$app->view('/', 'Home.html');
$app->view('/contact', 'Contact.html');
$app->view('/services', 'Services.html');

$app->get('/canary', 'Canary::render');
$app->get('/pgp', 'Pgp::render');

$app->run();
