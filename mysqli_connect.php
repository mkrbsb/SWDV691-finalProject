<?php

DEFINE ('DB_HOST', 'p3plzcpnl484004.prod.phx3.secureserver.net');//p3plzcpnl484004.legendarygreenflash.com
DEFINE ('DB_NAME', 'Olympics');
DEFINE ('DB_USER', 'kshea218');
DEFINE ('DB_PASSWORD', 'Kes007!');

$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
