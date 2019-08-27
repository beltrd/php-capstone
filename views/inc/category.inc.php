<!--This is categories for services page and detail page-->
<div id="category">
  <h3 >categories</h3>
  <ul>
    <!--for each loop to display the categories-->
    <?php foreach($categories as $category) : ?>
    <!--li tag for category name-->
    <li>
      <!---->
      <a href="/?page=services&category_id=<?php echo $category['category_id']?>">
        <?php echo $category['name']?>
        <!--Display the name of category-->
      </a>
    </li>
    <?php endforeach; ?>
    <!--end of the foreach-->
  </ul>
</div>
