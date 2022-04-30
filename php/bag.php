<?php

session_start();


if (isset($_SESSION["user"])) {
  require_once "../require/config.php";
  require_once "../require/display-error.php";
  $session_id = $_SESSION["user"];
  $sql = "SELECT bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id};";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  $output = "";

  if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $product_image = $row["image"];
      $product_price = $row["price"];
      $product_quantity = $row["quantity"];
      $product_name = $row["name"];
      $output .= ' <div class="bag-page-table-item">
                    <div class="bag-page-table-item-img-container">
                      <img src="./img/'.$product_image.'" alt="dfd">
                    </div>
                    <div class="bag-page-table-item-product">
                      <div class="bag-page-table-product-content">
                        <div class="bag-page-table-item-name">'.$product_name.'</div>
                        <div class="bag-page-item-price">
                          <span style="font-size: 0.9rem;">'.number_format( $product_price, 2, '.', ', ' ).'</span>
                        </div>
                      </div>
                      <div class="bag-page-table-item-quantity">
                        <div class="quantity-btn-container">
                          <span class="quantity-btn">
                            <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon"><polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon></svg>
                          </span>
                          <input type="number" class="quantity-input bag-quantity-input" name="add-to-bag-quantity" value='.$product_quantity.'>
                          <span class="quantity-btn">
                            <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign"><polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon></svg>
                          </span>
                        </div>
                        <div class="bag-quantity-text">Quantity</div>
                      </div>
                      <div class="bag-page-table-item-total-price">
                        <div class="item-total-price" >₱22, 490.00</div>
                        <div class="total-price-text">Total Price</div>
                      </div>
                      <form action="#" class="bag-page-table-item-remove" id="remove-item-form">
                        <button class="item-remove-btn" id="remove-btn">Remove</button>
                      </form>
                    </div>
                  </div>';
    }
  }
  else {
    $output = ' <div class="empty-bag-container">
                  <div class="empty-bag-message-container">
                    <div class="empty-bag-text">Your bag is empty</div>
                  </div>
                  <div class="bag-link-container">
                    <a href="./index.php" class="bag-link">
                      <button class="bag-continue-shopping-btn bag-page-btn">Continue Shopping</button>
                    </a>
                  </div>
                </div>';
  }
  
}
else {
  $output = ' <div class="empty-bag-container">
                  <div class="empty-bag-message-container">
                    <div class="empty-bag-text">Your bag is empty</div>
                    <div class="empty-bag-message">Sign in to see if you have any saved items. Or continue shopping.</div>
                  </div>
                  <div class="bag-link-container">
                    <a href="./login.php" class="bag-link">
                      <button class="sign-in-bag-btn bag-page-btn">Sign in</button>
                    </a>
                    <a href="./index.php" class="bag-link">
                      <button class="bag-continue-shopping-btn bag-page-btn">Continue Shopping</button>
                    </a>
                  </div>
                </div>';
}

echo $output;



