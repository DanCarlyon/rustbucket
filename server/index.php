<?php
include('lib/steam-condenser.php');

echo "<pre>";

$server = new GoldSrcServer('88.150.159.154', 28816);
$server->initialize();
echo $server->getPlayers();

echo "</pre>";

?>