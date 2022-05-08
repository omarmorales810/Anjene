const deliveryFormFirstName = document.querySelector('.delivery-form');
const saveBtnFirstName = document.querySelector('.save-btn');
const firstNameErrorTxt = document.querySelector('.first-name-error-txt');
const firstNameInput = document.querySelector('.first-name-field');

deliveryFormFirstName.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

saveBtnFirstName.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/first_name_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-first-name") {
          firstNameErrorTxt.style.display = "flex";
          firstNameErrorTxt.innerHTML = "Mandatory field";
          firstNameInput.classList.add('error-input');
        }

        if (data == "short-first-name") {
          firstNameErrorTxt.style.display = "flex";
          firstNameErrorTxt.innerHTML = "The length of first name should be atleast 3 characters";
          firstNameInput.classList.add('error-input');
        }

        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormFirstName); // Creating new formData object
  xhr.send(formData);
});

firstNameInput.onkeyup = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/first_name_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name

        if (data == "short-first-name") {
          firstNameErrorTxt.style.display = "flex";
          firstNameErrorTxt.innerHTML = "The length of first name should be atleast 3 characters";
          firstNameInput.classList.add('error-input');
        }
        else {
          firstNameErrorTxt.style.display = "none";
          firstNameErrorTxt.innerHTML = "";
          firstNameInput.classList.remove('error-input');
        }

        if (data == "blank-first-name") {
          firstNameErrorTxt.style.display = "flex";
          firstNameErrorTxt.innerHTML = "Mandatory field";
          firstNameInput.classList.add('error-input');
        }

        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormFirstName); // Creating new formData object
  xhr.send(formData);
}