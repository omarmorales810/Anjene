<?php 
  require_once "../require/config.php";
  require_once "../require/display-error.php";
?>

<?php require_once "../require/header-categories.php" ?>

<div class="products">
  <div class="products-header">
    <div class="products-header-item">
      <span class="header-item header-item1 categories-header-item">Groceries & Pets</span>
      <span class="count-item" style="color: #707070;"></span>
    </div>
  </div>
  <div class="tiles">
    <?php 
      $sql = "SELECT * FROM product WHERE category_id = 4";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      $count = 0;
    
      if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $_SESSION["product_id"] = $row["id"];
          $product_image = $row["image"];
          $product_name = $row["name"];
          $product_price = $row["price"];
          $product_name = (strlen($product_name) > 40) ? substr($product_name, 0, 60).'...' : $product_name;
          $count += 1;
          echo '<div class="tile category-tile">
                      <div class="tile-img">
                        <img src="../img/'.$product_image.'" alt="Home page product image">
                      </div>
                      <div class="tile-description">
                        <a href="../product.php?product_id=' . $_SESSION["product_id"] . '" class="product-name">'.$product_name.'</a>
                        <span class="product-price"><span style="font-size: 0.9rem;">₱</span>'.number_format( $product_price, 2, '.', ', ' ).'</span>
                      </div>
                    </div>';
        }
        // Script count how many time have been echo.
        echo '
        <script>
          const countItem = document.querySelector(".count-item");
          countItem.innerHTML = "'.$count. ' item found";
        </script>
        ';
      }
    ?>
  </div>
</div>

<!-- Javascript -->
<script src="../js/nav.js"></script>
<script src="../js/removeTransitionOnResize.js"></script>

<?php require_once "../require/footer.php" ?>