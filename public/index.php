<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Config;
use App\Middleware\HtmlHeader;
use Sdk\App;

$app = new App(new Config());
$headerMiddleware = new HtmlHeader();

$app->addMiddleware($headerMiddleware);

$app->view('/', 'Home.html');
$app->view('/contact', 'Contact.html');
$app->get('/pgp', 'Pgp::render');

$app->run();
