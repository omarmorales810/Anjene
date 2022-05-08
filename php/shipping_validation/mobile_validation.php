<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

$mobile_number = mysqli_real_escape_string($conn, $_POST["mobile"]);

if (empty($mobile_number)) {
  echo "blank-mobile";
}
else if (!is_numeric($mobile_number)) {
  echo "invalid-mobile";
}
