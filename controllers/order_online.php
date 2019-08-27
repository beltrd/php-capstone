<?php

// work in progress do no mark this hahahaha

/**
*Description: assigment 2 - Register PHP Form
*@file register.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-02
**/
$title = 'Order Online';
$slug = "order_online";
//require files to do anything, without it will crash

?><body id="<?=$slug?>">
	<div id="top_line_div"><!--dark line across--></div>
	<div id="bg_header"><!--color across the view port--></div>
	  <div id="wrapper">
		  <header>

			<!--This is a div for the logo and tag line-->
			  <div id="logo_tagline">
				  <div id="logo">
            <?php include '../includes/logo.svg.php';?></div><!--onerror this.src-->
					<div id="tagline"><h1><?=$title?></h1></div>
				</div>
			<!--End of div for logo and tag line-->

	    <!--Nav menu it will have 5 links/buttons-->
			  <?php include '../includes/nav.include.php';?>
			</header>


			<div id="content">
			  <div id="order_online"><a href="order_online.php" title="order online">ORDER ONLINE</a></div>
			  <h2><?=$slug?></h2>
			</div>
		</div>
		<!--Footer start-->
		<?php include '../includes/footer.include.php';?>
		<!--footer end-->
	</body>
</html>
