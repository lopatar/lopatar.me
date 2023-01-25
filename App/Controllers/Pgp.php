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
		$pgpFingerprint = '6270 65F8 9F4E 3CA5 3F47 3C6A BE18 4AC9 19E2 16CB';

		$response->createView('Pgp.php')
			?->setProperty('pgpKey', $pgpKey)
			->setProperty('pgpFingerprint', $pgpFingerprint);

		return $response;
	}
}