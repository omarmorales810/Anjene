<?php
session_start();

if (isset($_SESSION["user"])) {
  $product_id = $_SESSION["product_id"];
  $user_id  = $_SESSION["user"];
  $comment = $_POST["comment"];

  $conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");
  $sql = "INSERT INTO product_comment(product_id, user_id, comment) VALUES({$product_id}, {$user_id}, '{$comment}')";
  $result = mysqli_query($conn, $sql);
  echo "comment_success";
}
else {
  echo "not-register";
}

