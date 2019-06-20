<?php
$search = urlencode($_POST['k']);

$url = "https://www.google.com/search?q=$search";


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($curl);

// preg_match_all('/<table class="O6u2Ve">(.*)<\/table>/U', $result, $matches);
// print_r($matches);
curl_close($curl);
?>