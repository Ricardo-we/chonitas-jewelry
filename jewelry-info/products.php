<link rel="stylesheet" href="../static/css/shop.css">
<?php 
    require("../components/navbar.php"); 
    require("../utilities_php/utilities.php");
?>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">    
    <div class="d-flex">
      <input class="form-control me-2" id="searchInput" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" id="searchButton">Search</button>
    </div>
  </div>
</nav>

<section class="products-container">
<?php echo show_products();?>
</section>
<script src="../static/js/search.js"></script>
<?php require("../components/footer.php") ?>