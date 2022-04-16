const cancelBtn = document.querySelector(".cancel-review");
const sendReviewBtn = document.querySelector(".send-review");
const sendReviewInput = document.querySelector(".comment-input");

cancelBtn.onclick = () => {
  if (sendReviewInput.value.length > 0) {
    sendReviewInput.value = "";
  }
}

sendReviewInput.oninput = () => {
  if (sendReviewInput.value.length > 0) {
    sendReviewBtn.classList.add("active");
  }
  else {
    sendReviewBtn.classList.remove("active");
  }
}

