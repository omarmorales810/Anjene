<?php
session_start();
$product_id = $_SESSION["product_id"];

$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");
$sql = "SELECT product_comment.id, product_comment.comment, product_comment.created_at, user_info.first_name, user_info.surname FROM product_comment INNER JOIN user_info ON product_comment.user_id = user_info.user_id WHERE product_comment.product_id = {$product_id} ORDER BY product_comment.id DESC;";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
$count = 0;
$output = "";

if ($rowCount > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $count += 1;
  }
}

echo $count;