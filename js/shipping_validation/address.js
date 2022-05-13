const deliveryFormAddress = document.querySelector('.delivery-form');
const saveBtnAddress = document.querySelector('.save-btn');
const addressErrorTxt = document.querySelector('.address-error-txt');
const addressInput = document.querySelector('.address-field');

deliveryFormAddress.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

// saveBtnAddress.addEventListener('click', () => {
//   let xhr = new XMLHttpRequest(); // Creating XML object
//   xhr.open('POST', './php/shipping_validation/address_validation.php', true);
//   xhr.addEventListener('load', () => {
//     if(xhr.readyState === XMLHttpRequest.DONE) {
//       if(xhr.status === 200) {
//         let data = xhr.response;
//         // empty first name
//         if (data == "blank-address") {
//           addressErrorTxt.style.display = "flex";
//           addressErrorTxt.innerHTML = "Mandatory field";
//           addressInput.classList.add("error-input");
//         }

//         if (data == "short-address") {
//           addressErrorTxt.style.display = "flex";
//           addressErrorTxt.innerHTML = "Address length should be 5 - 150 characters";
//           addressInput.classList.add("error-input");
//         }

//         console.log(data);
//       }
//     }
//   });
//   let formData = new FormData(deliveryFormAddress); // Creating new formData object
//   xhr.send(formData);
// });

addressInput.onkeyup = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/address_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;

        if (data == "short-address") {
          addressErrorTxt.style.display = "flex";
          addressErrorTxt.innerHTML = "Address length should be 5 - 150 characters";
          addressInput.classList.add("error-input");
        }
        else {
          addressErrorTxt.style.display = "none";
          addressErrorTxt.innerHTML = "";
          addressInput.classList.remove("error-input");
        }

        if (data == "blank-address") {
          addressErrorTxt.style.display = "flex";
          addressErrorTxt.innerHTML = "Mandatory field";
          addressInput.classList.add("error-input");
        }
      }
    }
  });
  let formData = new FormData(deliveryFormAddress); // Creating new formData object
  xhr.send(formData);
}