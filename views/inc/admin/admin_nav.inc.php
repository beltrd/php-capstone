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
    <li><a href="?page=a_products" class="pg_one" title="<?=$title?> Page">Products</a></li><!-- products -->
    <li><a href="?page=a_invoice" class="pg_two" title="Invoice">Invoice</a></li><!-- invoices -->
    <li><a href="?page=a_customers" class="pg_three" title="Customers">Customers</a></li><!-- customers -->
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
