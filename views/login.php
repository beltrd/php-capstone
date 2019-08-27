<?php
require '../views/inc/header.inc.php';
?>
			  <h2><?=$slug?></h2>
				<h3><?=((!empty($_SESSION['error'])) ? $_SESSION['error'] :'')?></h3>
				<?php if(isset($msg)) :?>
					<div id="msg">
						<?=$msg?>
					</div>
				<?php endif;?>
        <form method="post" action="?page=login" id="login-form">
          <fieldset>
            <legend><?=$title?> to your account!</legend>
            <p><input id="username" type="text" name="email" placeholder="email"/></p>
            <p><input id="password" type="password" name="password" placeholder="password"/></p>
            <p><button type="submit" id="login-btn"><?=$title?></button></p>
          </fieldset>
        </form>
			</div>
		</div>
		<!--Footer start-->
		<?php include '../views/inc/footer.inc.php';?>
		<!--footer end-->
	</body>
</html>
