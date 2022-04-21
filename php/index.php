<?php 
require_once "../require/config.php";
require_once "../require/display-error.php";

$sql = "SELECT * FROM product ORDER BY rand()";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
$output = "";
$count = 0;

while ($row = mysqli_fetch_assoc($result)) {
  $product_name = $row["name"];
  $product_image = $row["image"];
  $product_price = $row["price"];
  $count += 1;
  // Truncate product name
  $product_name = (strlen($product_name) > 30) ? substr($product_name, 0, 59).'...' : $product_name;

  $output .= '<div class="tile">
                <div class="tile-img">
                  <img src="./img/'.$product_image.'" alt="dfdfd">
                </div>
                <div class="tile-description">
                  <a href="./product.php" class="product-name">'.$product_name.'</a>
                  <span class="product-price"><span style="font-size: 0.9rem;">₱</span>'.number_format( $product_price, 2, '.', ', ' ).'</span>
                </div>
              </div>';
}

echo $output;

