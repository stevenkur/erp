<?php
require 'vendor/autoload.php';
require 'connect.php';

$pembelianCollection = $companydb->pembelian;

$list = $pembelianCollection->find();
$i=0;

foreach ($list as $pembelian) {
	$bson = \MongoDB\BSON\fromPHP($pembelian);
	$json =  \MongoDB\BSON\toJSON($bson);
	$hasil[$i++] = json_decode($json, true);
}

?>