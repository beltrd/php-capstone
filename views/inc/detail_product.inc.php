<div id="detail_product">
  <div id="img">
    <a href="?page=detail&product_id=<?=$product['product_id']?>" title="<?=$product['product_name'];?>">
      <img src="\images\default_img.jpg" alt="<?=$product['product_name'];?>" width="500" height="320"/>
    </a>
  </div>
  <div id="detail">
    <p><strong><?=$product['product_name'];?></strong></p>
    <p><strong>category: </strong> <?=$product['category'];?></p>
    <p><strong>country of origin: </strong><?=$product['country_of_origin'];?></p>
    <p><strong>description: </strong><?=$product['description'];?></p>
    <p><strong>ingredients: </strong><?=$product['ingredients'];?></p>
    <p><strong>nutritional values: </strong><?=$product['nutritional_values'];?></p>
    <p><strong>$<?=$product['price'];?></strong></p>
    <p>
      <form action="?page=cart" method="post">
        <input type="hidden" name="product_id" value="<?=$product['product_id']?>" />
        <button type="submit">add to cart</button>
      </form>
    </p>
  </div>
</div>
