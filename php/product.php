<?php
session_start();

if (isset($_SESSION["user"])) {
  require_once "../require/config.php";
  require_once "../require/display-error.php";

  $product_id = $_SESSION["product_id"];
  $session_id = $_SESSION["user"];
  $quantity_add_to_bag = mysqli_real_escape_string($conn, $_POST["add-to-bag-quantity"]);
  $now = date('Y-m-d H:i:s');

  $sql = "SELECT * FROM bag_item WHERE session_id = {$session_id} AND product_id = {$product_id}";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);

  if ($rowCount > 0) {
    // Kapag nag add to bag si user tapos yung inadd to bag niya existing na sa bag, imbis na iinsert natin sa database iuupdate lang natin yung quantity ng product na yun.
    if ($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE bag_item SET quantity = quantity + {$quantity_add_to_bag} WHERE session_id = {$session_id} AND product_id = {$product_id};";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo "added to cart";
      }
    }
  }
  else {
    $sql = "INSERT INTO bag_item(session_id, product_id, quantity, modified_at) VALUES('{$session_id}', '{$product_id}', '{$quantity_add_to_bag}', '{$now}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "added to cart";
    }
  }
}
else {
  echo "user_session_not_set";
}




