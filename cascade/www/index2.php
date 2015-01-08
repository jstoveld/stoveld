<?php

	error_reporting(E_ALL ^ E_NOTICE);

	require_once('config.php');
	require_once('class/Cascade.class.php');
	
	$Cascade=new Cascade($page,$options);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

    <head>

        <title><?php $Cascade->_getTitle(); ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="keywords" content="<?php $Cascade->_getMeta('keywords'); ?>"/>
		<meta name="description" content="<?php $Cascade->_getMeta('description'); ?>"/>

        <link rel="stylesheet" type="text/css" href="style/nivo-slider.css"/> 	
        <link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/> 
        <link rel="stylesheet" type="text/css" href="style/jquery.captify.css"/> 
        <link rel="stylesheet" type="text/css" href="style/jquery.jScrollPane.css"/>
        <link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css"/> 			
        <link rel="stylesheet" type="text/css" href="style/base.css"/> 
        <link rel="stylesheet" type="text/css" href="style/page.css"/> 
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Share" />
				
		<script type="text/javascript">
			var mainURL='<?php echo dirname($_SERVER['SCRIPT_NAME']).'/'; ?>';
		</script>
		
        <script type="text/javascript" src="script/linkify.js"></script>
        <script type="text/javascript" src="script/jquery.min.js"></script>
        <script type="text/javascript" src="script/jquery.easing.js"></script>
		<script type="text/javascript" src="script/jquery.isotope.js"></script>
        <script type="text/javascript" src="script/jquery.captify.js"></script>
        <script type="text/javascript" src="script/jquery.blockUI.js"></script>
        <script type="text/javascript" src="script/jquery.qtip.min.js"></script>
        <script type="text/javascript" src="script/jquery.fancybox.js"></script>
        <script type="text/javascript" src="script/jquery.ba-bqq.min.js"></script>
        <script type="text/javascript" src="script/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="script/jquery.jScrollPane.js"></script>
		<script type="text/javascript" src="script/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript" src="script/jquery.carouFredSel.packed.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   

        <script type="text/javascript" src="script/script.js"></script>
        <script type="text/javascript" src="script/cascade.js"></script>
        <script type="text/javascript" src="plugin/contact-form/contact-form.js"></script>

    </head>

    <body class="background-carbon">
				
        <!-- Header -->
        <div class="header main box-center clear-fix">

            <div class="layout-4060 clear-fix overflow-fix">

                <div class="layout-4060-left">					
                    <a href="<?php $Cascade->_getURL('main'); ?>" class="header-logo-link"></a> 
                    <h1>Anna Brown</h1>
                    <h5>professional photographer &amp; web developer</h5>					
                </div>

                <div class="layout-4060-right">
                    <ul class="no-list header-menu">
                        <li class="header-menu-download"><a href="#">Download my vCard</a></li>
                        <li class="header-menu-phone">1.800.353.252</li>
                        <li class="header-menu-mail"><a href="#">anna.brown@mail.com</a></li>
                    </ul>
                </div>			

            </div>

        </div>
        <!-- /Header -->


        <!-- Content -->
        <div class="content main box-center">

            <!-- Cascade -->
            <div class="cascade preloader">

                <!-- Box menu -->
                <ul class="cascade-menu overflow-fix">
                    <li id="tab-1" class="blue-info">
                        <a href="<?php $Cascade->_getURL('about'); ?>">
                            <span class="title">About</span>
                            <span class="subtitle">About Me</span>
                        </a>
                    </li>
                    <li id="tab-2" class="lime-camera">
                        <a href="<?php $Cascade->_getURL('portfolio'); ?>">
                            <span class="title">Portfolio</span>
                            <span class="subtitle">My Works</span>
                        </a>
                    </li>
                    <li id="tab-3" class="yellow-document">		
                        <a href="<?php $Cascade->_getURL('resume'); ?>">
                            <span class="title">Resume</span>
                            <span class="subtitle">Personal Profile</span>
                        </a>
                    </li>
                    <li id="tab-4" class="green-people">		
                        <a href="<?php $Cascade->_getURL('interests'); ?>">
                            <span class="title">My Interests</span>
                            <span class="subtitle">Free time</span>
                        </a>
                    </li>
                    <li id="tab-5" class="red-mail">		
                        <a href="<?php $Cascade->_getURL('contact'); ?>">
                            <span class="title">Contact</span>
                            <span class="subtitle">Get In Touch</span>
                        </a>
                    </li>
                </ul>
                <!-- /Box menu -->

                <!-- Window -->
                <div class="cascade-window">

                    <!-- Close bar -->
                    <div class="cascade-window-close-bar">
                        <a href="<?php $Cascade->_getURL('main'); ?>"></a>
                    </div>
                    <!-- /Close bar -->

                    <!-- Page content -->
                    <div class="cascade-window-content">
						<?php $Cascade->loadFile(); ?>
					</div>
                    <!-- /Page content -->

                    <!-- Footer -->
                    <div class="cascade-window-footer"></div>
                    <!-- /Footer -->

                </div>
                <!-- /Window -->

                <!-- Navigation -->
                <a href="#" class="cascade-navigation cascade-navigation-prev"></a>
                <a href="#" class="cascade-navigation cascade-navigation-next"></a>
				<a href="#" class="cascade-navigation cascade-navigation-slider-prev"></a>
                <a href="#" class="cascade-navigation cascade-navigation-slider-next"></a>
                <!-- /Navigation -->

            </div>
            <!-- /Cascade -->

        </div>
        <!-- /Content -->


        <!-- Footer -->
        <div class="footer">

            <hr class="footer-line" />

            <div class="main box-center layout-7030 clear-fix overflow-fix">

                <!-- Latest tweets -->
                <div class="layout-7030-left latest-tweets">
                    <div id="latest-tweets"></div>
                </div>
                <!-- /Latest tweets -->

                <!-- Social icons -->
                <div class="layout-7030-right">

                    <ul class="no-list social-list">
                        <li>Connect</li>
                        <li><a href="#" class="social-rss"></a></li>
                        <li><a href="#" class="social-facebook"></a></li>
                        <li><a href="#" class="social-twitter"></a></li>
                        <li><a href="#" class="social-google"></a></li>
                        <li><a href="#" class="social-skype"></a></li>
                    </ul>
                    
                </div>
                <!-- /Social icons -->

            </div>

        </div>
        <!-- /Footer -->
		
		<script type="text/javascript">
			
			var page=<?php echo Cascade::encode($page); ?>;
			var options=<?php echo Cascade::encode($options); ?>;
			var request='<?php echo $Cascade->getRequest(); ?>';
			
			$(document).ready(function() 
			{
				$('.cascade').cascade(page,options,request);
			});
			
		</script>

    </body>

</html>