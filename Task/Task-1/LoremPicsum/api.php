<?php
$links[]=array();
for($n=1;$n<=10;$n++){
$url ="https://picsum.photos/v2/list?page=$n&limit=100";
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, 'MyCustomUserAgent');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch) or die("some ERROR");
curl_close($ch);
  $pattern= "#https://picsum.photos/id/\d{3}/\d{4}/\d{4}#";
 preg_match_all($pattern,$result,$matches);
  array_push($links,$matches[0]);
}
$adr=array();
for($k=0;$k<count($links);$k++){
    for($l=0;$l<count($links[$k]);$l++ ){
        array_push($adr,$links[$k][$l]);
    }
}

?>