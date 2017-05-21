<?php
require 'vendor/autoload.php';
require 'connect.php';
 require 'selectbarang.php';

// $jumlahbarang=$_POST['jumlahbarang']+'.$hasil[$i]['stockbarang'].';

$pembelianCollection = $companydb->pembelian;

$insertOneResult = $pembelianCollection->insertOne(
	['namabarang' => $_POST['namabarang'], 'idpembelian' => $_POST['idpembelian'], 'jumlahbarang' => $_POST['jumlahbarang'], 'hargabarang' => $_POST['hargabarang']]
);

$barangCollection = $companydb->barang;
$jumlahbarang=$_POST['jumlahbarang']+$_POST['stockbarang'];
$id = array("namabarang"=>$_POST['namabarang']);
$new = array('$set'=>array("stockbarang"=>$jumlahbarang));
$option = array("upsert"=>true,"multiple"=>true);

$updateOneResult = $barangCollection->updateOne(
    $id,$new,$option
);
 header('Location: pembelian.php');

?>