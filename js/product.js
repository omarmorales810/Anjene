const cancelBtn = document.querySelector(".cancel-review");
const sendReviewBtn = document.querySelector(".send-review");
const sendReviewInput = document.querySelector(".comment-input");

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

