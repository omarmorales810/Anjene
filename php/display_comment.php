<?php
session_start();
$product_id = $_SESSION["product_id"];

$conn = mysqli_connect("localhost", "root", "", "ecommerce_sadd");
$sql = "SELECT product_comment.id, product_comment.comment, product_comment.created_at, user.first_name, user.surname FROM product_comment INNER JOIN user ON product_comment.user_id = user.id WHERE product_comment.product_id = {$product_id} ORDER BY product_comment.id DESC;";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
$output = "";

if ($rowCount > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $first_name = $row["first_name"];
    $last_name = $row["surname"];
    $comment = $row["comment"];
    $created_at = $row["created_at"];
    $newdateformat = date("M d, Y g:i a", strtotime($created_at));

    $output .= "<div class='reviews'>
                  <div class='profile'>
                    <img src='./img/blank-profile.jpeg' alt=''>
                  </div>
                  <div class='comment-box'>
                    <div class='profile-name'>".$first_name." ".$last_name."</div>
                    <div class='comment-time'>$newdateformat</div>
                    <div class='comment'>$comment</div>
                  </div>
                </div>";
  }
}

echo $output;