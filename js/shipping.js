const deliveryForm = document.querySelector('.delivery-form');
const saveBtn = document.querySelector('.save-btn');

deliveryForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Preventing form from submitting
});

saveBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest(); // Creating XML object
  xhr.open('POST', './php/insert_address.php', true);
  xhr.addEventListener('load', () => {
    if(xhr.readyState === XMLHttpRequest.DONE) {
      if(xhr.status === 200) {
        let data = xhr.response;

        if (data == "insert-address-success") {
          location.href = 'shipping.php';
        }
      }
    }
  });
  let formData = new FormData(deliveryForm); // Creating new formData object
  xhr.send(formData);
});
