<?php require_once "./require/header.php" ?>

  <section class="bag-page">
    <header class="bag-page-header-header">Shopping Bag <svg class="bag-page-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg></header>
    <div class="bag-page-container">
      <div class="bag-page-header">(2 Item)</div>
      <div id="bag-page-table" class="bag-page-table">
        
        <!-- <div class="bag-page-table-item" style="position: absolute; pointer-events: none; opacity: 0;"></div> -->
        <div class="bag-page-table-item">
          <div class="bag-page-table-item-img-container">
            <img src="./img/product_img1.png" alt="dfd">
          </div>
          <div class="bag-page-table-item-product">
            <div class="bag-page-table-product-content">
              <div class="bag-page-table-item-name">Apple Watch Series 6 </div>
              <div class="bag-page-item-price">
                <span style="font-size: 0.9rem;">₱987.00</span>
              </div>
            </div>
            <div class="bag-page-table-item-quantity">
              <div class="quantity-btn-container">
                <button class="quantity-btn-increment quantity-btn">
                  <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign"><polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon></svg>
                  </button>
                    <input type="number" class="quantity-input">
                  <button class="quantity-btn-decrement quantity-btn">
                    <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon"><polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon></svg>
                  </button>
                </div>
                <div class="bag-quantity-text">Quantity</div>
            </div>
            <div class="bag-page-table-item-total-price">
              <div class="item-total-price" >₱22, 490.00</div>
              <div class="total-price-text">Total Price</div>
            </div>
            <div class="bag-page-table-item-remove">
              <button class="item-remove-btn">Remove</button>
            </div>
          </div>
        </div>

        <div class="bag-page-table-item">
          <div class="bag-page-table-item-img-container">
            <img src="./img/product_img1.png" alt="dfd">
          </div>
          <div class="bag-page-table-item-product">
            <div class="bag-page-table-product-content">
              <div class="bag-page-table-item-name">Apple Product #2 </div>
              <div class="bag-page-item-price">
                <span style="font-size: 0.9rem;">₱97.00</span>
              </div>
            </div>
            <div class="bag-page-table-item-quantity">
              <div class="quantity-btn-container">
                <button class="quantity-btn-increment quantity-btn">
                  <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign"><polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon></svg>
                  </button>
                    <input type="number" class="quantity-input">
                  <button class="quantity-btn-decrement quantity-btn">
                    <svg style="width: 12px; height: 20px" fill="#707070" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon"><polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon></svg>
                  </button>
                </div>
                <div class="bag-quantity-text">Quantity</div>
            </div>
            <div class="bag-page-table-item-total-price">
              <div class="item-total-price" >₱22, 490.00</div>
              <div class="total-price-text">Total Price</div>
            </div>
            <div class="bag-page-table-item-remove">
              <button class="item-remove-btn">Remove</button>
            </div>
          </div>
        </div>


        <!-- <div class="empty-bag-container">
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
        </div> -->


      </div>
      <div class="check-out-and-remove-all-btn-container">
        <!-- <button class="remove-all-btn">Remove All</button> -->
        <span class="total-item-price"></span>
        <button class="checkout-btn">Checkout</button>
      </div>
    </div>
  </section>




   

  <script src="./js/nav.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
  <script src="./js/bag.js"></script>
  <script src="./js/qcBag.js"></script>
  <script src="./js/addToCart.js"></script>

<?php require_once "./require/footer.php" ?>