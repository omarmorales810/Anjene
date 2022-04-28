<?php
session_start();

if (isset($_SESSION["user"])) {
  require_once "../require/config.php";
  require_once "../require/display-error.php";

  $product_id = $_SESSION["product_id"];
  $session_id = $_SESSION["user"];
  $quantity_add_to_bag = mysqli_real_escape_string($conn, $_POST["add-to-bag-quantity"]);

  $now = date('Y-m-d H:i:s');

  $sql = "INSERT INTO bag_item(session_id, product_id, quantity, modified_at) VALUES('{$session_id}', '{$product_id}', '{$quantity_add_to_bag}', '{$now}')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    // $sql = "UPDATE product SET quantity = quantity - {$quantity_add_to_bag}";
    // $result2 = mysqli_query($conn, $sql);
    echo "added to cart";
  }
}
else {
  echo "user_session_not_set";
}


