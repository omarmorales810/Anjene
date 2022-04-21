<?php
require_once "../require/config.php";
require_once "../require/display-error.php";

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

if (empty($email) || empty($password)) {
  echo "Invalid login, please try again";
}
else {
  $sql = "SELECT * FROM user WHERE email_address = '{$email}' AND password = '{$password}'";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);

  if ($rowCount > 0) {
    echo "success";
  }
  else {
    echo "Invalid login, please try again";
  }
}





