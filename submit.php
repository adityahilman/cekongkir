<?php

$id_provinsi = $_POST['provinsi'];

echo "$id_provinsi";
echo "<br>";
?>
<form method="POST" action="submit_city.php">
	<input type="hidden" name="nama_provinsi" value="<?php echo "$id_provinsi" ?>">
	<?php
	include "getCity.php";
	?>
	<input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"/>
</form>
