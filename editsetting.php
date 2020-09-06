<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php ConfirmLogin(); ?>

<?php 
if ( isset( $_POST['update'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tentang = $_POST['tentang'];
    $tag = $_POST['tag'];
    
    $sql = "UPDATE setting SET judul='$judul', deskripsi='$deskripsi', tentang='$tentang', tag='$tag'";
	$exec = Query($sql);

	if($exec) {
		Header('Location:Dashboard.php');
	}else {
		Header('Location:Dashboard.php');
	}
}
?>
<?php
$title="Setting";
require_once('Include/head.php') ?>

			<div class="col-xs-10">
				<div class="page-title"><h1>Setting</h1></div>
                    <?php
                        $query2 = "SELECT * FROM setting";
                        $next = Query($query2);
                        if (mysqli_num_rows($next) > 0) {
                           while ($data = mysqli_fetch_assoc($next) ) {
                        ?>   
					<form action="editsetting.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<labal for="post-title">Title</labal>
								<input type="text" name="judul" class="form-control" id="post-title" value="<?=$data['judul'];?>">
							</div>
							<div class="form-group">
								<labal for="post-title">Deskripsi</labal>
								<input type="text" name="deskripsi" class="form-control" id="post-title" value="<?=$data['deskripsi'];?>">
							</div>
							<div class="form-group">
								<labal for="post-title">About</labal>
								<input type="text" name="tentang" class="form-control" id="post-title" value="<?=$data['tentang'];?>">
							</div>
							<div class="form-group">
								<labal for="post-title">Privacy Policy</labal>
								<textarea type="text" name="tag" class="form-control" id="post-title"><?=$data['tag'];?></textarea>
							</div>
							<div class="form-group">
								<button name="update" class="btn btn-primary form-control">UPDATE</button>
							</div>
						</fieldset>
					</form>
                    <?php
                        }
                    }
                    ?>
				</div>
			</div>
		</div>
<?php require_once('Include/foot.php') ?>
