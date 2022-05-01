const bagContentItemsContainer = document.querySelector('.bag-added-item-container');
const viewContent = document.querySelector(".bag-view-content");


setInterval(() => {
  // Ajax
  let xhr = new XMLHttpRequest(); // Creating XML object.
  xhr.open("GET", "./php/bag_display_added_items.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        bagContentItemsContainer.innerHTML = data;
      }
    }
  }
  xhr.send();
}, 1000);
