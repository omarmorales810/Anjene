const bagItemCounter = document.querySelector('.item-counter');

setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/bag_item_counter.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        if (data == "hide-bag-item-counter") {
          bagItemCounter.innerHTML = 0;
        }
        else {
          bagItemCounter.innerHTML = data;
        }
      }
    }
  }
  xhr.send();
}, 300);