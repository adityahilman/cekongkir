<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=".$_GET['provinsi'],
  //CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=1",
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
   $city = json_decode($response, true);
//print_r($city);
?>
<select name="kota">
  <option value="0" selected="selected">-- Pilih kota --</option>
<?php
 foreach ($city['rajaongkir']['results'] as $citykey => $value) {
  $city_id=$value['city_id'];
  $city_name=$value['city_name'];
  ?>
    <option value="<?php echo $city_id ?>" id="kota-<?php echo $city_id ?>"><?php echo $city_name ?></option>
  <?php

 }
 ?>
 </select>
 <?php
}
?>
