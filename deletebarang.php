<?php
require 'vendor/autoload.php';
require 'connect.php';

$barangCollection = $companydb->barang;

$query = array('idbarang' => $_GET['idbarang']);
$deleteOneResult = $barangCollection->deleteOne($query);
	
header('Location: barang.php');

?>