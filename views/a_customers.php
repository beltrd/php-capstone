<?php

require '../views/inc/admin/header_admin.inc.php';

?>
				<!-- page title -->
				<h2><?=$title?></h2>
				<!-- sub title -->
				<h3><?=$sub_title?></h3>
				<h3><?=((!empty($_SESSION['error'])) ? $_SESSION['error'] :  '')?></h3>
				<!-- Flash message -->
				<?php if(isset($_SESSION['success'])) :?>
					<!-- only appears if session is set -->
					<h3><?=$_SESSION['success']?></h3>
					<?php unset($_SESSION['success']); // unsets the session message?>
				<?php endif;?>
				<table id="<?=$title?>">
					<tr class="admin_table">
						<th>customer id</th>
						<th>first name</th>
						<th>last name</th>
						<th>city</th>
						<th>province</th>
						<th>country</th>
						<th>email</th>
						<th>created_at</th>
						<th>edit delete</th>
					</tr>
					<?php foreach($customer as $row) : ?>
					<tr class="admin_table">
						<td><?=$row['customer_id'];?></td>
						<td><?=$row['first_name']?></td>
						<td><?=$row['last_name']?></td>
						<td><?=$row['city_name']?></td>
						<td><?=$row['province_name']?></td>
						<td><?=$row['country_name']?></td>
						<td><?=$row['email_addr']?></td>
						<td><?=$row['created_at']?></td>
						<td>
							<a href="?page=customer_edit&customer_id=<?=$row['customer_id'];?>" title="">edit</a>
							<a href="?page=customer_delete&customer_id=<?=$row['customer_id'];?>" title="">delete</a>
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
	</body>
</html>
