<?php

session_start();
require_once "../require/config.php";
$total_price = $_SESSION["order_subtotal"] + 70;
$user = $_SESSION["user"];
$payment_type = mysqli_real_escape_string($conn, $_POST["payment-type"]);

$sql = "INSERT INTO order_details(user_id, payment_type, total) VALUES({$user}, '{$payment_type}', '{$total_price}')";
$result = mysqli_query($conn, $sql);

if ($result) {
  $sql = "SELECT id FROM order_details";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  // Get order id
  while ($row = mysqli_fetch_assoc($result)) {
    $order_id = $row["id"];
  }

  $sql2 = " INSERT INTO order_items(order_id, product_id, quantity) SELECT {$order_id}, bag_item.product_id, bag_item.quantity FROM bag_item WHERE bag_item.session_id = {$user};
  ";
  $result2 = mysqli_query($conn, $sql2);

  if ($result2) {
    $sql = "DELETE FROM bag_item WHERE session_id={$user}";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "deleted";
    }
  }
}

