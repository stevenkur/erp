<?php
require 'vendor/autoload.php';
require 'connect.php';
 require 'selectbarang.php';

// $jumlahbarang=$_POST['jumlahbarang']+'.$hasil[$i]['stockbarang'].';
$keuntungan = ($_POST['hargajualbarang']-$_POST['hargabarang'])*$_POST['jumlahdijual'];
$penjualanCollection = $companydb->penjualan;

$insertOneResult = $penjualanCollection->insertOne(u7t``
	['namabarang' => $_POST['namabarang'], 'hargabarang' => $_POST['hargabarang'], 'idpenjualan' => $_POST['idpenjualan'], 'jumlahdijual' => $_POST['jumlahdijual'], 'hargajualbarang' => $_POST['hargajualbarang'],'keuntungan' => $keuntungan]
);



$pembelianCollection = $companydb->pembelian;
$jumlahbarang=$_POST['jumlahbarang']-$_POST['jumlahdijual'];
$id = array("namabarang"=>$_POST['namabarang']);
$new = array('$set'=>array("jumlahbarang"=>$jumlahbarang));
$option = array("upsert"=>true,"multiple"=>true);

$updateOneResult = $pembelianCollection->updateOne(
    $id,$new,$option
);

$barangCollection = $companydb->barang;

$id = array("namabarang"=>$_POST['namabarang']);
$new = array('$set'=>array("stockbarang"=>$jumlahbarang));
$option = array("upsert"=>true,"multiple"=>true);

$updateOneResult = $barangCollection->updateOne(
    $id,$new,$option
);

 header('Location: penjualan.php');

?>