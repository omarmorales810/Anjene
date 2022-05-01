const moreItemText = document.querySelector('.bag-more-item');

  setInterval(() => {
    // Ajax
    let xhr = new XMLHttpRequest(); // Creating XML object.
    xhr.open("GET", "./php/bag_more_item_text.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;

          if (data == "hide-bag-item-counter") {
            moreItemText.style.display = "none";
          }
          else {
            moreItemText.innerHTML = data;
            moreItemText.style.display = "block";
          }

          if (data < 4) {
            moreItemText.style.display = "none";
          }
        }
      }
    }
    xhr.send();
  }, 300);
