const Loginform = document.querySelector('.sign-in');
const signInBtn = document.querySelector('.login-submit-btn');
const alertBoxLogin = document.querySelector('.alert');

Loginform.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

signInBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/signin.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        
        if (data == 'success') {
          location.href = 'index.php';
        }
        else {
          alertBoxLogin.style.display = 'flex';
          alertBoxLogin.innerHTML = data;
        }
      }
    }
  });
  let formData = new FormData(Loginform); // Creating new formData object
  xhr.send(formData);
});
