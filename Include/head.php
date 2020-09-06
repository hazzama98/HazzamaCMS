<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=$title; ?> | Admin Page</title>
	<script src="jquery-3.2.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/style.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<style>
      @font-face /*perintah untuk memanggil font eksternal*/
    {
    font-family: 'Raph'; /*memberikan nama bebas untuk font*/
    src: url('fonts/fonts/Raphtalia.otf');/*memanggil file font eksternalnya di folder nexa*/
  }

      @font-face /*perintah untuk memanggil font eksternal*/
    {
    font-family: 'GH'; /*memberikan nama bebas untuk font*/
    src: url('fonts/fonts/pupcat.otf');/*memanggil file font eksternalnya di folder nexa*/
  }

</style>
</head>
<body>
    <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>

<div class="heading">
	<a href="" style="font-family: 'Raph'; color:white; font-size:18px;"><p>                        <?php
                            $query2 = "SELECT * FROM setting";
                            $next = Query($query2);
                            if (mysqli_num_rows($next) > 0) {
                                while ($data = mysqli_fetch_assoc($next) ) {
                        ?>   
                    	<?=$data['judul'];?>
                    	<?php
                                }
                            }
                    	?>
</p></a>
</div>
<div class="container-fluid">
	<div class="main" id="dashboard">
		<div class="row">
			<div class="col-sm-2">
				<ul id="side-menu" class="nav nav-pills nav-stacked">
					<li><a href="Dashboard.php">
					<span = class="glyphicon glyphicon-th"></span>
					 &nbsp;Dashboard</a></li>
					<li><a href="NewPost.php">
					<span = class="glyphicon glyphicon-list"></span>
					&nbsp;New Post</a></li>
					<li><a href="Categories.php">
					<span = class="glyphicon glyphicon-tags"></span>
					&nbsp;Categories</a></li>
					<li><a href="Admin.php">
					<span = class="glyphicon glyphicon-user"></span>
					&nbsp;Manage Admin</a></li>
					<li><a href="Comments.php">
					<span = class="glyphicon glyphicon-comment"></span>
					&nbsp;Comments</a></li>
					<li><a href="editsetting.php">
					<span = class="glyphicon glyphicon-cog"></span>
					&nbsp;Setting</a></li>
					<li><a href="Blog.php">
					<span = class="glyphicon glyphicon-equalizer"></span>
					&nbsp;Live Blog</a></li>
					<li><a href="Lagout.php">
					<span = class="glyphicon glyphicon-log-out"></span>
					&nbsp;Lagout</a></li>
				</ul>
			</div>
