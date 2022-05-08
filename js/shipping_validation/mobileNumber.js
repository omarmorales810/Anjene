const deliveryFormMobile = document.querySelector('.delivery-form');
const saveBtnMobile = document.querySelector('.save-btn');
const mobileErrorTxt = document.querySelector('.mobile-error-txt');
const mobileInput = document.querySelector('.mobile-input');

deliveryFormMobile.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

saveBtnMobile.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/mobile_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-mobile") {
          mobileErrorTxt.style.display = "flex";
          mobileErrorTxt.innerHTML = "Mandatory field";
          mobileInput.classList.add("error-input");
        }

        if (data == "invalid-mobile") {
          mobileErrorTxt.style.display = "flex";
          mobileErrorTxt.innerHTML = "Please enter a valid phone number";
          mobileInput.classList.add("error-input");
        }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormMobile); // Creating new formData object
  xhr.send(formData);
});

mobileInput.onkeyup = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/mobile_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;

        if (data == "invalid-mobile") {
          mobileErrorTxt.style.display = "flex";
          mobileErrorTxt.innerHTML = "Please enter a valid phone number";
          mobileInput.classList.add("error-input");
        }
        else {
          mobileErrorTxt.style.display = "none";
          mobileErrorTxt.innerHTML = "";
          mobileInput.classList.remove("error-input");
        }

        if (data == "blank-mobile") {
          mobileErrorTxt.style.display = "flex";
          mobileErrorTxt.innerHTML = "Mandatory field";
          mobileInput.classList.add("error-input");
        }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormMobile); // Creating new formData object
  xhr.send(formData);
}