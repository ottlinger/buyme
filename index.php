<!DOCTYPE HTML>
<html lang="de">
<?php
require 'vendor/autoload.php';

use buyme\HostnamePrinter;

$hostnamePrinter = new HostnamePrinter();
?>
<meta charset="utf-8">
<head>
    <title><?php echo $hostnamePrinter->hostname(); ?> &mdash; powered by BuyMe</title>
</head>
<body>
<h1>The domain <i><?php echo $hostnamePrinter->hostname(); ?></i> is for sale :-)</h1>
<h1>Die Domain <i><?php echo $hostnamePrinter->hostname(); ?></i> steht zum Verkauf</h1>
<img src="https://picsum.photos/200/300.webp" alt="Just a picture">
<h2>Get in touch with us / bitte kontaktieren Sie uns</h2>
<p>via <?php echo $hostnamePrinter->mailLink('E-Mail') ?></p>
<hr/>
<?php
echo '<pre>Delivered at ' . $hostnamePrinter->time() . ' &mdash; Page powered by <a href="https://github.com/ottlinger/buyme" target="_blank">ProjectBM</a></pre>';
?>
</body>
</html>
