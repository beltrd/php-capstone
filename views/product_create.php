<?php

require '../views/inc/admin/header_admin.inc.php';

?>
			  <h2><?=$title?></h2>
				<form id="product_edit" method="post" action="/?page=product_create">
					<table>
						<?php foreach ($product as $key => $value) :?>
							<?php if($key == 'product_id') :?>
								<tr>
									<input type="hidden"
								         id="<?=$key?>"
								         name="<?=$key?>"
								         placeholder=""
												 value=""/>
								</tr>
							<?php else:?>
								<tr>
									<th><?=$key?></th>
									<td><input type="text"
								         id="<?=$key?>"
								         name="<?=$key?>"
								         placeholder=""
												 value="<?=(!empty($_POST[$key])) ? $v->esc($_POST[$key]) : ''; ?>"/>
									</td>
									<?php if(!empty($errors[$key])) : ?>
										<td>
											<?=$errors[$key]?>
										</td>
		 							<?php endif; ?>
								</tr>
							<?php endif;?>
						<?php endforeach;?>
						<tr>
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
