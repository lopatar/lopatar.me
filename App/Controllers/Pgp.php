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
		$pgpFingerprint = '774F B7AF DC6A 9AF8 46BC 6E25 BA04 A815 EB76 BE5F';

		$response->createView('Pgp.php')
			?->setProperty('pgpKey', $pgpKey)
			->setProperty('pgpFingerprint', $pgpFingerprint);

		return $response;
	}
}