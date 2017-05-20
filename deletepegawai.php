<?php
require 'vendor/autoload.php';
require 'connect.php';

$pegawaiCollection = $companydb->pegawai;

$query = array('idpegawai' => $_GET['idpegawai']);
$deleteOneResult = $pegawaiCollection->deleteOne($query);
	
header('Location: pegawai.php');

?>