<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
<div class=" container text-sm-start">
    <?php for($i=0;$i<3;$i++){
        ?>
  <div class="row gap-0">
       <?php  
        for($j=0;$j<10;$j++){
            $imgLink = $adr[rand(0,793)];
            ?>
              <div class= "col imgConatiner gap-0 img-thumbnail"> <img <?php echo "src={$imgLink}"?> class="pic " />  </div>
        <?php }?>  
  </div>
    <?php } ?>
</div>
    
</body>
</html>