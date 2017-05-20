<?php
require 'vendor/autoload.php';
require 'connect.php';

$idbarang = $_POST['idbarang'];
$namabarang = $_POST['namabarang'];
$stockbarang = $_POST['stockbarang'];

$barangCollection = $companydb->barang;

$id = array("idbarang"=>$idbarang);
$new = array('$set'=>array("namabarang"=>$namabarang, "stockbarang"=>$stockbarang));
$option = array("upsert"=>true,"multiple"=>true);

$updateOneResult = $barangCollection->updateOne(
    $id, $new, $option
);

header('Location: barang.php');

?>