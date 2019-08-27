<?php

require '../views/inc/admin/header_admin.inc.php';

?>
				<!-- page title -->
				<h2><?=$title?></h2>
				<h3>Search</h3>
				<?php require '../views/inc/searchAdmin.inc.php';?>
				<!-- sub title -->
				<h3><?=$sub_title?></h3>
				<!-- Flash message -->
				<?php if(isset($_SESSION['success'])) :?>
					<!-- only appears if session is set -->
					<h3><?=$_SESSION['success']?></h3>
					<?php unset($_SESSION['success']); // unsets the session message?>
				<?php endif;?>
				<table id="<?=$title?>">
					<caption>
						<a href="?page=product_create" title="add product">add product</a>
					</caption>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>category</th>
						<th>country of origin</th>
						<th>price</th>
						<th>edit/delete</th>
					</tr>
					<?php foreach($products as $row) : ?>
					<tr>
						<td><?=$row['product_id'];?></td>
						<td><?=$row['product_name']?></td>
						<td><?=$row['category']?></td>
						<td><?=$row['country_of_origin']?></td>
						<td><?=$row['price']?></td>
						<!-- links to edit and delete-->
						<td>
							<!-- edit sends product id -->
							<a href="?page=product_edit&product_id=<?=$row['product_id'];?>" title="<?=$row['product_name']?>">edit</a>
							<!-- delete sends product id -->
							<a href="?page=product_delete&product_id=<?=$row['product_id'];?>" title="<?=$row['product_name']?>">delete</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<div id="clear"></div>
			</div>
		  <!--about us content ends -->

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
