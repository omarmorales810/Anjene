<?php require_once "./require/header.php" ?>
  <section class="bag-page">
    <header class="bag-page-header-header">Shopping Bag <svg class="bag-page-svg" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" height="44" viewBox="0 0 13 44" width="13"><g fill="none" fill-rule="evenodd"><path d="m0 44h13v-44h-13z"/><path d="m12 25.9c0 .6-.5 1.1-1.1 1.1h-8.8c-.6 0-1.1-.5-1.1-1.1v-7.9c0-.5.5-1 1.1-1h8.9c.6 0 1.1.5 1.1 1.1v7.8zm-5.5-11.9c1.2 0 2.1.9 2.3 2h-4.6c.2-1.1 1.1-2 2.3-2zm4.4 2h-1.1c-.2-1.7-1.6-3-3.3-3s-3.1 1.3-3.3 3h-1.1c-1.2 0-2.1.9-2.1 2.1v7.9c0 1.1.9 2 2.1 2h8.9c1.1 0 2.1-.9 2.1-2.1v-7.9c-.1-1.1-1-2-2.2-2z" fill="#1d1d1f"/></g></svg></header>
    <div class="bag-page-container">
      <div class="bag-page-header">(0 Item)</div>
      <div id="bag-page-table" class="bag-page-table"></div>

      <div class="check-out-and-remove-all-btn-container">
        <span class="total-item-price"></span>
        <button class="checkout-btn">Checkout</button>
      </div>
    </div>
  </section>
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
      $('.bag-page-header').html("(" + response + " Item)");
    }
    });
  }, 300);
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
  }, 300);
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
          totalPrice.innerHTML = "Total (₱" + data + ")";
        }
      }
    }
    xhr.send();
  }, 1000);
  </script>


</body>
</html>
