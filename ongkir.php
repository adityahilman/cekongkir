<?php
	$id_provinsi = $_POST['provinsi'];
	$id_kota = $_POST['kota'];
	echo "ID Provinsi - $id_provinsi ";
	include "getCity.php";