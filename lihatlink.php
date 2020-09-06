<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php require_once('Include/seo.php') ?>

<?php
$sql = "SELECT * FROM cms_post";
$exec = Query($sql);
while ($row = mysqli_fetch_assoc($exec)) {
?>
<a href="blog/<?=$row['judul_seo']; ?>.html" target="_blank"><?=$row['judul_berita']; ?></a>  
<?php							    
}
?>
								