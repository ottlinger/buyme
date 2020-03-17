<!DOCTYPE HTML>
<html>
<head>
    <title>BuyMe dynamic</title>
</head>
<body>
<h1>This domain is for sale</h1>
<h1>Diese Domain steht zum Verkauf</h1>
<?php
require 'vendor/autoload.php';

use buyme\HostnamePrinter;

$hostnamePrinter = new HostnamePrinter();

echo "Time: " . $hostnamePrinter->time();

echo '<br/>Servername: ' . $hostnamePrinter->hostname();
echo '<br/>Contact: ' . $hostnamePrinter->maillink();
?>
</body>
</html>
