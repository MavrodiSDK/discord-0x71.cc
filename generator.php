<?php
$data = [
"authorName" => "Click here!", 
"authorUrl" => "https://lolz.guru/threads/3426666/",
"color" => "25095C", 
"description" => "Only 1000 StapleVerse NFT's will be sold this time\nSTAPLEVERSE - FEED CLAN</b> wishes you good luck!\nSALE INFO", 
"image" => "https://sitechecker.pro/wp-content/uploads/2017/12/URL-meaning.png",
"isBanner" => true,
"providerName" => "Copyright @markuwa lolz",
"providerUrl" => "",
"title" => "🔵444🔵"
];
$data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
$curl = curl_init('http://em.0x71.cc');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($curl);
curl_close($curl);
$resultcode = json_decode($result, true);
$newurl = "http://em.0x71.cc/" . $resultcode['id'];
header('Location: '.$newurl);
?>