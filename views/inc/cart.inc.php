<?php if(!empty($_SESSION['cart'])) : ?>
<div id="cart">
  <p><strong>Your Cart:</strong></p>
  <p><?php echo count($_SESSION['cart']);?></p>
  <?php foreach ($_SESSION['cart'] as $cart_products) : ?>

  <?php endforeach; ?>
  <p><a id="clear" href="/?page=services&clear=1" title="clear">Clear Cart!</a></p>
</div>
<?php endif;?>
<?php /*

<p><p><small><?=$cart_products['name'];?> $<?=$cart_products['price'];?></small></p>
  <small><a href="/?page=checkout">Checkout now!</a></small></p>

</p>*/?>
