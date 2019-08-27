<?php
require '../views/inc/header.inc.php';
?>

				<div class="owl-carousel">
					<div class="item"><img src="images/img1.jpg" alt="Organic homemade meals"/></div>
					<div class="item"><img src="images/img2.jpg" alt="fresh ingredients in our burritos"/></div>
					<div class="item"><img src="images/img3.jpg" alt="100 percent pure beef in our burgers"/></div>
				</div>
				<h2 id="page_h2_main">Feature Dishes </h2>
			  <!--feature Items start-->
			  <section id="ft_section_content">
				  <div id="ft_section_container">
					  <div id="ft_section_posts">
						  <div class="ft_posts"><!--item 1-->
							  <div class="img">
							    <div id="post_img1"><a href="http://www.latina.com/food/recipes/classic-flan" title="Classic Flan" target="_blank"></a></div>
								</div>
								<h3>Classic Flan</h3>
								<div class="post_description">
								  Spanish dessert of sweetened egg custard with a caramel topping.
                  Flan is an open, rimmed, pastry or sponge base, containing a sweet or savoury filling.
                  Hispanic flan is a very rich, creamy custard usually adorned with a thin caramel-like sauce on top.
								</div>
								<div class="post_link"><a href="?page=services" title="details" target="_blank">Order Now</a></div>
							</div>
							<div class="ft_posts"><!--item 2-->
							  <div class="img">
									<div id="post_img2"><a href="https://www.elsalvadormipais.com/canoas-de-platano-receta" title="Canoas de platanos" target="_blank"></a></div>
								</div>

								<h3>Canoas de Plátano</h3>
								<div class="post_description">
								  Banana canoes are fried Plantains with milk and cornstarch.
									In El Salvador they are considered as a typical dish that can be enjoyed in
									the afternoon and accompanied by a typical drink usually just coffee.
								</div>
								<div class="post_link"><a href="?page=services" title="details" target="_blank">Order Now</a></div>
							</div>

							<div class="ft_posts"><!--item 3-->
							  <div class="img">
								  <div id="post_img3"><a href="https://www.laylita.com/recipes/shrimp-tortilla-soup/" title="Tortilla Soup" target="_blank"></a></div>
								</div>
								<h3>Shrimp Tortilla Soup</h3>
								<div class="post_description">
								  This shrimp tortilla soup is an ideal soup for anyone that loves spice + seafood combined into one delicious bite.
									It is made with shrimp, cilantro, onions, garlic, jalapeños, tomatoes, spices, seafood broth, lime juice and served with queso fresco, tortilla chips, and avocado.
								</div>
								<div class="post_link"><a href="?page=services" title="details" target="_blank">Order Now</a></div>
							</div>
						</div>

					</div>
				</section>
			<!--feature Items End-->
			<div class="clearfix"></div>
			</div>


		</div>
		<!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
	</body>
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				loop: true,
				autoplay:true,
				autoWidth:true,

				responsiveClass:true,
				animateOut: 'slideOutDown',
				animateIn: 'flipInX',
				items:1,
				margin:30,
				stagePadding:30,
				smartSpeed:100,
		    responsive:{
	        0:{
	            items:1,
            nav:true
	        },
	        600:{
	            items:3,
            nav:true
	        },
	        1000:{
	            items:5,
            nav:true
	        }
		    }
			});
		});
	</script>

</html>
