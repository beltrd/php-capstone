<?php

require '../views/inc/header.inc.php';

?>
			  <h2><?=$title?></h2>
				<h3><?=((!empty($_SESSION['error'])) ? $v->esc($_SESSION['error']) :  '')?></h3>
				<table>
					<tr>
						<th>NAME</th>
						<th>PRICE</th>
					</tr>
				<?php foreach ($cart as $producto) : ?>
					<tr>
						<td><?=$producto['name']?></td>
						<td><?=$producto['price']?></td>
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
					</table>

					<div id="payment">
						<form action="?page=payment" method="post">
							<table id="confirm" class="cart">
								<tr>
									<th>Card Number</th>
									<td><input type="text" name="card_number" /></td>
									<?php if(!empty($errors['card_number'])) : ?>
										<td>
											<?=$errors['card_number']?>
										</td>
		 							<?php endif; ?>
								</tr>
								<tr>
									<th>Card Holder Name</th>
									<td><input name="card_name" /></td>
									<?php if(!empty($errors['card_name'])) : ?>
										<td>
											<?=$errors['card_name']?>
										</td>
		 							<?php endif; ?>
								</tr>
								<tr>
									<th class="right">Expiry Date</th>
									<td><input type="text" name="card_exp" max="4" placeholder="yymm" /></td>
									<?php if(!empty($errors['card_exp'])) : ?>
										<td>
											<?=$errors['card_exp']?>
										</td>
		 							<?php endif; ?>
								</tr>
								<tr>
									<th class="right">CVV</th>
									<td><input type="text" name="card_cvv" maxlength="6" value="<?=(!empty($_POST['card_cvv'])) ? $v->esc_attc($_POST['card_cvv']) : ''; ?>"/></td>
									<?php if(!empty($errors['card_cvv'])) : ?>
										<td>
											<?=$errors['card_cvv']?>
										</td>
		 							<?php endif; ?>
								</tr>
								<tr>
									<td><input type="hidden" name="csrf_token" value="<?=$csrf_token?>"></td>
									<td><button type="submit">Make Payment</button></td>
								</tr>
							</table>
						</form>
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
