<?php
require 'vendor/autoload.php';

use buyme\HostnamePrinter;

$hostnamePrinter = new HostnamePrinter();

echo "<!DOCTYPE HTML>\n<html>";
echo "Time: " . $hostnamePrinter->time();

echo '<br/>Servername: ' . $hostnamePrinter->hostname();
echo '<br/>Contact: ' . $hostnamePrinter->maillink();
?>
<head>
    <title><?php echo $hostnamePrinter->hostname(); ?> &mdash; powered by BuyMe</title>
</head>
<body>
<h1>The domain <i><?php echo $hostnamePrinter->hostname(); ?></i> is for sale</h1>
<h1>Diese Domain <?php echo $hostnamePrinter->hostname(); ?> steht zum Verkauf</h1>
</body>
</html>
