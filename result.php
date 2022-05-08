

<?php
  // session_start();
  require_once "./require/config.php";
  require_once "./require/display-error.php";

  $search = mysqli_real_escape_string($conn, $_GET['search_query']);

  $output = '<section class="search-page">
  <div class="search-page-container">
     <!-- When user search result is 0 -->
    <div class="no-result-container">
     <div class="search-result-text">No matches was found.</div>
     <div class="search-result-text search-result-text-small">Were sorry, we couldnt find any matches for you.</div>
     <div class="search-page-icon">
       <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 50%; height: 50%;"><g class="style-scope yt-icon"><path d="M20.87,20.17l-5.59-5.59C16.35,13.35,17,11.75,17,10c0-3.87-3.13-7-7-7s-7,3.13-7,7s3.13,7,7,7c1.75,0,3.35-0.65,4.58-1.71 l5.59,5.59L20.87,20.17z M10,16c-3.31,0-6-2.69-6-6s2.69-6,6-6s6,2.69,6,6S13.31,16,10,16z" class="style-scope yt-icon"></path></g></svg>
     </div>
    </div>
  </div>
</section>';

$quote = '"';

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
                          <a href="./product.php?product_id=' . $_SESSION["product_id"] . '" class="search-item-name">'.$row["name"].'</a>
                          <p class="search-item-short-description">'.$product_description.'</p>
                        </div>
                        <div class="search-item-links">
                          <a href="./product.php?product_id=' . $_SESSION["product_id"] . '" class="search-item-link">View product <i class="fas fa-chevron-right"></i></a>
                        </div>
                      </div>
                    </div>';
            }
          }
        ?>
       </div>
     </div>
   </div>
 </section>

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
    else {
      echo "<script>document.querySelector('.search-page-container').innerHTML = '';</script>";

      echo "<section class='search-page'>
      <div class='search-page-container'>
         <!-- When user search result is 0 -->
        <div class='no-result-container'>
         <div class='search-result-text'>No matches was found.</div>
         <div class='search-result-text search-result-text-small'>We're sorry, we couldn't find any matches for ".$quote."".$search."".$quote.".</div>
         <div class='search-page-icon'>
           <svg viewBox='0 0 24 24' preserveAspectRatio='xMidYMid meet' focusable='false' class='style-scope yt-icon' style='pointer-events: none; display: block; width: 50%; height: 50%;'><g class='style-scope yt-icon'><path d='M20.87,20.17l-5.59-5.59C16.35,13.35,17,11.75,17,10c0-3.87-3.13-7-7-7s-7,3.13-7,7s3.13,7,7,7c1.75,0,3.35-0.65,4.58-1.71 l5.59,5.59L20.87,20.17z M10,16c-3.31,0-6-2.69-6-6s2.69-6,6-6s6,2.69,6,6S13.31,16,10,16z' class='style-scope yt-icon'></path></g></svg>
         </div>
        </div>
      </div>
    </section>";
    }
  ?>



  <!-- Javascript -->
  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
<?php require_once "./require/footer.php" ?>


