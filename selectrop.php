<?php
require 'vendor/autoload.php';
require 'connect.php';

$ropCollection = $companydb->rop;

$list = $ropCollection->find();
$i=0;

foreach ($list as $rop) {
	$bson = \MongoDB\BSON\fromPHP($rop);
	$json =  \MongoDB\BSON\toJSON($bson);
	$hasil[$i++] = json_decode($json, true);
}

?>