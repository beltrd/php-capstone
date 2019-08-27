<?php
require '../views/inc/header.inc.php';
?>
			  <h2><?=$slug?> form</h2>
        <?php
        foreach ($user as $key => $value) {
          $label = ucwords(str_replace('_', ' ', $key));
          echo "<p><strong>".$label."</strong> : ". $value ."</p>";
        }?>
			</div>
		</div>
		<!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
	</body>
</html>
