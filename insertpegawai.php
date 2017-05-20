<?php
require 'vendor/autoload.php';
require 'connect.php';

$pegawaiCollection = $companydb->pegawai;

$insertOneResult = $pegawaiCollection->insertOne(
	['idpegawai' => $_POST['idpegawai'], 'namapegawai' => $_POST['namapegawai'], 'gajipegawai' => $_POST['gajipegawai']]
);

header('Location: pegawai.php');

?>