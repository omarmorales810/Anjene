const cancelBtn = document.querySelector(".cancel-review");
const sendReviewInput = document.querySelector(".comment-input");

cancelBtn.onclick = () => {
  if (sendReviewInput.value.length > 0) {
    sendReviewInput.value = "";
  }
}

