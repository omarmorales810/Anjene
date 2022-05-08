const deliveryFormSurname = document.querySelector('.delivery-form');
const saveBtnSurname = document.querySelector('.save-btn');
const surnameErrorTxt = document.querySelector('.surname-error-txt');
const surnameInput = document.querySelector('.surname-field');

deliveryFormSurname.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

saveBtnSurname.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/surname_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-surname") {
          surnameErrorTxt.style.display = "flex";
          surnameErrorTxt.innerHTML = "Mandatory field";
          surnameInput.classList.add("error-input");
        }
        
        if (data == "short-surname") {
          surnameErrorTxt.style.display = "flex";
          surnameErrorTxt.innerHTML = "The length of surname should be atleast 3 characters";
          surnameInput.classList.add("error-input");
        }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormSurname); // Creating new formData object
  xhr.send(formData);
});

surnameInput.onkeyup = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/surname_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "short-surname") {
          surnameErrorTxt.style.display = "flex";
          surnameErrorTxt.innerHTML = "The length of surname should be atleast 3 characters";
          surnameInput.classList.add("error-input");
        }
        else {
          surnameErrorTxt.style.display = "none";
          surnameErrorTxt.innerHTML = "";
          surnameInput.classList.remove("error-input");
        }

        if (data == "blank-surname") {
          surnameErrorTxt.style.display = "flex";
          surnameErrorTxt.innerHTML = "Mandatory field";
          surnameInput.classList.add("error-input");
        }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormSurname); // Creating new formData object
  xhr.send(formData);
}