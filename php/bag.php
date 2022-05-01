<?php

session_start();

if (isset($_SESSION['user'])) {
  require_once '../require/config.php';
  require_once '../require/display-error.php';
  $session_id = $_SESSION['user'];
  $sql = "SELECT bag_item.id, bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id};";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  $output = '';
  $bool = false;
  $remove_btn = 'item-remove-btn';
  $remove_item_form = 'bag-page-table-item-remove';
  $bag_item = 'bag-page-table-item';
  $count = 0;

  if ($rowCount > 0) {
    $bool = true;
    while ($row = mysqli_fetch_assoc($result)) {
      // $output += 1;
      $count += 1;
      $id = $row['id'];
      $product_image = $row['image'];
      $product_price = $row['price'];
      $product_quantity = $row['quantity'];
      $product_name = $row['name'];
      $product_total_price = $row['price'] * $row['quantity'];
      $output .= "<div class='bag-page-table-item' id='".$bag_item."".$count."'>
                    <div class='bag-page-table-item-img-container'>
                      <img src='./img/$product_image' alt='dfd'>
                    </div>
                    <div class='bag-page-table-item-product'>
                      <div class='bag-page-table-product-content'>
                        <div class='bag-page-table-item-name'>$product_name</div>
                        <div class='bag-page-item-price'>
                          <span style='font-size: 0.9rem;'>₱".number_format($product_price, 2, '.', ', ' )."</span>
                        </div>
                      </div>
                      <div class='bag-page-table-item-quantity'>
                        <div class='quantity-btn-container'>
                          <span class='quantity-btn'>
                            <svg style='width: 12px; height: 20px' fill='#707070' enable-background='new 0 0 10 10' viewBox='0 0 10 10' x='0' y='0' class='shopee-svg-icon'><polygon points='4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5'></polygon></svg>
                          </span>
                          <input type='number' class='quantity-input bag-quantity-input' name='add-to-bag-quantity' value='$product_quantity'>
                          <span class='quantity-btn'>
                            <svg style='width: 12px; height: 20px' fill='#707070' enable-background='new 0 0 10 10' viewBox='0 0 10 10' x='0' y='0' class='shopee-svg-icon icon-plus-sign'><polygon points='10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5'></polygon></svg>
                          </span>
                        </div>
                        <div class='bag-quantity-text'>Quantity</div>
                      </div>
                      <div class='bag-page-table-item-total-price'>
                        <div class='item-total-price' >₱".number_format($product_total_price, 2, '.', ', ' )."</div>
                        <div class='total-price-text'>Total Price</div>
                      </div>
                      <form action='#' class='$remove_item_form' id='".$remove_item_form."".$count."'>
                        <button class='$remove_btn' id='".$remove_btn."".$count."'>Remove</button>
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
                            
                            console.log(data);
                          }
                        }
                      }
                      let formData = new FormData(deleteForm$count); // Creating new formData object
                      xhr.send(formData);
                    }
                  </script>
                  ";


                  // const deleteForm'.$count.' = document.getElementById("'.$remove_item_form.''.$count.'");
//                     const deleteBtn'.$count.' = document.getElementById("'.$remove_btn.''.$count.'");
//                     const bagItem'.$count.' = document.getElementById("'.$bag_item.''.$count.'");
                    
//                       deleteForm'.$count.'.addEventListener("submit", (e) => {
//                         e.preventDefault(); // Preventing form from submitting
//                       });
                    
//                       deleteBtn'.$count.'.addEventListener("click", () => {
//                         let xhr = new XMLHttpRequest(); // Creating XML object
//                         xhr.open("POST", "./php/bag_delete_item.php?item_id='.$id.'", true);
//                         xhr.addEventListener("load", () => {
//                           if(xhr.readyState === XMLHttpRequest.DONE) {
//                             if(xhr.status === 200) {
//                               let data = xhr.response;
                              
//                               console.log(data);
//                             }
//                           }
//                         });
//                         let formData = new FormData(deleteForm'.$count.'); // Creating new formData object
//                         xhr.send(formData);

//                         location.href="bag.php";
//                       });
    }
  }
  else {
    $output .= "<div class='empty-bag-container'>
                  <div class='empty-bag-message-container'>
                    <div class='empty-bag-text'>Your bag is empty</div>
                  </div>
                  <div class='bag-link-container'>
                    <a href='./index.php' class='bag-link'>
                      <button class='bag-continue-shopping-btn bag-page-btn'>Continue Shopping</button>
                    </a>
                  </div>
                </div>";
  }
}
else {
  $output .= "<div class='empty-bag-container'>
                  <div class='empty-bag-message-container'>
                    <div class='empty-bag-text'>Your bag is empty</div>
                    <div class='empty-bag-message'>Sign in to see if you have any saved items. Or continue shopping.</div>
                  </div>
                  <div class='bag-link-container'>
                    <a href='./login.php' class='bag-link'>
                      <button class='sign-in-bag-btn bag-page-btn'>Sign in</button>
                    </a>
                    <a href='./index.php' class='bag-link'>
                      <button class='bag-continue-shopping-btn bag-page-btn'>Continue Shopping</button>
                    </a>
                  </div>
                </div>";
}


echo $output;

?>




