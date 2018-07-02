<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://149.28.165.6:16969/getinfo');
$result = curl_exec($ch);
$obj = json_decode($result, TRUE);
curl_close($ch);
//echo print_r($obj['difficulty']);
$difficulty = $obj['difficulty'];
$hashrate = round($difficulty / 30);
print_r($hashrate);
?>
