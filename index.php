<?php

$dbhost = "34.68.98.47";
 $dbuser = "root";
 $dbpass = "534521";
 $db = "root";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

echo "connected";

?>