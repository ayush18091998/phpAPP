<!DOCTYPE html>
<html>
<style>

</style>
<head>
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<div class="row">
    <?php 
    for($j=0;$j<3;$j++){
        ?>
        <div class="grid "> 
    <?php 
        for($i=0;$i<10;$i++){
        ?>
         <img src="https://fastly.picsum.photos/id/316/200/200.jpg?hmac=f0i62VkjVy8OPLP77Xf7mdZa3UBNlTOXFm9WpDMOiiA"/>
        <?php
        }
         ?>  
</div>
<?php
    }
    ?>
</div>
<!-- <script src="util.js" type="text/javascript"></script> -->
</body>
</html>