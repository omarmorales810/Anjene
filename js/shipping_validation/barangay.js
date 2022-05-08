const deliveryFormBarangay = document.querySelector('.delivery-form');
const saveBtnBarangay = document.querySelector('.save-btn');
const barangayErrorTxt = document.querySelector('.barangay-error-txt');
const barangayInput = document.querySelector('.barangay-field');

deliveryFormBarangay.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

saveBtnBarangay.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/barangay_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-barangay") {
          barangayErrorTxt.style.display = "flex";
          barangayErrorTxt.innerHTML = "Mandatory field";
          barangayInput.classList.add("error-input");
        }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormBarangay); // Creating new formData object
  xhr.send(formData);
});

barangayInput.onkeyup = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/barangay_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-barangay") {
          barangayErrorTxt.style.display = "flex";
          barangayErrorTxt.innerHTML = "Mandatory field";
          barangayInput.classList.add("error-input");
        }
        else {
          barangayErrorTxt.style.display = "none";
          barangayErrorTxt.innerHTML = "";
          barangayInput.classList.remove("error-input");
        }
      }
    }
  });
  let formData = new FormData(deliveryFormBarangay); // Creating new formData object
  xhr.send(formData);
}