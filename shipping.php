<?php require_once "./require/header.php"; ?>
  
<div class="wrapper">
  <header class="header">Shipping Information</header>
  <div class="intro-form-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
  <form action="#" class="delivery-form">
    <label class="label" for="">Name</label>
    <div class="name-field">
      <div class="field">
        <input type="text" placeholder="Enter your first name" name="first-name" autocomplete="off">
      </div>
      <div class="field">
        <input type="text" placeholder="Enter your surname" name="surname" autocomplete="off">
      </div>
    </div>
    <label class="label" for="">Mobile Number</label>
    <div class="field mobile-field">
      <input type="text" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
      <p class="mobile-number-text">Be sure to enter a phone number you can always access. It will be used to contact you when we deliver your order.</p>
    </div>
    <label class="label" for="">Address Info</label>
    <div class="field">
      <input type="text" placeholder="Enter your house number, building, and street" name="address-line1" autocomplete="off">
    </div>
    <div class="field">
      <input type="text" placeholder="Enter your city/municipality" name="city-municipality" autocomplete="off">
    </div>
    <div class="field">
      <input type="text" placeholder="Enter your barangay" name="barangay" autocomplete="off">
    </div>
    <!-- <div class="save-btn-container">
      <button class="save-btn">Save</button>
    </div> -->
  </form>
  <form action="" id="" class="delivery-form delivery-form2">
    <label class="label" for="">Select Payment Method</label>
    <div class="payment-method-field-container">
      <div class="payment-method-field">
        <span style="display: flex; justify-content: center; align-items: center;"><svg viewBox="0 0 35 35" class="delivery-svg" role="img" aria-hidden="true" width="35px" height="35px">
				<path fill="none" d="M0 0h35v35H0z"></path>
				<path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path>
			  </svg> Cash on delivery</span>
        <!-- <p style="margin-top: 3px; color: #707070;">Pay when you receive</p> -->
        <input type="radio" name="payment-type" class="delivery-radio-input">
      </div>
      <div class="credit-debit-field">
        <div class="payment-method-field" style="border-radius: 5px 5px 0px 0px;">
          <span style="display: flex; justify-content: center; align-items: center;"><svg viewBox="0 0 35 35" class="delivery-svg" role="img" aria-hidden="true" width="35px" height="35px">
          <path fill="none" d="M0 0h35v35H0z"></path>
          <path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path>
          </svg> Credit/Debit Card</span>
          <!-- <p style="margin-top: 3px; color: #707070;">Pay when you receive</p> -->
          <input type="radio" name="payment-type" class="delivery-radio-input">
        </div>
        <div class="tap-to-add-container">
          <span style="display: flex; justify-content: center; align-items: center;" class="tap-to-add">Tap to add card</span>
          <span class="tap-to-add-img-container">
            <img src="https://logos-world.net/wp-content/uploads/2020/09/Mastercard-Logo.png" alt="">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="">
          </span>
          <!-- <p style="margin-top: 3px; color: #707070;">Pay when you receive</p> -->
        </div>
      </div>
    </div>
  </form>
  <div class="shipping-item-container">
    <label class="label" for="">Package (3 item)</label>
    <div class="shipping-item">
      <div class="shipping-item-left">
        <div class="shipping-item-img-container">
          <img src="./img/product_img9.png" alt="">
        </div>
        <div class="shipping-item-details">
          <div class="shipping-item-name">Stainless Steel Steak Spatula</div>
          <div class="shipping-item-price">P400.00</div>
          <div class="shipping-item-quantity">Qty: 4</div>
        </div>
      </div>
      <div class="shipping-item-right">
        <div class="remove-item-container">
          <button>Remove</button>
        </div>
      </div>
    </div>
    <div class="shipping-item">
      <div class="shipping-item-left">
        <div class="shipping-item-img-container">
          <img src="./img/product_img9.png" alt="">
        </div>
        <div class="shipping-item-details">
          <div class="shipping-item-name">Stainless Steel Steak Spatula</div>
          <div class="shipping-item-price">P400.00</div>
          <div class="shipping-item-quantity">Qty: 4</div>
        </div>
      </div>
      <div class="shipping-item-right">
        <div class="remove-item-container">
          <button>Remove</button>
        </div>
      </div>
    </div>
    <div class="shipping-item">
      <div class="shipping-item-left">
        <div class="shipping-item-img-container">
          <img src="./img/product_img9.png" alt="">
        </div>
        <div class="shipping-item-details">
          <div class="shipping-item-name">Stainless Steel Steak Spatula</div>
          <div class="shipping-item-price">P400.00</div>
          <div class="shipping-item-quantity">Qty: 4</div>
        </div>
      </div>
      <div class="shipping-item-right">
        <div class="remove-item-container">
          <button>Remove</button>
        </div>
      </div>
    </div>
  </div>
  <div class="total-summary-container">
    <label class="label" for="">Order Summary</label>
    <div class="order-summary">
      <div class="subtotal-item">
        <span class="subtotal-text">Subtotal (3 item)</span>
        <span class="subtotal-price">P400.00</span>
      </div>
      <div class="shipping-fee">
        <span class="shipping-fee-text">Shipping Fee</span>
        <span class="subtotal-price">P70.00</span>
      </div>
      <div class="total">
        <span class="total-text">Subtotal</span>
        <span class="total-price-txt">P40, 000.00</span>
      </div>
    </div>
  </div>
  <div class="checkout-btn-container">
    <button class="checkout-btn">Check Out</button>
  </div>
</div>

<script src="./js/nav.js"></script>
<script src="./js/index.js"></script>
<script src="./js/removeTransitionOnResize.js"></script>
  
<?php require_once "./require/footer.php"; ?>