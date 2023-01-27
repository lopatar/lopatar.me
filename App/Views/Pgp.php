<?php
declare(strict_types=1);
?>
<a href="/contact"><- Go back</a>
<h1>PGP public key</h1>
<pre>
    <?= $this->getProperty('pgpKey') ?>
</pre>
<p>Fingerprint: <b><?= $this->getProperty('pgpFingerprint') ?></b></p>
</body>
<footer>
    <a href="https://github.com/lopatar/lopatar.me" target="_blank">Source code</a>
</footer>
</html>