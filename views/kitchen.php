<?php

require '../views/inc/admin/header_admin.inc.php';

?>
			  <h2><?=$title?></h2>
				<div id="main_view">
					<!--This will display the aggregate function output-->
					<div id="out_left">
						<!--for products-->
						<div id="a_product">
							<div id="avg_p">
								<small><h3>Avg. Product Price</h3></small>
								<p><?=$aggregate_product['avg']?></p>
							</div>
							<div id="max_p">
								<small><h3>max. Product Price</h3></small>
								<p><?=$aggregate_product['max']?></p>
							</div>
							<div id="min_p">
								<small><h3>min. Product Price</h3></small>
								<p><?=$aggregate_product['min']?>
							</div>
						</div>
						<!--for invoices-->
						<div id="a_invoice">
							<div id="avg_i">
								<small><h3>avg. invoice Price</h3></small>
								<p><?=$aggregate_invoice['avg']?></p>
							</div>
							<div id="max_i">
								<small><h3>max. invoice Price</h3></small>
								<p><?=$aggregate_invoice['max']?></p>
							</div>
							<div id="min_i">
								<small><h3>min. invoice Price</h3></small>
								<p><?=$aggregate_invoice['min']?></p>
							</div>
							<div id="sum_i">
								<small><h3>Total sales</h3></small>
								<p><?=$aggregate_invoice['sum']?></p>
							</div>
						</div>
					</div>
					<div id="out_right">
						<div id="recent_customers">
							<h3>Most recent customers</h3>
							<table >
							  <tr>
							    <th>id</th>
							    <th>name</th>
							    <th>username</th>
							  </tr>
								<?php foreach($recent_customers as $row) : ?>
							  <tr>
							    <td><?=$row['id']?></td>
							    <td><?=$row['name']?></td>
							    <td><?=$row['email']?></td>
							  </tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
				<div id="clear"></div>
			</div>
		  <!--about us content ends -->

		</div>
		<!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
	</body>
</html>
