const bagTable = document.getElementById('bag-page-table');

// setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/bag.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        bagTable.innerHTML = data;
      }
    }
  }
  xhr.send();
// }, 300);

