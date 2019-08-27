<?php foreach($products as $row) : ?>
    <div class="product">

      <div class="img">
        <a title="<?=$row['product_name'];?>" href="?page=detail&product_id=<?=$row['product_id']?>">
          <!--<img src="images/covers/<?=$row['image'];?>" alt="<?=$row['product_name'];?>" />-->
          <img src="/images/default_img.jpg" alt="<?=$row['product_name'];?>" width="250" height="160" />
        </a>
      </div>
      <div class="item-content">
        <p>
          <strong><?=$row['product_name'];?></strong><br/>
          <strong>category: </strong> <?=$row['category'];?><br/>
          <strong>country of origin: </strong><?=$row['country_of_origin'];?><br/>
          <strong>calories: </strong><?=$row['calories'];?><br/>
          <strong>$<?=$row['price'];?></strong><br/>
        </p>
        <form action="?page=detail&product_id=<?=$row['product_id']?>" method="post">
          <input type="hidden" name="product_id" value="<?=$row['product_id']?>" />
          <button type="submit">more details</button>
        </form>
        <p></p>
      </div>
    </div><!-- /$products -->
  <?php endforeach; ?>
