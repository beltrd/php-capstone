<?php

require '../views/inc/admin/header_admin.inc.php';

?>
				<!-- page title -->
				<h2><?=$title?></h2>
				<!-- sub title -->
				<h3><?=$sub_title?></h3>
				<!-- Flash message -->
				<?php if(isset($_SESSION['success'])) :?>
					<!-- only appears if session is set -->
					<h3><?=$_SESSION['success']?></h3>
					<?php unset($_SESSION['success']); // unsets the session message?>
				<?php endif;?>
				<table id="<?=$title?>">
					<!--<caption>
						<a href="?page=invoice_create" title="add product">add invoice</a>
					</caption>-->
					<tr class="admin_table">
						<th>invoice id</th>
						<th>customer id</th>
						<th>invoice date</th>
						<th>invoice comments</th>
						<th>taxes</th>
						<th>sub total</th>
						<th>total</th>
						<!--<th>edit/delete</th>-->
					</tr>
					<?php foreach($invoice as $row) : ?>
					<tr class="admin_table">
						<td><?=$row['invoice_id'];?></td>
						<td><?=$row['customer_id']?></td>
						<td><?=$row['invoice_date']?></td>
						<td><?=$row['invoice_comments']?></td>
						<td><?=$row['taxes']?></td>
						<td><?=$row['sub_total']?></td>
						<td><?=$row['total']?></td>
						<!--<td>
							<a href="?page=invoice_edit&invoice_id=<?=$row['invoice_id'];?>" title="">edit</a>
							<a href="?page=invoice_delete&invoice_id=<?=$row['invoice_id'];?>" title="">delete</a>
						</td>-->
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
