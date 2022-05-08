<?php require_once "./require/header.php"; ?>
<?php 
  require_once "./require/config.php";
  $user = $_SESSION["user"];
  $sql = "SELECT * FROM user_info WHERE user_id = {$user}";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);

  if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $first_name = $row["first_name"];
      $surname = $row["surname"];
      $mobile = $row["mobile"];
      $home = $row["house_address"];
      $municipality_city = $row["municipality_city"];
      $barangay = $row["barangay"];
    }
  }
?>
  
<div class="wrapper">
  <div class="shipping-address-container">
    <label class="label" for="">Shipping Address</label>
    <div class="shipping-address">
      <div class="shipping-address-top">
        <div class="shipping-address-name"><?php echo $first_name . " " . $surname?></div>
        <div class="shipping-address-mobile"><?php echo $mobile ?></div>
      </div>
      <div class="shipping-address-bottom">
        <div class="shipping-address-home"><span class="shipping-home-btn">Home</span><?php echo $home ?></div>
        <div class="shipping-address-city-municipality">Postcode: <?php echo $municipality_city . "-" . $barangay?></div>
      </div>
    </div>
    <div class="tap-to-change-address">
      <span>Tap to change address</span>
    </div>
  </div>
  <form action="" id="" class="delivery-form delivery-form2">
    <label class="label" for="">Select Payment Method</label>
    <div class="payment-method-field-container">
      <div class="payment-method-field">
        <span style="display: flex; justify-content: center; align-items: center;"><svg viewBox="0 0 35 35" class="delivery-svg" role="img" aria-hidden="true" width="35px" height="35px">
				<path fill="none" d="M0 0h35v35H0z"></path>
				<path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path>
			  </svg> Cash on delivery</span>
        <input type="radio" name="payment-type" class="delivery-radio-input">
      </div>
      <div class="credit-debit-field">
        <div class="payment-method-field" style="border-radius: 5px 5px 0px 0px;">
          <span style="display: flex; justify-content: center; align-items: center;"><svg viewBox="0 0 35 35" class="delivery-svg" role="img" aria-hidden="true" width="35px" height="35px">
          <path fill="none" d="M0 0h35v35H0z"></path>
          <path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path>
          </svg> Credit/Debit Card</span>
          <input type="radio" name="payment-type" class="delivery-radio-input">
        </div>
        <div class="tap-to-add-container">
          <span style="display: flex; justify-content: center; align-items: center;" class="tap-to-add">Tap to add card</span>
          <span class="tap-to-add-img-container">
            <img src="https://logos-world.net/wp-content/uploads/2020/09/Mastercard-Logo.png" alt="">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="">
          </span>
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
          <div class="shipping-item-details">
            <div class="shipping-item-name">Stainless Steel Steak Spatula</div>
            <div class="shipping-item-price">P400.00</div>
            <div class="shipping-item-quantity">Qty: 4</div>
          </div>
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
          <div class="shipping-item-details">
            <div class="shipping-item-name">Stainless Steel Steak Spatula</div>
            <div class="shipping-item-price">P400.00</div>
            <div class="shipping-item-quantity">Qty: 4</div>
          </div>
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
          <div class="shipping-item-details">
            <div class="shipping-item-name">Stainless Steel Steak Spatula</div>
            <div class="shipping-item-price">P400.00</div>
            <div class="shipping-item-quantity">Qty: 4</div>
          </div>
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
    <button class="checkout-btn save-btn">Check Out</button>
  </div>
</div>

<script src="./js/removeTransitionOnResize.js"></script>
<script src="./js/nav.js"></script>
<script>
  const changeAddressBtn = document.querySelector(".tap-to-change-address");

  changeAddressBtn.onclick = () => {
    location.href='shipping-form.php';
  }
</script>
  
<?php require_once "./require/footer.php"; ?>