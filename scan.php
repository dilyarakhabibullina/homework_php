<?php
$imagesInit = scandir ("images");
$images = array_slice($imagesInit, 2);
//print_r($images);
$images2 = array_chunk($images, 3);
//print_r($images2);
for($i=0; $i<count($images2); $i++){
    for($j=0; $j<count($images2[$i]); $j++){?>
<a href="detail.php?name=<?= $images2[$i][$j]?>">
<img width="250" src="images/<?= $images2[$i][$j]?>"></a>
<?php
}
?>
    <br><br>
    <?php
}
?> 
   </div> 


