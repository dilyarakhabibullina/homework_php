<?php
if($_GET['name']){?>

<img width="600" src="images/<?= $_GET['name']?>">
<hr>
<?php
}
?>
<a href="<?=$_SERVER['HTTP_REFERER']?>"><-- Back</a>
