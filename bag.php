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
  <div class="modal-remove-item">
    <div class="modal-remove-item-container">
    <svg class="trashcan-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="593.727px" height="593.727px" viewBox="0 0 593.727 593.727" style="enable-background:new 0 0 593.727 593.727;"xml:space="preserve"><g><g><path d="M491.362,593.727H102.374c-20.865,0-37.84-16.975-37.84-37.84v-448.5h464.668v448.5C529.202,576.752,512.228,593.727,491.362,593.727z M79.677,122.529v433.357c0,12.516,10.182,22.697,22.697,22.697h388.989c12.516,0,22.697-10.182,22.697-22.697V122.529H79.677z"/></g><g><path d="M550.8,91.913H42.927V58.382c0-20.86,16.973-37.831,37.835-37.831h192.852C276.618,8.58,286.12,0,297.506,0
			c11.399,0,20.907,8.578,23.905,20.551H512.97c20.859,0,37.83,16.971,37.83,37.831V91.913L550.8,91.913z M58.07,76.77h477.587V58.382c0-12.51-10.178-22.688-22.688-22.688h-205.57l-0.148-7.42c-0.145-7.24-4.516-13.131-9.745-13.131c-5.219,0-9.586,5.893-9.736,13.136l-0.154,7.415H80.762c-12.512,0-22.692,10.177-22.692,22.688V76.77z"/></g><g><path d="M144.621,546.275c-15.949,0-28.924-12.977-28.924-28.926V196.011c0-15.95,12.975-28.926,28.924-28.926c15.95,0,28.926,12.976,28.926,28.926V517.35C173.547,533.299,160.571,546.275,144.621,546.275z M144.621,182.228c-7.599,0-13.781,6.183-13.781,13.783V517.35c0,7.6,6.183,13.783,13.781,13.783c7.601,0,13.783-6.184,13.783-13.783V196.011C158.404,188.411,152.222,182.228,144.621,182.228z"/></g><g>
		<path d="M243.094,546.275c-15.95,0-28.925-12.977-28.925-28.926V196.011c0-15.95,12.976-28.926,28.925-28.926
			c15.949,0,28.925,12.976,28.925,28.926V517.35C272.019,533.299,259.043,546.275,243.094,546.275z M243.094,182.228
			c-7.6,0-13.782,6.183-13.782,13.783V517.35c0,7.6,6.183,13.783,13.782,13.783s13.782-6.184,13.782-13.783V196.011
			C256.876,188.411,250.694,182.228,243.094,182.228z"/></g><g>
		<path d="M341.565,546.275c-15.949,0-28.926-12.977-28.926-28.926V196.011c0-15.95,12.977-28.926,28.926-28.926
			s28.926,12.976,28.926,28.926V517.35C370.491,533.299,357.515,546.275,341.565,546.275z M341.565,182.228
			c-7.6,0-13.783,6.183-13.783,13.783V517.35c0,7.6,6.184,13.783,13.783,13.783s13.783-6.184,13.783-13.783V196.011
			C355.347,188.411,349.165,182.228,341.565,182.228z"/></g>
	<g><path d="M440.038,546.275c-15.955,0-28.934-12.977-28.934-28.926V196.011c0-15.95,12.979-28.926,28.934-28.926
			c15.949,0,28.924,12.976,28.924,28.926V517.35C468.962,533.299,455.987,546.275,440.038,546.275z M440.038,182.228
			c-7.605,0-13.791,6.183-13.791,13.783V517.35c0,7.6,6.186,13.783,13.791,13.783c7.6,0,13.781-6.184,13.781-13.783V196.011
			C453.819,188.411,447.638,182.228,440.038,182.228z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
      <div class="modal-text">Do you want to remove the item?</div>
      <div class="modal-btn-container">
        <button class="modal-remove-btn" id="modal-remove-btn-yes">Yes</button>
        <button class="modal-remove-btn" id="modal-remove-btn-no">No</button>
      </div>
    </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  <div class="modal-remove-banner"></div>
  <footer class="footer">
    <span>&copy; 2022 Anjene. All right reserved</span>
  </footer>

  <script src="./js/nav.js"></script>
  <script src="./js/removeTransitionOnResize.js"></script>
  <script src="./js/bagItem.js"></script>
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
            location.href = "shipping-form.php";
          }
        }
      }
    }
    xhr.send();
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
