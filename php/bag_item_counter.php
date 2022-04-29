<?php 
session_start();

if (isset($_SESSION["user"])) {
  $session_id = $_SESSION["user"];

  $conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");

  $sql = "SELECT * FROM bag_item WHERE session_id = {$session_id}";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  $count = 0;

  if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $count += 1;
    }
  }

  echo $count;
}
else {
  echo "hide-bag-item-counter";
}
