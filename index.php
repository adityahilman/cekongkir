<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<?php
	include "getProvince.php";
	//include "getCity.php";
	?>
	<input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"/>
</form>
<?php
if (isset($_POST['btnSubmit']))
{
	$id_provinsi = $_POST['provinsi'];
	//$id_kota = $_POST['kota'];
	echo "ID Provinsi - $id_provinsi ";
}