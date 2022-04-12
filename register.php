<?php require_once "./require/header.php"; ?>


  <div class="form-wrapper">
    <header class="header">Create Your Account</header>
    <div class="intro-form-text">
      <span>Your need to create your own account so you can go shopping.</span>
      <span>already have an account? <a href="login.php">Login now</a></span>
    </div>
    <form action="#" class="form signup">
      <div class="name-field">
        <div class="field">
          <input type="text" placeholder="First name" name="first-name">
        </div>
        <div class="field">
          <input type="text" placeholder="Surname" name="surname">
        </div>
      </div>
      <div class="field">
        <input type="text" placeholder="Phone number">
      </div>
      <div class="field">
        <input type="text" placeholder="Email Address" name="email">
      </div>
      <div class="field">
        <input type="password" placeholder="Password">
      </div>
      <div class="field">
        <input type="password" placeholder="Repeat password">
      </div>
      <div class="submit-btn-field">
        <button class="submit-btn">Sign up</button>
      </div>
    </form>
  </div>







  <!-- Javascript -->
  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
<?php require_once "./require/footer.php"; ?>