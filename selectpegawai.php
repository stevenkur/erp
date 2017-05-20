<?php
require 'vendor/autoload.php';
require 'connect.php';

$pegawaiCollection = $companydb->pegawai;

$list = $pegawaiCollection->find();
$i=0;

foreach ($list as $pegawai) {
	$bson = \MongoDB\BSON\fromPHP($pegawai);
	$json =  \MongoDB\BSON\toJSON($bson);
	$hasil[$i++] = json_decode($json, true);
}

?>