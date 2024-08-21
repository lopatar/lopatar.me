<?php
declare(strict_types=1);

namespace App\Controllers;

use Sdk\Http\Request;
use Sdk\Http\Response;

final readonly class Pgp
{
	public static function render(Request $request, Response $response, array $args): Response
	{
		$pgpKey = file_get_contents(__DIR__ . '/../Files/pgpKey.asc');
		$pgpFingerprint = '2652 1FA5 F07D BDAC 56EF 8EF1 DC8D A68F 5A5D 9B0C';

		$response->createView('Pgp.php')
			?->setProperty('pgpKey', $pgpKey)
			->setProperty('pgpFingerprint', $pgpFingerprint);

		return $response;
	}

    public static function renderRaw(Request $request, Response $response, array $args): Response
    {
        return $response->write(
            file_get_contents(__DIR__ . '/../Files/pgpKey.asc'));
    }
}