
const form = document.querySelector('.signup');
const signUpBtn = document.querySelector('.submit-btn');
const alertBox = document.querySelector('.alert');
const text = document.querySelector(".gaptch-text");

form.addEventListener('submit', (e) => {
  let response = grecaptcha.getResponse();
  if(response.length == 0) { 
    text.style.display = "block";
    text.classList.add("textActive");
    e.preventDefault();
    return false;
  }
});

signUpBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/signup.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;

        if (data == 'success') {
          alert("Your account has been created");
          location.href = 'login.php';
          alertBox.style.display = "none";
        }
        else {
          alertBox.innerHTML = data;
          alertBox.style.display = "flex";
        }

      }
    }
  });
  let formData = new FormData(form); // Creating new formData object
  xhr.send(formData);
});