<?php
require 'vendor/autoload.php';
require 'connect.php';
 

// $jumlahbarang=$_POST['jumlahbarang']+'.$hasil[$i]['stockbarang'].';
$rop = ($_POST['jualtahun']/365*$_POST['tenggangwaktu'])*$_POST['safetystock'];
$ropCollection = $companydb->rop;

$insertOneResult = $ropCollection->insertOne(
	['namabarang' => $_POST['namabarang'], 'rop' => $rop]
);



 header('Location: rop.php');

?>