<form method="POST" action="submit.php">
	<?php
	include "getProvince.php";
	?>
	<input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"/>
</form>

<?php
/*
if (isset($_POST['btnSubmit']))
{
	$id_provinsi = $_POST['provinsi'];
	$id_kota = $_POST['kota'];
	echo "ID Provinsi - $id_provinsi ";
	include "getCity.php";

}
*/