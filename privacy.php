<?php require_once('Include/Sessions.php'); ?>
<?php require_once('Include/functions.php') ?>
<?php
$title = "Privacy Policy";
require_once('Include/kepala.php') ?>

        <!--Content Wrapper Start-->
				
                <div class="row section-wrapper">
                	
                    <!--Content Start-->
                    <div class="col-xs-12 nopadding">
                        <div class="box">
                        	<div class="post-single-content-body">
				<?php
						$query = "SELECT * FROM setting";
						$exec = Query($query);
						if (mysqli_num_rows($exec) > 0) {
							while ($post = mysqli_fetch_assoc($exec) ) {
                                if($amp) 
                                    {
                                       include('AmpHelper.php');
                                        $content = AmpHelper::replaceHtmlTagToCorresAmpTags($content);
                                    }

							?>
                            	<!--Featured Image Start-->
                                <div class="featured-image img-div-cover">
                                    <img src="images/Privacy-Policy.jpg" alt="featured image" />
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
                                        <h1>Privacy Policy</h1>
                                    </div>
                                    <!--Post Title End-->
                                    <div class="post-meta text-center">
                                    	<ul>
                                    	</ul>
                                    </div>
                                    
                                    <!--Post Text Content Start-->
                                    <p><h1>Privacy Policy for ItbaArts</h1>

<p>At ItbaArts, accessible from banua.xyz, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by ItbaArts and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<h2>Log Files</h2>

<p>ItbaArts follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services" analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users" movement on the website, and gathering demographic information.</p>

<h2>Cookies and Web Beacons</h2>

<p>Like any other website, ItbaArts uses "cookies". These cookies are used to store information including visitors" preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users" experience by customizing our web page content based on visitors" browser type and/or other information.</p>


<h2>Our Advertising Partners</h2>

<p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

<ul>
    <li>
        <p>Google</p>
        <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
    </li>
</ul>

<h2>Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of ItbaArts. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.org">Free Privacy Policy Generator</a> and the <a href="https://www.privacypolicyonline.com">Privacy Policy Generator Online</a>.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on ItbaArts, which are sent directly to users" browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that ItbaArts has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>ItbaArts"s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers" respective websites. What Are Cookies?</p>

<h2>Children"s Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>ItbaArts does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

<h2>Online Privacy Policy Only</h2>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in ItbaArts. This policy is not applicable to any information collected offline or via channels other than this website.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p></p>
                                    <!--Post Text Content End-->
                                    
                                    <div data-height="17"></div>
                                    
                                    <!--Social Media Share End-->
                                    
                                    <!--Post Pagination Start-->
                                    </div>

                                    <!--Post Pagination End-->
							<?php
							}
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
                                                        	<a href="<?php echo htmlentities($post_id); ?>.xhtml">
                                                                <figure class="img-div-cover">
                                                                	<div class="overlay-hover"></div>
                                                                	<img src="Upload/Image/<?=$recentPost['image'];?>" alt="related post" />
                                                                </figure>
                                                            </a>
                                                            <h4>
                                                            	<a href="Post.php?id=<?php echo $postID; ?>"><?php echo $recentPost['title'] ?></a>
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
                                    
                                </div>
                                <!--Post Single Details Bottom End-->
                                
                            </div>
                        </div>
                    </div>
                    <!--Content End-->
                
                </div>
                
                <div class="layout-divider"></div>
                
<?php require_once('Include/kaki.php') ?>