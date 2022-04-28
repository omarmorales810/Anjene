const cancelBtn = document.querySelector(".cancel-review");
const sendReviewBtn = document.querySelector(".send-review");
const sendReviewInput = document.querySelector(".comment-input");
const pageProduct = document.querySelector(".page-product");

// Form 
const productForm = document.querySelector(".product-form");
const incrementBtnForm = document.querySelector(".quantity-btn-increment");
const decrementBtnForm = document.querySelector(".quantity-btn-decrement");
const numberInputForm = document.querySelector(".quantity-input");
const addToBagBtn = document.querySelector(".add-to-cart-link");
const buyNowLink = document.querySelector(".buy-now-link");

const modal = document.querySelector(".modal");
const modalBanner = document.querySelector(".modal-banner");
const modalBtn = document.querySelector(".modal-btn");

productForm.onsubmit = (e) => {
  e.preventDefault(); // Prevent form from submitting
}

addToBagBtn.onclick = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("POST", "php/product.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        
        if (data == "added to cart") {
          modal.classList.add("active");
          modalBanner.classList.add("active");
        }

        if (data == "user_session_not_set") {
          location.href = "login.php";
        }
      }
    }
  }
  let formData = new FormData(productForm); // Creating new formData object
  xhr.send(formData); // Sending the form data to php
}














// Comment Section

// Bag quantity counter
cancelBtn.onclick = () => {
  if (sendReviewInput.value.length > 0) {
    sendReviewInput.value = "";
  }
  cancelBtn.classList.remove('active');
  sendReviewBtn.classList.remove("active");
  sendReviewBtn.classList.remove("active2");
}

sendReviewInput.onclick = () => {
  sendReviewBtn.classList.add("active");
  cancelBtn.classList.add("active");
}

sendReviewInput.oninput = () => {
  if (sendReviewInput.value.length > 0) {
    sendReviewBtn.classList.add("active2");
  }
  else {
    sendReviewBtn.classList.remove("active2");
  }
}

