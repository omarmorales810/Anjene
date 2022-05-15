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
const modalError = document.querySelector("#error-modal");
const modalBanner = document.querySelector(".modal-banner");
const modalBtn = document.getElementsByClassName("modal-btn");

const commentBtn = document.querySelector(".send-review");
const commentForm = document.querySelector("#comment-form");

const commentContainer = document.querySelector(".reviews-container");
const commentCount = document.querySelector(".comment-count");
const html = document.documentElement;

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
        console.log(data);
        
        if (data == "added-to-cart") {
          modal.classList.add("active");
          modalBanner.classList.add("active");
          body.classList.add("hide-scrollbar");
        }

        if (data == "invalid") {
          modalError.classList.add("show-error-modal");
          modalBanner.classList.add("active");
          body.classList.add("hide-scrollbar");
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

for (let i = 0; i < modalBtn.length; i++) {
  modalBtn[i].onclick = () => {
    modalError.classList.remove("show-error-modal");
    modal.classList.remove("active");
    modalBanner.classList.remove("active");
    body.classList.remove("hide-scrollbar");
  }
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





commentForm.onsubmit = (e) => {
  e.preventDefault(); // Prevent form from submitting
}

commentBtn.onclick = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("POST", "php/insert_comment.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        if (data == "comment_success") {
          cancelBtn.classList.remove('active');
          sendReviewBtn.classList.remove("active");
          sendReviewBtn.classList.remove("active2");
          sendReviewInput.value = "";
        }
        else {
          location.href="login.php";
        }
      }
    }
  }
  let formData = new FormData(commentForm); // Creating new formData object
  xhr.send(formData); // Sending the form data to php
}

setInterval(() => {
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("POST", "php/display_comment.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        commentContainer.innerHTML = data;
      }
    }
  }
  xhr.send();
}, 300);

setInterval(() => {
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("POST", "php/count_comment.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        commentCount.innerHTML = data + " comments";
      }
    }
  }
  xhr.send();
}, 300);


















