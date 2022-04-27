const tiles = document.querySelector('.tiles');


// setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/index.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        tiles.innerHTML = data;
      }
    }
  }
  xhr.send();
// }, 300);