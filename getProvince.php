
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: c1d4eabaec53e7128eba6b5757757f30"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  
  $list_provinsi = json_decode($response, true);
  ?>
  <select name="provinsi">
  <option value="0" selected="selected">-- Pilih provinsi --</option>
    <?php
      foreach ($list_provinsi['rajaongkir']['results'] as $key => $value) {
        # code...
        $provinsi_id=$value['province_id'];
        $provinsi_nama=$value['province'];
        ?>
        <option value="<?php echo $provinsi_id ?>" id="provinsi-<?php echo $provinsi_id ?>"> <?php echo "$provinsi_id - $provinsi_nama" ?> </option>
        <?php
      }
      ?>
  </select>
  <?php
  
}
?>