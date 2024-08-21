<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Jiří Lopatář" name="author">
    <meta content="Jiří Lopatář, Jiří, Lopatář" name="keywords">
    <meta content="Jiří Lopatář - computer science student, .NET & PHP developer" name="description">
    <title>Jiří Lopatář</title>
    <link href="/static/css/style.css" rel="stylesheet">
</head>
<body>
<a href="/contact"><- Go back</a>
<h1>PGP public key</h1>
<pre>
    <?= $this->getProperty('pgpKey') ?>
</pre>
<p>Fingerprint: <b><?= $this->getProperty('pgpFingerprint') ?></b></p>
<p><a href="/pgp/raw">Raw format</a></p>
</body>
<footer>
    <a href="https://github.com/lopatar/lopatar.me" target="_blank">Source code</a>
</footer>
</html>