
const deleteForm = document.querySelector('.remove-item-form');
const deleteBtn = document.querySelector('.remove-btn');

deleteForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

deleteBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/signin.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;
        
        if (data == 'success') {
          alert("successfully loggedin");
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


