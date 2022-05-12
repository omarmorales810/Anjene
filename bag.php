<?php 
  require_once "./require/header.php";
  require_once "./require/config.php";
?>
  <style>
    
  </style>
  <section class="bag-page">
    <header class="bag-page-header-header"><svg class="bag-page-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg>My Bag</header>
    <div class="bag-page-container">
      <div class="bag-page-header">(0 Item)</div>
      <div id="bag-page-table" class="bag-page-table"></div>
      <?php if (isset($_SESSION["user"])) { ?>
        <div id="loading">
          <svg role="status" class="spinner animation-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
          </svg>
        </div>
      <?php } ?>
      <div action="#" class="check-out-and-remove-all-btn-container">
        <header>
          <span class="total-item-price"></span>
          <form action="" id="remove-all-item-form">
            <button class="item-remove-btn remove-all-btn" style="position: relative; top: 0px !important;">Remove all</button>
          </form>
        </header>
        <form action="#" class="checkout-btn-container">
          <button class="checkout-btn">Check Out</button>
        </form>
      </div>

      <?php if (!isset($_SESSION["user"])) { ?>
        <div class='empty-bag-container'>
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
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- <div class="modal">
    <div class="modal-container">
      <div class="modal-bag">
        <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg>
      </div>
      <div class="modal-text">Item has been added to your shopping bag</div>
      <div class="modal-btn-container">
        <button class="modal-btn">Okay</button>
      </div>
    </div>
  </div> -->

  <!-- <div class="modal-remove-item">
    <div class="modal-remove-item-container">
      <img class="trashcan" src="./img/trash-can-outline-svgrepo-com.svg" alt="">
      <div class="modal-text">Item has been removed</div>
      <div class="modal-btn-container">
        <button class="modal-remove-btn" id="modal-remove-btn-yes">Okay</button>
      </div>
    </div>
  </div> -->
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
  <div class="modal-remove-banner"></div>
  <footer class="footer">
    <span>&copy; 2022 Anjene. All right reserved</span>
  </footer>

  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
  <script src="./js/bagItem.js"></script>
  <script src="./js/shipping_validation/firstName.js"></script>
  <script src="./js/shipping_validation/surname.js"></script>
  <script src="./js/shipping_validation/mobileNumber.js"></script>
  <script src="./js/shipping_validation/address.js"></script>
  <script src="./js/shipping_validation/cityMunicipality.js"></script>
  <script src="./js/shipping_validation/barangay.js"></script>
  <script src="./js/shipping.js"></script>
  <script>
    setInterval(() => {
    $.ajax({
    url: 'php/bag_header_counter.php',
    type: 'GET',
    data: "check",
    success: function(response) {
      if (response > 0) {
        $('.bag-page-header').html("(" + response + " Item)");
      }
      else {
        $('.bag-page-header').html("(0 Item)")
      }
    }
    });
  }, 1000);
  </script>

  <script>
    const checkoutContainer = document.querySelector(".check-out-and-remove-all-btn-container");
    setInterval(() => {
    let xhr = new XMLHttpRequest(); // Creating XML object.
    xhr.open("POST", "php/bag_show_checkout.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (data == "show") {
            checkoutContainer.style.display = "flex";
          }
          else {
            checkoutContainer.style.display = "none";
          }
        }
      }
    }
    xhr.send();
  }, 1000);
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
          totalPrice.innerHTML = "Overall (₱" + data + ")";
        }
      }
    }
    xhr.send();
  }, 1000);
  </script>


<script>
  const bagForm = document.querySelector("#remove-all-item-form");
  const removeAllBtn = document.querySelector(".remove-all-btn");

  bagForm.onsubmit = (e) => {
    e.preventDefault();
  }

  removeAllBtn.onclick = () => {
    let xhr = new XMLHttpRequest(); // Creating XML object.
    xhr.open("POST", "php/bag_remove_all.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          alert("All item has been deleted");
        }
      }
    }
    xhr.send();
  }
</script>

<script>
  const checkOutForm = document.querySelector(".checkout-btn-container");
  const checkOutBtn = document.querySelector(".checkout-btn");

  const deliveryBanner = document.querySelector(".delivery-banner");
  const deliveryWrapper = document.querySelector("#delivery-wrapper");
  const cancelBtn = document.querySelector(".cancel-btn");

  checkOutForm.onsubmit = (e) => {
    e.preventDefault();
  }

  checkOutBtn.onclick = () => {
    let xhr = new XMLHttpRequest(); // Creating XML object.
    xhr.open("GET", "php/go_to_shipping.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          
          if (data == "meron-na-address") {
            location.href = "shipping.php"
          }
          
          if (data == "wala-pa") {
            deliveryBanner.classList.add("active");
            deliveryWrapper.classList.add("active");
            document.body.classList.add("hide-scrollbar");
          }
        }
      }
    }
    xhr.send();
  }

  cancelBtn.onclick = () => {
    deliveryBanner.classList.remove("active");
    deliveryWrapper.classList.remove("active");
    document.body.classList.remove("hide-scrollbar");
  }
</script>

<script>
jQuery(document).ready(function() {
    jQuery('#loading').show().delay(900).queue(function(n) {
      $(this).hide(); n();
    });
});
</script>

</body>
</html>
