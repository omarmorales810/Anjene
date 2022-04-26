<?php
session_start();
require_once "../require/config.php";
require_once "../require/display-error.php";



$sql = "SELECT * FROM product WHERE id = '{$_SESSION["product_id"]}'";
$result = mysqli_query($conn, $sql);
$rowCoutn = mysqli_num_rows($result);

if ($row = mysqli_fetch_assoc($result)) {
  $product_name = $row["name"];
  $product_image = $row["image"];
  $product_price = $row["price"];
  $product_description = $row["description"];
}

