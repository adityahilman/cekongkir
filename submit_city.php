<?php

$id_provinsi = $_POST['nama_provinsi'];
$id_kota = $_POST['kota'];

echo "$id_provinsi - $id_kota";
echo "<br>";
include "getCost.php";

