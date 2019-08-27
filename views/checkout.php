<?php

require '../views/inc/header.inc.php';

?>
			  <h2><?=$title?></h2>
				<table>
					<tr>
						<th>NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
					</tr>
				<?php foreach ($cart as $producto) : ?>
					<tr>
						<td><?=$producto['name']?></td>
						<td><?=$producto['price']?></td>
						<td><?=$qty?></td>
					</tr>
			  <?php endforeach; ?>
					<tr>
						<td >Subtotal:</td>
						<td>$<?=number_format($subtotal, 2)?></td>
					</tr>
					<tr>
						<td >PST:</td>
						<td>$<?=number_format($pst, 2)?></td>
					</tr>
					<tr>
						<td >GST:</td>
						<td>$<?=number_format($gst, 2)?></td>
					</tr>
					<tr>
						<td >TOTAL:</td>
						<td>$<?=number_format($total, 2)?></td>
					</tr>
					<tr>
						<td>
							<a href="?page=services">Continue Shopping</a>
						</td>
						<td>
							<a href="?page=payment">Complete Purhcase</a>
						</td>
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
