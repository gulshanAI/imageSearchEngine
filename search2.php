<?php
$search = urlencode($_POST['k']);

// $url = "https://www.google.com/search?q=$search";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($curl);

// preg_match_all("/<div class='g'>(.*)<\/div>/U", $result, $matches);

// echo '<pre>';
// print_r($matches);
// // foreach($matches as $v){
// //     echo $v.'<br>';
// // }
// // curl_close($curl);

$html = file_get_contents('https://www.google.com/search?hl=en&tbm=isch&source=hp&biw=1366&bih=594&ei=toGUXJ-gLuGa_QbMpI-gBw&q='.$search.'&oq='.$search);
echo $html;

?>