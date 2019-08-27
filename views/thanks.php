<?php

require '../views/inc/header.inc.php';

?>
			  <h2><?=$title?></h2>
				
				<table>
					<tr>
						<th>Product id</th>
						<th>Invoice id</th>
						<th>Product Name</th>
						<th>Price</th>
					</tr>
					<?php foreach ($inter as $key => $value) :?>
					<tr>
						<td><?=$value['product_id']?></td>
						<td><?=$value['invoice_id']?></td>
						<td><?=$value['product_name']?></td>
						<td><?=$value['price']?></td>
					</tr>
				<?php endforeach;?>
					<tr>
						<th>invoice date</th>
						<th>taxes</th>
						<th>sub total</th>
						<th>total</th>
					</tr>
					<tr>
						<td><?=$invoice_all[0]['invoice_date']?></td>
						<td><?=$invoice_all[0]['taxes']?></td>
						<td><?=$invoice_all[0]['sub_total']?></td>
						<td><?=$invoice_all[0]['total']?></td>
					</tr>
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
