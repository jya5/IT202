#!/usr/bin/php
<?php

require_once("clientDB.php.inc");
$db = new clientDB();
$db->addNewClient("DJ", "123");

if ($db->addNewClient("DJ", "123")==0){
 echo "Invalid".PHP_EOL;
}
else echo "Login Success".PHP_EOL;
?>
