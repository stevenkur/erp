<?php
require 'vendor/autoload.php';
require 'connect.php';

$barangCollection = $companydb->barang;

$insertOneResult = $barangCollection->insertOne(
	['idbarang' => $_POST['idbarang'], 'namabarang' => $_POST['namabarang'], 'stockbarang' => $_POST['stockbarang']]
);

header('Location: barang.php');

?>