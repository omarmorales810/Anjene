<?php require_once "./require/header.php"; ?>
<div class="wrapper">
  <header class="header">Shipping Information</header>
  <div class="intro-form-text">Please fill out this form and click the submit button</div>
  <form action="#" class="delivery-form">
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
    <div class="field">
      <input type="text" class="barangay-field" placeholder="Enter your barangay" name="barangay" autocomplete="off">
      <div class="error-txt barangay-error-txt">Mandatory field</div>
    </div>
    <div class="save-btn-container">
      <button class="save-btn">Save</button>
    </div>
  </form> 
</div>

<script src="./js/shipping_validation/firstName.js"></script>
<script src="./js/shipping_validation/surname.js"></script>
<script src="./js/shipping_validation/mobileNumber.js"></script>
<script src="./js/shipping_validation/address.js"></script>
<script src="./js/shipping_validation/cityMunicipality.js"></script>
<script src="./js/shipping_validation/barangay.js"></script>
<script src="./js/shipping.js"></script>
<script src="./js/removeTransitionOnResize.js"></script>
<script src="./js/nav.js"></script>

<?php require_once "./require/footer.php"; ?>