<?php
declare(strict_types=1);

namespace App\Controllers;

use Sdk\Http\Request;
use Sdk\Http\Response;

final readonly class Canary
{
    public static function render(Request $request, Response $response, array $args): Response
    {
        $pgpKey = file_get_contents(__DIR__ . '/../Files/warrantCanary.txt');

        $response->createView('WarrantCanary.php')
            ?->setProperty('warrantCanary', $pgpKey)

        return $response;
    }
}