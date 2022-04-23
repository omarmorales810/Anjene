const increment = document.querySelector(".quantity-btn-increment");
const decrement = document.querySelector(".quantity-btn-decrement");
const quantityInput = document.querySelector(".quantity-input");
count = 0;

function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
}

quantityInput.value = count;

increment.onclick = () => {
  count += 1;
  quantityInput.value = count;
}

decrement.onclick = () => {
  if (count > 0) {
    count -= 1;
    quantityInput.value = count;
  }
}

