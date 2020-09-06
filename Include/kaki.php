
        <!--Footer Start-->
        <footer class="footer-section">
        	<div class="container">
        		<div class="footer-wrapper">
                	
                    <!--Footer About Start-->
                    <div class="footer-instagram">
                    	<h2>About Me</h2>
                        <div class="footer-instagram-carousel">
                        	<div class="owl-carousel footer-carousel">
                            	
                        </div>
                    </div>
                    <!--Footer About End-->
                    
                    <!--Footer Details Start-->
                    <div class="footer-details">
                    	<div class="row">
                        
                        	<!--Footer Widget 1 Start-->
                        	<div class="col-md-4">
                            	<div class="box">
                                	<aside class="widget widget_about_us">
                                        <div class="widget-detail">
                                        	<div class="widget-about-img img-div-cover">
                                                <h1 style="font-family: 'Raph'; color:white; font-size:40px;">                                                                                            <?php
                                            $query2 = "SELECT * FROM setting";
                                            $next = Query($query2);
                                            if (mysqli_num_rows($next) > 0) {
                                                while ($data = mysqli_fetch_assoc($next) ) {
                                        ?>   <?=$data['judul'];?>
                
                                    	    <?php
                                                }
                                            }
                                        	?>
</h1>
                                            </div>
                                            <div class="widget-about-detail">
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
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!--Footer Widget 1 End-->
                            
                            <!--Footer Widget 2 Start-->
                            <div class="col-md-4">
                            	<div class="box">
                                	<aside class="widget widget_tag_cloud">
                                        <div class="widget-title">
                                            <h3>Popular tags</h3>
                                        </div>
                                        <div class="widget-detail">
                                            <div class="tagcloud">
                                                <?php 
                    							$sql = "SELECT cat_name FROM cms_category ";
                    							$exec = Query($sql);
                    							if (mysqli_num_rows($exec) > 0) {
                    							while ($category = mysqli_fetch_assoc($exec)) {
            									?>
									<a href="index.php?category=<?php echo $category['cat_name'] ?>"><?php echo $category['cat_name'] ?></a>
									<?php
								}
							}	
						?>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!--Footer Widget 2 End-->
                            
                            <!--Footer Widget 3 Start-->
                            <div class="col-md-4">
                            	<div class="box">
                                	<aside class="widget widget_follow_subscribe">
                                        <div class="widget-title">
                                            <h3>Subscribe</h3>
                                        </div>
                                        <div class="widget-detail">
                                            <p>Masukkan Email Anda Untuk Berlangganan.</p>
                                            <div data-height="15"></div>
                                            <form class="subscribe">
                                                <input class="subscribe-email" type="text" name="email" placeholder="Your email address..." required />
                                                <input class="subscribe-button" type="submit" value="Subscribe"/>
                                            </form>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!--Footer Widget 3 End-->
                            
                        </div>
                    </div>
                    <!--Footer Details End-->
                    

                    <!--Footer Bottom Start-->
                    <div class="footer-bottom">
                    	<div class="row">
                        	<div class="col-md-12">
                            	<div class="bottom-text-center">
                                	Copyrights © 2020 <a href="/">                                            <?php
                                            $query2 = "SELECT * FROM setting";
                                            $next = Query($query2);
                                            if (mysqli_num_rows($next) > 0) {
                                                while ($data = mysqli_fetch_assoc($next) ) {
                                        ?>   <?=$data['judul'];?>
                
                                    	    <?php
                                                }
                                            }
                                        	?>
</a>. All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Footer Bottom ENd-->
                    
                </div>
            </div>
        </footer>
        <!--Footer End-->
    	
        <!--Back to Top Start-->
        <a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
        <!--Back to Top End-->
        
    </div>
    <!--Whole Container End-->

<!--jQuery files-->

<script type="text/javascript" src="js/vendor/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/vendor/modernizr.custom.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/search.js"></script>

<!--jQuery Retina-->
<script type="text/javascript" src="js/retina.js"></script>

<!--Particle Background js file-->
<script type="text/javascript" src="js/jquery.particleground.js"></script>

<!--jQuery FlexSlider-->
<script type="text/javascript" src="bower_components/FlexSlider/jquery.flexslider.js"></script>

<!--jQuery FancyBox-->
<script type="text/javascript" src="bower_components/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="bower_components/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="bower_components/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="bower_components/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!--jQuery Isotope-->
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<!--jQuery Imageloaded-->
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>

<!--FitVids js file-->
<script type="text/javascript" src="js/jquery.fitvids.js"></script>

<!--Placeholder js file-->
<script type="text/javascript" src="js/placeholder.js"></script>

<!--Custom js file-->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
