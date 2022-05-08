<?php

session_start();
$user = $_SESSION["user"];
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$sql = "SELECT * FROM user_info WHERE user_id = {$user}";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
  echo "meron-na-address";
}
else {
  echo "wala-pa";
}