<!DOCTYPE HTML>
<html>
<?php
require 'vendor/autoload.php';

use buyme\HostnamePrinter;

$hostnamePrinter = new HostnamePrinter();

echo '<br/>Servername: ' . $hostnamePrinter->hostname();
echo '<br/>Contact: ' . $hostnamePrinter->maillink();
?>
<head>
    <title><?php echo $hostnamePrinter->hostname(); ?> &mdash; powered by BuyMe</title>
</head>
<body>
<h1>The domain <i><?php echo $hostnamePrinter->hostname(); ?></i> is for sale</h1>
<h1>Die Domain <i><?php echo $hostnamePrinter->hostname(); ?></i> steht zum Verkauf</h1>
<img src="https://picsum.photos/200/300" alt="Just a picture">
<hr/>
<?php
echo 'Delivered at ' . $hostnamePrinter->time() . ' by <a href="https://github.com/ottlinger/buyme">BuyMe</a>';
?>
</body>
</html>
