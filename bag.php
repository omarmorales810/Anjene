<?php require_once "./require/header.php" ?>

  <section class="bag-page">
    <header class="bag-page-header-header">Shopping Bag <svg class="bag-page-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg></header>
    <div class="bag-page-container">
      <div class="bag-page-header">(0 Item)</div>
      <div id="bag-page-table" class="bag-page-table">
          <?php 
          if (isset($_SESSION["user"])) {
            require_once "./require/config.php";
            require_once "./require/display-error.php";
            $session_id = $_SESSION["user"];
            $sql = "SELECT bag_item.product_id, bag_item.session_id, product.name, bag_item.quantity , product.price, product.image FROM bag_item INNER JOIN product ON bag_item.product_id = product.id WHERE bag_item.session_id = {$session_id};";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            $output = 0;
          
            if ($rowCount > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $output += 1;
                $product_image = $row["image"];
                $product_price = $row["price"];
                $product_quantity = $row["quantity"];
                $product_name = $row["name"];
                echo ' <div class="bag-page-table-item">
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
              echo ' <div class="empty-bag-container">
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
            echo ' <div class="empty-bag-container">
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
          ?>
      </div>
      <div class="check-out-and-remove-all-btn-container">
        <span class="total-item-price">30, 000.00</span>
        <button class="checkout-btn">Checkout</button>
      </div>
    </div>
  </section>
  <footer class="footer">
    <span>&copy; 2022 Anjene. All right reserved</span>
  </footer>

  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
  <!-- <?php 
    echo '<script>
    const bagBagHeaderCounter = document.querySelector(".bag-page-header");

    bagBagHeaderCounter.innerHTML = "('.$output.' item)";
    
  </script>';
  ?> -->
</body>
</html>