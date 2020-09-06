<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php
$title="Beranda";
?>
<?php require_once('Include/kepala.php') ?>


        <!--Content Wrapper Start-->

                <div class="row section-wrapper">

                    <!--Content Start-->
                    <div class="col-xs-12 nopadding">
                        <div class="box">
                    		
                            <div class="post-list post-list-fullwidth">
				<?php
					$page = 1;
					$query = "";
					if ( isset($_GET['search'])) {
						if ( empty($_GET['search'])) {
							Redirect_To('index.php');
						}else {
							$search = $_GET['search'];
							$query = "SELECT * FROM cms_post WHERE post_date_time LIKE '%$search%' OR title LIKE '%$search%' OR category LIKE '$search%'";
						}
					}else if ( isset($_GET['category'])) {
						$query = "SELECT * FROM cms_post WHERE category = '$_GET[category]'";
					}else if ( isset($_GET['page'])){
						$page = $_GET['page'];
						$showPost = ($page * 5) - 5;
						if ($page <= 0) {
							$showPost = 0;
						}
						$query = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT $showPost,5	";

					}else{

						$query = "SELECT * FROM cms_post ORDER BY post_date_time DESC LIMIT 0,5	";						
					}

					$exec = Query($query) or die(mysqli_error($con));
					if( $exec ) {
						if (mysqli_num_rows($exec) > 0) {
							while ( $post = mysqli_fetch_assoc($exec) ) {
								$post_id = $post['post_id'];
								$post_date = $post['post_date_time'];
								$post_title = $post['title'];
								$post_category = $post['category'];
								$post_author = $post['author'];
								$post_image = $post['image'];
								$post_content = substr($post['post'], 0,100) . '...'; 
							?>
                                                                
                                <!--Post Entry 2 Start-->
                                <article class="post-blog-list">
                                	<div class="blog-list-box">
                                    
                                    	<!--Post Image-->
                                    	<div class="blog-list-img">
                                        	<a href="<?php echo $post_id;?>.xhtml">
                                            	<figure class="fit-img">
                                                	<div class="overlay-hover"></div>
                                                	<img src="Upload/Image/<?php echo $post_image; ?>" alt="blog list image" />
                                                </figure>
                                            </a>
                                        </div>
                                        
                                        <!--Post Entry-->
                                        <div class="post-entry">
                                        	<div class="blog-list-details">
                                            	<h2><a href="<?php echo $post_id;?>.xhtml"><?php echo htmlentities($post_title); ?></a></h2>
                                                <div class="post-description">
                                                    <p><?php echo htmlentities($post_content); ?></p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul>
                                                        <li><?php echo htmlentities($post_date); ?></li>
                                                        <li><?php echo htmlentities($post_category);?></li>
                                                        <li><?php echo htmlentities($post_author);?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog-list-share share-tooltip-animate">
                                            	<i class="fa fa-share-alt"></i>
                                            </div>
                                            <div class="share-tooltip">
                                            	<ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--Post Entry 2 End-->
							<?php
							}

						}else {
							echo "<span class='lead'>No result<span>";
						}
					}else {

					}

				?>
				<?php  if(!isset($_GET['category'])) { ?>
                            </div>
                            
                            <!--Pagination Start-->
                            <nav class="pagination pagination-fullwidth">
                                <ul>
				<?php
					if ($page > 1) {
						?>
						<li><a href="index.php?page=<?php echo $page - 1; ?>"><</a></li>
						<?php
					}
					$sql = "SELECT COUNT(*) FROM cms_post";
					$exec = Query($sql);
					$rowCount = mysqli_fetch_array($exec);
					$totalRow = array_shift($rowCount);
					$postPerPage = ceil($totalRow / 5);

					for ($count = 1; $count <= $postPerPage; $count++){
						if ($page == $count) {
							?>
							<li class="active"><a href="index.php?page=<?php echo $count ?>"><?php echo $count ?></a></li>
							<?php
						}else {
							?>
							<li><a href="index.php?page=<?php echo $count ?>"><?php echo $count ?></a></li>
							<?php
						}
					}
					if($page < $postPerPage) {
						?>
						<li><a href="index.php?page=<?php echo $page + 1; ?>">></a></li>
						<?php
					}
				?>
				<?php
					}
				?>
                                </ul>
                            </nav>
                            <!--Pagination End-->
                            
                        </div>
                    </div>
                    <!--Content End-->
                
                </div>
                
                <div class="layout-divider"></div>
                
            </div>
        </div>
        <!--Content Wrapper End-->
<?php require_once('Include/kaki.php') ?>
