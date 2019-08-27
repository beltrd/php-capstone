<?php
require '../views/inc/header.inc.php';
?>
				<h2>Search</h2>
				<h3><?=((!empty($_SESSION['error'])) ? $_SESSION['error'] :  '')?></h3>
				<h3><?=((!empty($_SESSION['admin_error'])) ? $_SESSION['admin_error'] :  '')?></h3>
				<?php require '../views/inc/search.inc.php';?>
			  <h2><?=$title?></h2>
				<?php require '../views/inc/menu.inc.php'?>
			</div>


		</div>
    <!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
		<script>
			$(document).ready(function (){
				handle_input();
			});
			function handle_input(){
				$("#search_form input").keyup(function(){
					var data = $(this).val();
					$.get('?page=search&search='+data, function(response){
						$('#live_search').html(response);
					});
				});
			}
		</script>

		<noscript>Sorry, your browser does not support JavaScript!</noscript>
	</body>
</html>
