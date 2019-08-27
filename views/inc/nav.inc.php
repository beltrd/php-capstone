<nav>
<div id="menu">
<!---->

  <a href="#" id="menulink" title="Hamburger Menu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </a>

<!---->
<!--start of menu list-->
  <ul id="navlist">
    <li><a href="?page=home" class="pg_one" title="<?=$title?> Page">home</a></li><!--Home-->
    <li><a href="?page=services" class="pg_two" title="Service Page">Menu</a></li><!--Services-->
    <li><a href="?page=about" class="pg_three" title="About Page">about us</a></li><!--about us-->
    <li><a href="?page=contact" class="pg_four" title="Contact Page">contact us</a></li><!--contact us-->
    <li><a href="?page=reviews" class="pg_five" title="Reviews">reviews</a></li><!--reviews-->
  </ul>
<!--end of menu list-->

<!--Register || Login list top of the page-->
<?php if (isset($_SESSION['admin'])) {
  echo "<ul id=\"menu-reg-log\">
          <li><a href=\"?page=kitchen\" title=\"register\">admin panel</a></li>
          <li><a href=\"?page=logout\" title=\"login\">logout</a></li>
        </ul>";
} elseif(!isset($_SESSION['logged_in'])){
  echo "<ul id=\"menu-reg-log\">
          <li><a href=\"?page=register\" title=\"register\">register</a></li>
          <li><a href=\"?page=login\" title=\"login\">login</a></li>
        </ul>";
}  else {
  echo "<ul id=\"menu-reg-log\">
          <li><a href=\"?page=profile\" title=\"profile\">profile</a></li>
          <li><a href=\"?page=logout\" title=\"register\">logout</a></li>
        </ul>";
}?>
<!--need to make a logout button for loged in account-->
</div>
</nav>
