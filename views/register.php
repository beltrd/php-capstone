<?php

require '../views/inc/header.inc.php';
?>
			  <h2><?=$slug?> form</h2>


				<?php if($success == false){
					echo "<div id=\"form\"><!--made a div for the form-->
						<!--form starts here-->";
						include '../views/inc/register_form.inc.php';
						echo"<!--end of the form -->

					</div>";
				} else if(isset($_SESSION['logged_in'])){
					header('Location: ?page=profile');
				}?>

			</div>
		</div>
		<!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
	</body>
</html>
