<?php require_once "./require/header.php"; ?>
<?php 
  require_once "./require/config.php";
  $user = $_SESSION["user"];
  $sql = "SELECT * FROM user_info WHERE user_id = {$user}";
  $result = mysqli_query($conn, $sql);
  $rowCount = mysqli_num_rows($result);
  $count = 0;

  if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $first_name = $row["first_name"];
      $surname = $row["surname"];
      $mobile = $row["mobile"];
      $home = $row["house_address"];
      $municipality_city = $row["municipality_city"];
      $barangay = $row["barangay"];
    }

    $sql2 = "SELECT * FROM bag_item WHERE session_id = {$user}";
    $result2 = mysqli_query($conn, $sql2);
    $rowCount2 = mysqli_num_rows($result2);

    if ($rowCount2 > 0) {
      while ($row = mysqli_fetch_assoc($result2)) {
        $count += 1;
      }
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
  <!-- <form action="" id="" class="delivery-form2">
    <label class="label" for="" style="padding-bottom: 1rem;">Select Payment Method</label>
    <div class="payment-method-field-container">
      <div class="payment-method-field payment-method-field1">
        <span style="display: flex; justify-content: center; align-items: center;"><svg viewBox="0 0 35 35" class="delivery-svg" role="img" aria-hidden="true" width="35px" height="35px">
				<path fill="none" d="M0 0h35v35H0z"></path>
				<path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path>
			  </svg> Cash on delivery</span>
        <input type="radio" name="payment-type" class="delivery-radio-input delivery-radio-input1" checked>
      </div>
      <div class="credit-debit-field payment-method-field2">
        <div class="payment-method-field" style="border-radius: 5px 5px 0px 0px;">
          <span style="display: flex; justify-content: center; align-items: center;"><svg viewBox="0 0 35 35" class="delivery-svg" role="img" aria-hidden="true" width="35px" height="35px">
          <path fill="none" d="M0 0h35v35H0z"></path>
          <path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z"></path>
          </svg> Credit/Debit Card</span>
          <input type="radio" name="payment-type" class="delivery-radio-input delivery-radio-input2">
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
  </form> -->
  <label class="label" for="">Package (3 item)</label>
  <div class="shipping-item-container">
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

<div class="wrapper" id="delivery-wrapper">
    <header class="header">Your address</header>
    <div class="intro-form-text">To place order, please fill out the form</div>
    <form action="#" class="delivery-form address-form">
      <div class="form-container">
        <label class="label" for="">Name</label>
        <div class="name-field">
          <div class="field">
            <input type="text" class="first-name-field" placeholder="Enter your first name" name="first-name" autocomplete="off">
            <div class="error-txt first-name-error-txt">The length of first name should be atleast 3 characters</div>
          </div>
          <div class="field">
            <input type="text" class="surname-field" placeholder="Enter your surname" name="surname" autocomplete="off">
            <div class="error-txt surname-error-txt">The length of surname should be atleast 3 characters</div>
          </div>
        </div>
        <label class="label" for="">Mobile Number</label>
        <div class="field mobile-field">
          <input type="text" class="mobile-input" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
          <div class="error-txt mobile-error-txt">Please enter a valid phone number</div>
          <p class="mobile-number-text">Be sure to enter a phone number you can always access. It will be used to contact you when we deliver your order.</p>
        </div>
        <label class="label" for="">Address Info</label>
        <div class="field">
          <input type="text" class="address-field" placeholder="Enter your house number, building, and street" name="address" autocomplete="off">
          <div class="error-txt address-error-txt">Address length should be 5 - 150 characters</div>
        </div>
        <div class="field">
          <input type="text" class="municipality-field" placeholder="Enter your municipality/city" name="city-municipality" autocomplete="off">
          <div class="error-txt municipality-error-txt">Mandatory field</div>
        </div>
        <div class="field" style="margin-bottom: 0;">
          <input type="text" class="barangay-field" placeholder="Enter your barangay" name="barangay" autocomplete="off">
          <div class="error-txt barangay-error-txt">Mandatory field</div>
        </div>
      </div>
      <div class="save-btn-container">
        <button class="cancel-btn">Cancel</button>
        <button class="save-btn">Save</button>
      </div>
    </form> 
  </div>
<div class="delivery-banner"></div>

<script src="./js/shipping.js"></script>
<script src="./js/removeTransitionOnResize.js"></script>
<script src="./js/nav.js"></script>
<script>
  const changeAddressBtn = document.querySelector(".tap-to-change-address");
  const deliveryBanner = document.querySelector(".delivery-banner");
  const deliveryWrapper = document.querySelector("#delivery-wrapper");
  const cancelBtn = document.querySelector(".cancel-btn");

  changeAddressBtn.onclick = () => {
    deliveryBanner.classList.add("active");
    deliveryWrapper.classList.add("active");
    if (<?php echo $count?> == 2) {
      body.classList.add("hide-scrollbar");
    }
  }

  cancelBtn.onclick = () => {
    deliveryBanner.classList.remove("active");
    deliveryWrapper.classList.remove("active");
    if (<?php echo $count?> == 2) {
      body.classList.remove("hide-scrollbar");
    }
  }
</script>

<script>
  var interval = 1000;
  setInterval(() => {
    $.ajax({
      url: './php/display_shipping_item.php',
      type: 'GET',
      data: "check",

      success: function(response) {
        if (response != "empty-shipping-item") {
          $('.shipping-item-container').html(response);
        }

        if (response == "empty-shipping-item") {
          location.href = "bag.php";
        }
      }
    });
  }, interval);
</script>

<script src="./js/shipping_validation/firstName.js"></script>
<script src="./js/shipping_validation/surname.js"></script>
<script src="./js/shipping_validation/mobileNumber.js"></script>
<script src="./js/shipping_validation/address.js"></script>
<script src="./js/shipping_validation/cityMunicipality.js"></script>
<script src="./js/shipping_validation/barangay.js"></script>

  
<?php require_once "./require/footer.php"; ?>