<?php

session_start();
if (isset($_SESSION["user"])) {
  $session_id = $_SESSION["user"];

  $conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

  $sql = "SELECT bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id}";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  $count = 0;

  if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $count += 1;
    }

    if ($count > 3) {
      $count = $count - 3 . " more items in your cart";
    }
  }

  echo $count;
}
else {
  echo "hide-bag-item-counter";
}