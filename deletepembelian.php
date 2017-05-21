<?php
require 'vendor/autoload.php';
require 'connect.php';

$pembelianCollection = $companydb->pembelian;

$query = array('idpembelian' => $_GET['idpembelian']);
$deleteOneResult = $pembelianCollection->deleteOne($query);
	
header('Location: penjualan.php');

?>