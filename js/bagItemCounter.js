const bagItemCounter = document.querySelector('.item-counter');

setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/bag_item_counter.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        bagItemCounter.style.display = "flex";

        if (data == "hide-bag-item-counter") {
          bagItemCounter.innerHTML = 0;
        }
        else {
          bagItemCounter.innerHTML = data;
        }

        if (data == "9+") {
          bagItemCounter.classList.add("adjust-width");
        }
        else {
          bagItemCounter.classList.remove("adjust-width");
        }
      }
    }
  }
  xhr.send();
}, 300);