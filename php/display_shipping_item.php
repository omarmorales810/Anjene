<?php
session_start();
require_once '../require/config.php';
require_once '../require/display-error.php';
$session_id = $_SESSION['user'];
$sql = "SELECT bag_item.id, bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.stock, product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id};";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
$output = "";
$count = 0;

$remove_btn = 'shipping-item-remove-btn';
$remove_item_form = 'shipping-item-remove-form';

if ($rowCount > 0) {
  $bool = true;
  while ($row = mysqli_fetch_assoc($result)) {
    // $output += 1;
    $count += 1;
    $id = $row['id'];
    $product_id = $row["product_id"];
    $product_stock = $row["stock"];
    $product_image = $row['image'];
    $product_price = $row['price'];
    $product_quantity = $row['quantity'];
    $product_name = $row['name'];
    $output .= "<div class='shipping-item'>
                <div class='shipping-item-left'>
                  <div class='shipping-item-img-container'>
                    <img src='./img/$product_image' alt=''>
                    <div class='shipping-item-details'>
                      <div class='shipping-item-name'>$product_name</div>
                      <div class='shipping-item-price'>₱".number_format( $product_price, 2, '.', ', ' )."</div>
                      <div class='shipping-item-quantity'>Qty: $product_quantity</div>
                    </div>
                  </div>
                </div>
                <div class='shipping-item-right'>
                  <form action='#' class='remove-item-container' id='".$remove_item_form."".$count."'>
                    <button id='".$remove_btn."".$count."'>Remove</button>
                  </form>
                </div>
              </div>
              
              
              <script>
                var deleteForm$count = document.getElementById('".$remove_item_form."".$count."');
                var button$count = document.querySelector('#".$remove_btn."".$count."');

                deleteForm$count.onsubmit = (e) => {
                  e.preventDefault();
                }

                button$count.onclick = () => {
                  let xhr = new XMLHttpRequest(); // Creating XML object
                  xhr.open('GET', './php/bag_delete_item.php?item_id=$id', true);
                  xhr.onload = () => {
                    if(xhr.readyState === XMLHttpRequest.DONE) {
                      if(xhr.status === 200) {
                        let data = xhr.response;
                        alert('Item has been removed');
                      }
                    }
                  }
                  let formData = new FormData(deleteForm$count); // Creating new formData object
                  xhr.send(formData);
                }
              </script>
              
              
              
              
              ";
  }
}

else {
  $output = "empty-shipping-item";
}

echo $output;

