<!doctype html>
<html lang="en">
  <head>
	  <title>Dino Cooks - Capstone Project - <?=$title?></title>
		<meta charset="utf-8"/>

		<!--favicon start-->
		<link rel="icon" type="image/png" href="images/favicon-16x16.png"/>
		<link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
		<!--favicon end-->

		<!--theme color-->
		<meta name="theme-color" content="#8a223d"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cousine:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <script src="owlcarousel/owl.carousel.min.js"></script>

		<link rel="stylesheet"
		      type="text/css"
					href="styles/stylesheet_desktop.css"
					media="screen and (min-width: 768px)"
		/>
    <link rel="stylesheet"
		      type="text/css"
					href="styles/stylesheet_menu.css"
					media="screen and (min-width: 768px)"
		/>
    <link rel="stylesheet"
		      type="text/css"
					href="styles/stylesheet_cart.css"
					media="screen and (min-width: 768px)"
		/>
		<link rel="stylesheet"
		      type="text/css"
					href="styles/stylesheet_mobile.css"
					media="screen and (max-width: 767px)"
		/>

		<link rel="stylesheet"
		      type="text/css"
					href="styles/stylesheet_print.css"
					media="print"
		/>
		<!--[if lt IE 9]>
      <script src="script/ie81.css"></script>
		  <style>
			  body{
					box-sizing: border-box;
					font-family: 'Roboto', Arial, sans-serif;
					font-size: 16px;
					margin: 0;
					background-color: #f9f9f9;
					height: auto;
				}
			  header, section, footer, aside,
				  nav, main, article, figure {
				  display: block;
				}
				header, footer, main, #wrapper, #ie_msg{
				  width: 960px;
					margin: 0 auto;
				}
				#ie_msg{
				  color: #a00;
					text-transform: uppercase;
					height: 200px;
					font-size: 30px;
				}

			</style>

			<div id="ie_msg">
        Your Browser is not <strong>SUPPORTED</strong> by our
				website, please upgrade your browser to a modern BROWSER or
				upgrade to a modern version of Internet Explorer to view all
				Modern Web Features.
				Thank you.
			</div>
    <![endif]-->

		<!--[if IE 9]>
      <link rel="stylesheet" type="text/css" href="style/ie9.css"/>
		  This browser does not support our Slideshow!
		  Please Upgrade to a newer browser
    <![endif]-->

		<!--css styles-->
    <!--css styles-->
    <style>
      <?php
        if ($title == 'Contact us' || $title == 'Register') {
          include '../views/inc/in_page_css.inc.php';
        }
      ?>
    </style>
    <!--css styles-->
    <style>
      #wrapper #content{
        height: 100%;
      }
    </style>
</head>
<body id="<?=$slug?>">
	<div id="top_line_div"><!--dark line across--></div>
	<div id="bg_header"><!--color across the view port--></div>
	  <div id="wrapper">
		  <header>
			<!--This is a div for the logo and tag line-->
			  <div id="logo_tagline">
				  <div id="logo">
            <a href="?page=home">
              <?php include '../views/inc/logo.svg.php';?>
            </a>
          </div><!--onerror this.src-->
					<div id="tagline"><h1><?=$title?></h1></div>
				</div>
			<!--End of div for logo and tag line-->

	    <!--Nav menu it will have 5 links/buttons-->
			  <?php include '../views/inc/nav.inc.php';?>
			</header>


			<div id="content">
        <?php if(!empty($flash_message)) echo "<h2>Message!!: $flash_message</h2><br/><h3>Thanks for registering!!</h3>"; ?>
        <?php if (!isset($_GET['page'])) :?>
        <?php elseif(empty($_SESSION['cart'])) :?>
          
        <?php elseif (in_array($_GET['page'], $no_checkout)):?>
        <?php elseif($_GET['page'] != 'checkout') :?>
			  <div id="order_online"><a href="?page=checkout" title="cart">CHECK OUT</a>
          <?php require 'cart.inc.php';?>
        </div>
      <?php endif;?>
