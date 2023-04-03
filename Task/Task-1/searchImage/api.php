<?php
// "raw": "https://images.unsplash.com/photo-1596733394197-977d5079a55c?
//         ixid=Mnw0MjcxOTR8MHwxfHNlYXJjaHw5ODF8fHdlYXRoZXJ8ZW58MHx8fHwxNjc5ODA4ODk0&ixlib=rb-4.0.3"
//acess key=f9irLTs68T25cvhli2MG5-fK3xU0Zee37k2MoMNIUgg

$search=$_POST['key'];
$url="https://api.unsplash.com/search/photos?page=1&per_page=30&query=$search&client_id=f9irLTs68T25cvhli2MG5-fK3xU0Zee37k2MoMNIUgg";
$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_USERAGENT, 'MyCustomUserAgent');
curl_setopt($cURLConnection, CURLOPT_URL, $url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cURLConnection);
curl_close($cURLConnection);
$pattern="@https://images.unsplash.com/photo-[^/s]*?-.{13}ixid=[^\s].*?ixlib=rb-\d....@";
preg_match_all($pattern,$response,$matches);
$links=array();
for($r=0;$r<3;$r++){
    $adr=array();
    for($col=0;$col<10&&(10*$r+$col)< count($matches[0]);$col++){
       array_push($adr,$matches[0][$r*10+$col]); 
    }
    array_push($links,$adr);
}
?>