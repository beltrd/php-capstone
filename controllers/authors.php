<?php

// authors.php

$dbh = new PDO('sqlite:database1.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$_GET['author_id'] = '4';

// if get author_id is set, select that authors
if(isset($_GET['author_id'])){
  $author_id = intval($_GET['author_id']);
  // query
  $query = "SELECT * FROM author WHERE author_id = :author_id";
  // prepare query
  $stmt = $dbh->prepare($query);
  // bind params
  $stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
  // excecute query
  $stmt->execute();
  // fetch one result
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
  // else select all authors
  // query
  $query = "SELECT * FROM author";
  // oreoare query
  $stmt = $dbh->prepare($query);
  // execute query
  $stmt->execute();
  // fetch all results
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//var_dump($result);
?>
  <!-- if single author output detail in HTML-->
  <?php if(isset($_GET['author_id'])) :?>
    <p data-id="<?=$result['author_id']?>"><strong>Author Name: </strong><?=$result['name']?></p>
    <p><strong>Author Country: </strong><?=$result['country']?></p>
    <img src="images/authors/<?=$result['image']?>" alt="<?=$result['name']?>" />
  <?php else : ?><!-- else -->
    <!-- output list in html -->
    <ul>
    <?php foreach($result as $row) : ?>
      <li data-id="<?=$row['author_id']?>"><strong>Author Name: </strong><?=$row['name']?></li>
    <?php endforeach; ?>
    </ul>
  <?php endif;?>
