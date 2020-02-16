<!DOCTYPE HTML>
<html>
<head>
<title>BuyMe</title>
</head>
<body>
<h1>Welcome</h1>
<?php

echo "Time: ".date("Y-m-d H:i:s");
$server = $_SERVER['SERVER_NAME'];
echo "<br/>Servername:".$server;
echo '<br/>Contact: <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;'.$server.'">'.$server.'</a>';
?>
</body>
</html>
