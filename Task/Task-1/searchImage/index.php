<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "api.php";
      shuffle($links); 
 ?>
<div class=" container text-sm-start">
     <?php if(count($matches[0])==0) echo"NO MATCH FOUND";?>
    <?php for($i=0;$i<3;$i++){
        ?>
  <div class="row gap-0">
       <?php  
       $modifier="&w=120&dpr=2";
        for($j=0;$j<10&&((10*$i+$j)< count($matches[0]));$j++){
            $imgLink = $links[$i][$j].$modifier;
            ?>
              <div class= "col imgConatiner gap-0 img-thumbnail">  <img <?php echo "src={$imgLink}"?> class="pic " />  </div>
        <?php }?>  
  </div>
    <?php } ?>
</div>
</body>
</html>