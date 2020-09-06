<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php 
	if ( isset($_GET['id']) ) {
		$post_id = $_GET['id'];
		$post_title = "";
		$sql = "SELECT * FROM cms_post WHERE post_id = '$post_id'";
		$exec = Query($sql);
		if ($title = mysqli_fetch_assoc($exec)) {
			$post_title = $title['title'];
		}
	}
$title = $post_title;
?>
<?php require_once('Include/kepala.php') ?>

        <!--Content Wrapper Start-->
				
                <div class="row section-wrapper">
                	
                    <!--Content Start-->
                    <div class="col-xs-12 nopadding">
                        <div class="box">
                        	<div class="post-single-content-body">
				<?php echo SuccessMessage(); ?>
				<?php echo Message(); ?>
				<?php
					if( isset($_GET['id'])) {
						$query = "SELECT * FROM cms_post WHERE post_id = '$_GET[id]'";
						$exec = Query($query);
						if (mysqli_num_rows($exec) > 0) {
							while ($post = mysqli_fetch_assoc($exec) ) {
								$post_id = $post['post_id'];
								$post_id1 = $post['post_id']-1;
								$post_id2 = $post['post_id']+1;
								$post_date = $post['post_date_time'];
								$post_title = $post['title'];
								$post_category = $post['category'];
								$post_author = $post['author'];
								$post_image = $post['image'];
								$content = $post['post']; 
                                if($amp) 
                                    {
                                       include('AmpHelper.php');
                                        $content = AmpHelper::replaceHtmlTagToCorresAmpTags($content);
                                    }

							?>
                            	<!--Featured Image Start-->
                                <div class="featured-image img-div-cover">
                                    <img src="Upload/Image/<?php echo htmlentities($post_image); ?>" alt="featured image" />
                                </div>
                                <!--Featured Image End-->
                                
                                <!--Breadcrumbs Start-->
                                <div class="breadcrumbs">
                                    <ul>
                                     <b>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم!</b>
                                    </ul>
                                </div>
                                <!--Breadcrumbs End-->
                                
                                <!--Post Single Details Top Start-->
                                <div class="post-single-details-body">
                                    <!--Post Title Start-->
                                	<div class="page-title title-center">
                                        <h1><?php echo htmlentities($post_title); ?></h1>
                                    </div>
                                    <!--Post Title End-->
                                    
                                    <!--Post Meta Start-->
                                    <div class="post-meta text-center">
                                    	<ul>
                                    		<li><a href="#"><?php echo htmlentities($post_date); ?></a></li>
                                            <li><a href="#"><?php echo htmlentities($post_category); ?></a></li>
                                    		<li><a href="#"><?php echo htmlentities($post_author); ?></a></li>
                                    	</ul>
                                    </div>
                                    <!--Post Meta End-->
                                    
                                    <!--Post Text Content Start-->
                                    <p><?=$post['post']; ?></p>
                                    <!--Post Text Content End-->
                                    
                                    <div data-height="17"></div>
                                    
                                    <!--Social Media Share Start-->
                                    <div class="social-media-share2">
                                        <ul>
                                            <li><a href="javascript:facebookShare('<?php echo htmlentities($post_id); ?>.xhtml', 550, 350)" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:twitterShare('<?php echo htmlentities($post_id); ?>.xhtml', 550, 350)" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:googleShare('<?php echo htmlentities($post_id); ?>.xhtml', 550, 350)" target="_blank"><i class="fa fa-google"></i></a></li>
                                            <li><a href="javascript:pinterestShare('<?php echo htmlentities($post_id); ?>.xhtml', 550, 350)" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="javascript:linkedinShare('<?php echo htmlentities($post_id); ?>.xhtml', 550, 350)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <!--Social Media Share End-->
                                    
                                    <!--Post Pagination Start-->
                                    <div class="post-pagination-wrap">
                                    <?php
                                    $query1 = "SELECT * FROM cms_post WHERE post_id = '$post_id1'";
                                    $jalan = Query($query1);
                                    if (mysqli_num_rows($jalan) > 0) {
                                        while ($data = mysqli_fetch_assoc($jalan) ) {
                                    ?>    
                                        <div class="post-pagination pagination-prev">
                                            <a href="Post.php?id=<?php echo htmlentities($data['post_id']); ?>">
                                                <span>Previous Post</span>
                                                <h4><?=$data['title'];?></h4>
                                            </a>
                                        </div>
                                        <?php
                                        }
                                    }
                                        ?>
                                    <?php
                                    $query2 = "SELECT * FROM cms_post WHERE post_id = '$post_id2'";
                                    $next = Query($query2);
                                    if (mysqli_num_rows($next) > 0) {
                                        while ($data = mysqli_fetch_assoc($next) ) {
                                    ?>    

                                        <div class="post-pagination pagination-next">
                                            <a href="Post.php?id=<?php echo htmlentities($data['post_id']); ?>">
                                                <span>Next Post</span>
                                                <h4><?php echo htmlentities($data['title']); ?></h4>
                                            </a>
                                        </div>
                                        <?php
                                        }
                                    }
                                        ?>
                                    </div>
                                    <!--Post Pagination End-->
							<?php
							}
						}
					}else {
						Redirect_To('index.php');
					}
				?>
                                    
                                </div>
                                <!--Post Single Details Top End-->
                            	
                                <!--About Author Start-->
                                <div class="post-author bgimage-cover" data-image-src="images/bg.gif">
                                	<div class="post-author-details text-center">
                                    	<figure>
                                        	<img src="images/admin.jpg" height="100px" alt="author" />
                                        </figure>
                                        <h3>About Author</h3>
                                        <div class="post-author-description">
                                        	<p>                        
                                            <?php
                                            $query2 = "SELECT * FROM setting";
                                            $next = Query($query2);
                                            if (mysqli_num_rows($next) > 0) {
                                                while ($data = mysqli_fetch_assoc($next) ) {
                                        ?>   <?=$data['tentang'];?>
                
                                    	    <?php
                                                }
                                            }
                                        	?>
                                    	</p>
                                        </div>
                                        <ul class="post-author-social-media">
                                        	<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="post-author-overlay"></div>
                                </div>
                                <!--About Author End-->
                                
                                <!--Post Single Details Bottom Start-->
                                <div class="post-single-details-body">
                                	
                                    <!--Related Posts Start-->
                                    <div class="post-related">
                                    
                                        <div class="page-title subtitle">
                                            <h2>Related posts</h2>
                                        </div>
                                        
                                        <div class="container nopadding">
                                            <div class="row">
        						<?php
							$sql = "SELECT * FROM cms_post ORDER BY post_date_time LIMIT 4";
							$exec = Query($sql);
							while ($recentPost = mysqli_fetch_assoc($exec)) {
								$postID = $recentPost['post_id'];
								?>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="box">
                                                        <div class="post-related-item">
                                                        	<a href="<?=$postID ?>.xhtml">
                                                                <figure class="img-div-cover">
                                                                	<div class="overlay-hover"></div>
                                                                	<img src="Upload/Image/<?=$recentPost['image'];?>" alt="related post" />
                                                                </figure>
                                                            </a>
                                                            <h4>
                                                            	<a href="<?=$postID ?>.xhtml"><?php echo $recentPost['title'] ?></a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
								<?php
							}
						?>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <!--Related Posts End-->
                                    <!--Post Comments Start-->
                                    <div class="post-comments">
                                    	<div class="page-title subtitle">
                                            <h2>Comments</h2>
                                        </div>
                                        <ul class="comment-list">
				<?php
					$sql = "SELECT * FROM comment WHERE post_id = '$_GET[id]'";
					$exec = Query($sql);
					if (mysqli_num_rows($exec) > 0) {
						while ($comments = mysqli_fetch_assoc($exec)) {
							$c_nama = $comments['nama'];
							$c_site = $comments['site'];
							$c_email = $comments['email'];
							$c_dateTime = $comments['date_time'];
							$c_comment = $comments['comment'];
							?>
                                        
                                        	<!--Comment 1 Start-->
                                        	<li>
                                            	<div class="comment-wrapper">
                                                	<div class="comment-avatar">
                                                    	<figure>
                                                        	<img src="images/comm.png" height="80" alt="avatar" />
                                                        </figure>
                                                    </div>
                                                    <div class="comment-details">
                                                    	<div class="comment-name">
                                                            <a href="<?php echo $c_site; ?>"><?php echo $c_nama; ?></a>
                                                            <span class="comment-date"><?php echo $c_dateTime; ?></span>
                                                        </div>
                                                        <div class="comment-description">
                                                            <p><?php echo $c_comment; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!--Comment 1 End-->
							<?php
						}
					}else {
							echo "No Comments Yet";
						}
				?>

                                        </ul>
                                        
                                    </div>
                                    <!--Post Comments End-->
                                    
                                    <!--Leave a Comment Start-->
                                    <div class="post-leave-comment">
                                    
                                    	<div class="page-title subtitle">
                                            <h2>Leave a comment</h2>
                                        </div>
                                        
                                        <form method="POST" action="comment.php" class="contact-form comment-input">
                                        	<div class="row">
                                            	<div class="col-xs-12">
                                                	<div class="box">
                                                    	<input id="id" type="hidden" name="id" value="<?=$_GET['id'];?>" />
                                                    	<label>Your name *</label>
                                                    </div>
                                                	<div class="box">
                                                    	<input id="name" type="text" name="nama" required />
                                                    	<label>Your name *</label>
                                                    </div>
                                                    <div class="box">
                                                    	<input id="email" type="text" name="email" required />
                                                    	<label>Email *</label>
                                                    </div>
                                                    <div class="box">
                                                    	<input id="site" type="text" name="site" required />
                                                    	<label>Website *</label>
                                                    </div>
                                                    <div class="box">
                                                        <textarea id="comment" name="comment" required></textarea>
                                                        <label>Your comment *</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input id="submit_message" name="submit" type="submit" value="Send message"/>
                                                    <span class="loading"><i class="fa fa-spinner fa-pulse"></i></span>
                                                </div>
                                                <div id="reply_message"></div>
                                            </div>
                                        </form>
                                    
                                    </div>
                                    <!--Leave a Comment End-->
                                    
                                </div>
                                <!--Post Single Details Bottom End-->
                                
                            </div>
                        </div>
                    </div>
                    <!--Content End-->
                
                </div>
                
                <div class="layout-divider"></div>
                
            </div>
        </div>
        <!--Content Wrapper End-->

<?php require_once('Include/kaki.php') ?>