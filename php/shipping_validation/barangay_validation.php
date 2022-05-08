<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");
$barangay = mysqli_real_escape_string($conn, $_POST["barangay"]);

if (empty($barangay)) {
  echo "blank-barangay";
}
