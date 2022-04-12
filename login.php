<?php require_once "./require/header.php"; ?>


  <div class="form-wrapper">
    <header class="header">Welcome To Login</header>
    <div class="intro-form-text">
      <span>Don't have an account? <a href="register.php">Register now</a></span>
    </div>
    <form action="#" class="form sign-in">
      <div class="field">
        <input type="text" placeholder="Email Address" name="email">
      </div>
      <div class="field">
        <input type="password" placeholder="Password">
      </div>
      <div class="submit-btn-field">
        <button class="submit-btn">Login</button>
      </div>
    </form>
  </div>




  <!-- Javascript -->
  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
<?php require_once "./require/footer.php"; ?>