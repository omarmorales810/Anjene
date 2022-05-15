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
  
  <form action="#" id="payment-method-form" class="delivery-form2">
    <label class="label" for="" style="padding-bottom: 1rem;">Select Payment Method</label>
    <div class="payment-method-field-container">
      <div class="payment-method-field payment-method-field1">
        <span style="display: flex; justify-content: center; align-items: center;"><i class="fas fa-wallet payment-method-icon"></i>Cash on delivery</span>
        <input type="radio" name="payment-type" class="delivery-radio-input delivery-radio-input1" value="COD" checked>
      </div>
      <div class="credit-debit-field payment-method-field2">
        <div class="payment-method-field" style="border-radius: 5px 5px 0px 0px;">
          <span style="display: flex; justify-content: center; align-items: center;"><i class="fas fa-gift-card payment-method-icon"></i></i>Credit/Debit Card</span>
          <input type="radio" name="payment-type" class="delivery-radio-input delivery-radio-input2" value="Credit/Debit">
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
  <label class="label" for="">Package (<span class="shipping-item-counter">0 Item</span>)</label>
  <div class="shipping-item-container">
    <div id="#loading" class="shipping-loading">
      <svg role="status" class="spinner animation-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
      </svg>
    </div>
  </div>
  <div class="total-summary-container">
    <label class="label" for="">Order Summary</label>
    <div class="order-summary">
      <div class="subtotal-item">
        <span class="subtotal-text">Subtotal (<span class="shipping-item-counter">0 Item</span>)</span>
        <span class="subtotal-price total-item-price">₱0.00</span>
      </div>
      <div class="shipping-fee">
        <span class="shipping-fee-text">Shipping Fee</span>
        <span class="subtotal-price">₱70.00</span>
      </div>
      <div class="total">
        <span class="total-text">Subtotal</span>
        <span class="total-price-txt">₱0.00</span>
      </div>
    </div>
  </div>
  <div class="checkout-btn-container">
    <button form="payment-method-form" class="checkout-btn" id="shipping-checkout-btn">Check Out</button>
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
      body.classList.add("hide-scrollbar");
  }

  cancelBtn.onclick = () => {
    deliveryBanner.classList.remove("active");
    deliveryWrapper.classList.remove("active");
    window.location.reload();
      body.classList.remove("hide-scrollbar");
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

<script>
    const totalPrice = document.querySelector(".total-item-price");
    setInterval(() => {
    let xhr = new XMLHttpRequest(); // Creating XML object.
    xhr.open("POST", "php/bag_total_price.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data) {
            totalPrice.innerHTML = data;
          }
          else {
            totalPrice.innerHTML = "₱0.00"; 
          }
        }
      }
    }
    xhr.send();
  }, 1000);
  </script>

<script>
    const totalPriceMain = document.querySelector(".total-price-txt");
    setInterval(() => {
    let xhr = new XMLHttpRequest(); // Creating XML object.
    xhr.open("POST", "php/shipping_total_price.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data) {
            totalPriceMain.innerHTML = data;
          }
          else {
            totalPriceMain.innerHTML = "₱0.00"; 
          }
        }
      }
    }
    xhr.send();
  }, 1000);
  </script>

  <!-- Insert orders -->
  <script>
    const shippingCheckoutBtn = document.querySelector("#shipping-checkout-btn");
    const shippingCheckoutForm = document.querySelector("#payment-method-form");

    shippingCheckoutForm.onsubmit = (e) => {
      e.preventDefault();
    }

    shippingCheckoutBtn.onclick = () => {
      let xhr = new XMLHttpRequest(); // Creating XML object
      xhr.open('POST', './php/shipping_insert_order.php', true);
      xhr.addEventListener('load', () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
          if(xhr.status === 200) {
            let data = xhr.response;
            console.log(data);
          }
        }
      });
      let formData = new FormData(shippingCheckoutForm); // Creating new formData object
      xhr.send(formData);
    }
  </script>



<script>
  const shippingItemCounter = document.getElementsByClassName("shipping-item-counter");
  setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/bag_item_counter.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        
        if (data) {
          for (let i = 0; i < shippingItemCounter.length; i++) {
            shippingItemCounter[i].innerHTML = data + " Item";
          }
        }
      }
    }
  }
  xhr.send();
}, 300);
</script>

<script src="./js/shipping_validation/firstName.js"></script>
<script src="./js/shipping_validation/surname.js"></script>
<script src="./js/shipping_validation/mobileNumber.js"></script>
<script src="./js/shipping_validation/address.js"></script>
<script src="./js/shipping_validation/cityMunicipality.js"></script>
<script src="./js/shipping_validation/barangay.js"></script>

  
<?php require_once "./require/footer.php"; ?>