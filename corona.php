<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents("https://api.covid19api.com/summary", false, stream_context_create($arrContextOptions));

$coronadata = json_decode($response);
echo "<pre>";
//echo $response; 
print_r($coronadata);
?>