const deliveryFormCityMunicipality = document.querySelector('.delivery-form');
const saveBtnCityMunicipality = document.querySelector('.save-btn');
const municipalityCityErrorTxt = document.querySelector('.municipality-error-txt');
const municipalityInput = document.querySelector('.municipality-field');

deliveryFormCityMunicipality.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

saveBtnCityMunicipality.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/city_municipality_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-municipality") {
          municipalityCityErrorTxt.style.display = "flex";
          municipalityCityErrorTxt.innerHTML = "Mandatory field";
          municipalityInput.classList.add("error-input");
        }
        // else {
        //   municipalityCityErrorTxt.style.display = "none";
        //   municipalityCityErrorTxt.innerHTML = "";
        //   municipalityInput.classList.remove("error-input");
        // }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormCityMunicipality); // Creating new formData object
  xhr.send(formData);
});

municipalityInput.onkeyup = () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/shipping_validation/city_municipality_validation.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        // empty first name
        if (data == "blank-municipality") {
          municipalityCityErrorTxt.style.display = "flex";
          municipalityCityErrorTxt.innerHTML = "Mandatory field";
          municipalityInput.classList.add("error-input");
        }
        else {
          municipalityCityErrorTxt.style.display = "none";
          municipalityCityErrorTxt.innerHTML = "";
          municipalityInput.classList.remove("error-input");
        }
        console.log(data);
      }
    }
  });
  let formData = new FormData(deliveryFormCityMunicipality); // Creating new formData object
  xhr.send(formData);
}