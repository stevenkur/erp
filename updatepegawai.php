<?php
require 'vendor/autoload.php';
require 'connect.php';

$idpegawai = $_POST['idpegawai'];
$namapegawai = $_POST['namapegawai'];
$gajipegawai = $_POST['gajipegawai'];

$pegawaiCollection = $companydb->pegawai;

$id = array("idpegawai"=>$idpegawai);
$new = array('$set'=>array("namapegawai"=>$namapegawai, "gajipegawai"=>$gajipegawai));
$option = array("upsert"=>true,"multiple"=>true);

$updateOneResult = $pegawaiCollection->updateOne(
    $id, $new, $option
);

header('Location: pegawai.php');

?>