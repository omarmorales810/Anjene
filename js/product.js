const cancelBtn = document.querySelector(".cancel-review");
const sendReviewBtn = document.querySelector(".send-review");
const sendReviewInput = document.querySelector(".comment-input");
const pageProduct = document.querySelector(".page-product");


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

// setInterval(() => {
  // Ajax
  // let xhr = new XMLHttpRequest(); // Creating XML object.
  // xhr.open("GET", "./php/product.php", true);
  // xhr.onload = () => {
  //   if (xhr.readyState === XMLHttpRequest.DONE) {
  //     if (xhr.status === 200) {
  //       let data = xhr.response;
  //       pageProduct.innerHTML = data;
  //     }
  //   }
  // }
  // xhr.send();
// }, 500);

