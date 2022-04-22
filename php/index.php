<?php 
require_once "../require/config.php";
require_once "../require/display-error.php";
session_start();

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
$output = "";
$count = 0;

if ($rowCount > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["product_id"] = $row['id'];
    $product_name = $row["name"];
    $product_image = $row["image"];
    $product_price = $row["price"];
    // Truncate product name
    $product_name = (strlen($product_name) > 40) ? substr($product_name, 0, 60).'...' : $product_name;
  
    $output .= '<div class="tile">
                  <div class="tile-img">
                    <img src="./img/'.$product_image.'" alt="Home page product image">
                  </div>
                  <div class="tile-description">
                    <a href="./product.php?product_id=' . $_SESSION["product_id"] . '" class="product-name">'.$product_name.'</a>
                    <span class="product-price"><span style="font-size: 0.9rem;">₱</span>'.number_format( $product_price, 2, '.', ', ' ).'</span>
                  </div>
                </div>';
  }
}

echo $output;

