                        <?php
                            $query2 = "SELECT * FROM setting";
                            $next = Query($query2);
                            if (mysqli_num_rows($next) > 0) {
                                while ($data = mysqli_fetch_assoc($next) ) {
                        ?>   
<!DOCTYPE HTML>
<html lang="id">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?=$title; ?> | Blog's</title>
<link rel="shortcut icon" href="images/ico.png">
<meta name="description" content="<?=$data['deskripsi']?>"/>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123330560-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123330560-1');
</script>


<meta name="keywords" content="tutorial, seo, blog, script php, script delphi, open source" />
<!--Bootstrap Element and Grid System-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

<!--Main Elements CSS-->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!--Font Awesome-->
<link href="fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<!--FlexSlider CSS-->
<link href="bower_components/FlexSlider/flexslider.css" rel="stylesheet" type="text/css">

<!--FancyBox CSS-->
<link rel="stylesheet" href="bower_components/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<link rel="stylesheet" href="bower_components/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<link rel="stylesheet" href="bower_components/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

<!--Color Scheme Setting-->
<link href="css/color.css" rel="stylesheet" type="text/css">

</head>

<body>
	<!--Pre Loading Start-->
    <div class="preloader-container">
    	<div class="preloader-particles-wrapper"></div>
    </div>
    <!--Pre Loading End-->
	
    <!--Background Start-->
	<div class="bgimage bgimage-cover" data-image-src="images/background.gif">
    	<div id="particles"></div>
    	<div class="bg-overlay" data-bg-color="#353c40" data-opacity="0.85"></div>
    </div>
    <!--Background End-->
    
    <!--Whole Container Start-->
    <div class="container-wrapper">
    	
        <!--Overlay Search Start-->
        <div class="search-overlay overlay-hugeinc">
        	<div class="container">
            	
                <!--Search Close Start-->
                <div class="overlay-close-wrapper">
            		<div class="overlay-close"></div>
                </div>
                <!--Search Close End-->
            	
                <!--Search Input Start-->
            	<div class="search-input">
                	<div class="search-form">
                        <form action="index.php" method="GET">
                            <input type="search" name="search" placeholder="Search and hit enter">
                        </form>
                    </div>
                </div>
                <!--Search Input Close-->
            </div>
        </div>
        <!--Overlay Search End-->
        
    	<!--Header Start-->
        <header>
        	<div class="container">
            
            	<!--Logo Start-->
        		<div class="logo">
                	<a href="index.php">
                    	<h1 style="font-family: 'Raph'; color:white; font-size:60px;"><?=$data['judul'];?></h1>
                    </a>
                    	<h6 style="font-family: 'GH'; color:white; font-size:20px;"><?=$data['deskripsi'];?></h6>

                    	<?php
                                }
                            }
                    	?>
                </div>
                <!--Logo End-->
                
                <!--Navigation Menu Start-->
                <div class="nav-menu">
                	
                    <!--Open Close Menu-->
                	<div class="burger-menu"><i class="fa fa-bars"></i></div>
                    
                    <!--Search Icon-->
                    <div id="trigger-overlay" class="search-open"><i class="fa fa-search"></i></div>
                    
                    <!--Menu Start-->
                    <ul>
                    	<li><a href="index.php">Home</a></li>
                        <li><a href="#">Category</a>
                        <ul>
                            <?php 
                    							$sql = "SELECT cat_name FROM cms_category ";
                    							$exec = Query($sql);
                    							if (mysqli_num_rows($exec) > 0) {
                    							while ($category = mysqli_fetch_assoc($exec)) {
            									?>
									<li><a href="index.php?category=<?php echo $category['cat_name'] ?>"><?php echo $category['cat_name'] ?></a></li>
									<?php
								}
							}	
						?>
                        
                        </ul>
                        </li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="Login.php">Login</a></li>
                    </ul>
                    <!--Menu End-->
                    
                </div>
                <!--Navigation Menu End-->
                
            </div>
        </header>
        <!--Header End-->
        <div class="content-wrapper">
        	<div class="container">
                <div class="layout-divider"></div>
