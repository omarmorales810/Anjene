

<?php
  session_start();
  require_once "./require/config.php";
  require_once "./require/display-error.php";

  $search = mysqli_real_escape_string($conn, $_GET['header-search']);

?>








<?php require_once "./require/header.php" ?>

 <section class="search-page">
   <div class="search-page-container">
     <div class="search-item">
       <header class="search-item-header"></header>
       <div class="search-item-container">

       <?php 
          $sql = "SELECT * FROM product WHERE name LIKE '%{$search}%'";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          $count = 0;
        
          if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $_SESSION["product_id"] = $row['id'];
              $product_description = $row["description"];
              $product_description = (strlen($product_description) > 250) ? substr($product_description, 0, 310).'...' : $product_description;

              echo '<div class="searched-item">
                      <div class="search-item-left">
                        <div class="search-item-img-container">
                          <img src="./img/'.$row["image"].'" alt="Search-item-img">
                        </div>
                      </div>
                      <div class="search-item-right">
                        <div class="search-item-description">
                          <a href="#" class="search-item-name">'.$row["name"].'</a>
                          <p class="search-item-short-description">'.$product_description.'</p>
                        </div>
                        <div class="search-item-links">
                          <a href="./product.php?product_id=' . $_SESSION["product_id"] . '" class="search-item-link">View product <i class="fas fa-chevron-right"></i></a>
                        </div>
                      </div>
                    </div>';
            }
          }
          else {
            echo "<script>window.location.href='no-result.php'</script>";
          }
        ?>
       </div>
     </div>
   </div>
 </section>



  <!-- Javascript -->
  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
  <?php 
    $sql = "SELECT * FROM product WHERE name LIKE '%{$search}%'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    $count = 0;
  
    if ($rowCount > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $count += 1;
        echo "<script>document.querySelector('.search-item-header').innerHTML = '$count results found'</script>";
      }
    }
  ?>

<?php require_once "./require/footer.php" ?>


