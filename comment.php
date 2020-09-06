<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php
	if(isset($_POST['submit'])) {
		if(!empty($_POST['submit'])) {
			date_default_timezone_set('Asia/Manila');
			$time = time();
			$dateTime = strftime('%Y-%m-%d %H:%M:%S ',$time);
			$postID   = $_POST['id'];
			$nama     = $_POST['nama'];
			$site     = $_POST['site'];
			$email    = $_POST['email'];
			$comment  = $_POST['comment'];
			$status   = 'unapprove';
			$sql      = "INSERT INTO comment (date_time, nama, site, email, comment, status, post_id) VALUES('$dateTime', '$nama', '$site', '$email', '$comment', '$status', '$postID' )";
			$exec     = Query($sql);
			if ($exec) {
				$_SESSION['successMessage'] = "Berhasil Mengirim Komentar.";
				mysqli_close($con);
				Redirect_To("Post.php?id=$postID");
			}else {
				$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again Later";
			}
		}
	}
?>