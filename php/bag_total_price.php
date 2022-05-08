<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$sql = "SELECT SUM(bag_item.quantity * product.price) FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$_SESSION['user']} GROUP BY bag_item.session_id";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo number_format($row["SUM(bag_item.quantity * product.price)"], 2, '.', ', ' );
  }
}
