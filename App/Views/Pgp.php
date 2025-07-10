<?php
declare(strict_types=1);

/**
 * @var View $this
 */

use Sdk\Render\View;

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jiří Lopatář">
    <meta name="keywords" content="Jiří Lopatář, Jiří, Lopatář">
    <meta name="description" content="Jiří Lopatář - computer science student, .NET & PHP developer">
    <title>PGP Key – Jiří Lopatář</title>
    <link href="/static/css/style.css" rel="stylesheet">
</head>
<body>
<a href="/contact" aria-label="Go back">&larr; Go back</a>
<main>
    <h1>PGP public key</h1>
    <pre style="text-align: center">
        <?= $this->getProperty('pgpKey') ?>
    </pre>
    <p>
        Fingerprint:
        <b> <?= $this->getProperty('pgpFingerprint') ?></b>
    </p>
    <p><a href="/pgp/raw">Raw format</a></p>
</main>

<footer>
    <a href="https://github.com/lopatar/lopatar.me" target="_blank">Source code</a>
</footer>
</body>
</html>
