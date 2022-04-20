
const form = document.querySelector('.sign-in');
const signUpBtn = document.querySelector('.login-submit-btn');
const alertBox = document.querySelector('.alert');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

signUpBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/signup.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        alertBox.innerHTML = data;

      }
    }
  });
  let formData = new FormData(form); // Creating new formData object
  xhr.send(formData);
});