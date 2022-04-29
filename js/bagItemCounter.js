const bagItemCounter = document.querySelector('.item-counter');

setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/bag_item_counter.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        bagItemCounter.innerHTML = data;
      }
    }
  }
  xhr.send();
}, 300);