<?php require_once('Include/Sessions.php') ?>
<?php require_once('Include/functions.php') ?>
<?php require_once('Include/seo.php') ?>
<?php ConfirmLogin(); ?>
<?php

date_default_timezone_set('Asia/Jakarta');
$time = time();
if ( isset( $_POST['post-submit'])) {
	$title = mysqli_real_escape_string($con, $_POST['post-title']);
    $post_id = judul_seo($title);
	$category = mysqli_real_escape_string($con, $_POST['post-category']);
	$content = mysqli_real_escape_string($con, $_POST['post-content']);
	$image = $_FILES['post-image']['name'];
	$author = $_SESSION['username'];
	$title_length = strlen($title);
	$content_lenght = strlen($content);
	$imageDirectory = "Upload/Image/" . basename($_FILES['post-image']['name']);
	if ( empty($title)) {
		$_SESSION['errorMessage'] = "Title Is Emtpy";
		Redirect_To('NewPost.php');
	}else if ( $title_length > 500) {
		$_SESSION['errorMessage'] = "Title Is Too Long";
		Redirect_To('NewPost.php');
	}else if ( empty($content)) {
		$_SESSION['errorMessage'] = "Content Is Empty";
		Redirect_To('NewPost.php');
	}else if ( $content_lenght > 40000) {
		$_SESSION['errorMessage'] = "Content Is Too Long";
		Redirect_To('NewPost.php');
	}else {
		$query = "INSERT INTO cms_post (post_id, title, category, author, image, post) 
		VALUES ('$post_id', '$title', '$category', '$author', '$image', '$content')";
		$exec = Query($query);
		if ($exec) {
			move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
			$_SESSION['successMessage'] = "Post Added Successfully";
		}else {
			$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again";

		}

	}
}
?>
<?php 
$title="Dashboard";
require_once('Include/head.php') ?>
			<div class="col-xs-10">
				<div class="page-title"><h1>Add New Post</h1></div>
					<?php echo Message(); ?>
					<?php echo SuccessMessage(); ?>
					<form action="NewPost.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<labal for="post-title">Title</labal>
								<input type="text" name="post-title" class="form-control" id="post-title">
							</div>
							<div class="form-group">
								<labal for="post-category">Category</labal>
								<select class="form-control" name="post-category" id="post-category">
									<?php
										$sql = "SELECT * FROM cms_category";
										$exec = Query($sql);
										while($row = mysqli_fetch_assoc($exec)){
											echo "<option>$row[cat_name]</option>";
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<labal for="post-image">Feature Image</labal>
								<input type="File" name="post-image" class="form-control">
							</div>
							<div class="form-group">
								<labal for="post-content">Content</labal>
								<textarea rows="10" class="ckeditor" name="post-content" id="post-content"></textarea>
							</div>
							<div class="form-group">
								<button name="post-submit" class="btn btn-primary form-control">Publish</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
<?php require_once('Include/foot.php') ?>
