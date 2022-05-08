<?php 

session_start();
$session_id = $_SESSION["user"];
// database connection
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

if (isset($session_id)) {
  // kunin kung ilan yung product ni user sa bag niya.
  $sql = "SELECT bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id}";
    $result2 = mysqli_query($conn, $sql);
    $rowCount2 = mysqli_num_rows($result2);

    if ($rowCount2 > 0) {
      while ($row = mysqli_fetch_assoc($result2)) {
        $count += 1;
        $_SESSION["count"] = $count - 3;
      }
    }


  $sql = "SELECT bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id} LIMIT 3;";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  $count = 0;
  if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $product_id = $row["product_id"];
      $product_image = $row["image"];
      $product_name = $row["name"];
      $product_name = (strlen($product_name) > 5) ? substr($product_name, 0, 10).'...' : $product_name;
      $product_price = $row["price"];

      $output .= '<a href="../product.php?product_id=' . $product_id . '" class="bag-added-item">
                      <div class="bag-added-item-left">
                        <img src="../img/'.$product_image.'" alt="image" class="bag-added-item-img">
                        <span class="bag-added-item-name">'.$product_name.'</span>
                      </div>
                      <div class="bag-added-item-right">
                        <span class="bag-added-item-price">'.number_format( $product_price, 2, '.', ', ' ).'</span>
                      </div>
                    </a>';   
    }
  }
  else {
    $output .= '<div class="bag-view-content-empty">Your bag is empty</div>';
  }
}
else {
  $output .= '<div class="bag-view-content-empty">Your bag is empty</div>';
}

echo $output;
