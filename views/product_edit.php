<?php

require '../views/inc/admin/header_admin.inc.php';

?>
			  <h2><?=$title?></h2>
				<form id="product_edit" method="post" action="/?page=product_edit">
					<table>
						<?php foreach ($product as $key => $value) :?>
							<?php if($key == 'product_id') :?>
								<tr>
									<th><?=$key?></th>
									<td><strong><?=$value?></strong></td>
									<td><input type="hidden"
								         id="<?=$key?>"
								         name="<?=$key?>"
								         placeholder="<?=$value?>"
												 value="<?=((!empty($value)) ? $v->esc($value) : '')?>"/></td>
								</tr>
							<?php else:?>
								<tr>
									<th><?=$key?></th>
									<td><?=$value?></td>
									<td><input type="text"
								         id="<?=$key?>"
								         name="<?=$key?>"
								         placeholder="<?=$value?>"
												 value="<?=((!empty($value)) ? $v->esc($value) : '')?>"/></td>
								</tr>
							<?php endif;?>
						<?php endforeach;?>
						<tr>
							<td></td>
							<td><input type="hidden" name="csrf_token" value="<?=$csrf_token?>"></td>
							<td><input id="submit" type="submit" value="SUBMIT" name="submit" /></td>
						</tr>
					</table>

				</form>
				<div id="clear"></div>
			</div>
		  <!--about us content ends -->

		</div>
		<!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
	</body>
</html>
