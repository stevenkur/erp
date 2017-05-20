<?php
require 'vendor/autoload.php';
require 'connect.php';

$barangCollection = $companydb->barang;

$list = $barangCollection->find();
$i=0;

foreach ($list as $barang) {
	$bson = \MongoDB\BSON\fromPHP($barang);
	$json =  \MongoDB\BSON\toJSON($bson);
	$hasil[$i++] = json_decode($json, true);
}

?>