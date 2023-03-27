<!DOCTYPE html>
<html>
<body>
<?php   
$url = "https://picsum.photos/v2/list?page=2&limit=100/";   
$ch = curl_init();   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt($ch, CURLOPT_URL, $url);   
$res = curl_exec($ch);   
echo $res;   
?>  

  <!-- https://picsum.photos/v2/list?page=2&limit=100 -->
</body>
</html>
