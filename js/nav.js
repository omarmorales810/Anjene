const searchBox = document.querySelector(".search-box");
const searchBoxContainer = document.querySelector(".search-box-container");
const search = document.querySelector(".search");
const searchBanner = document.querySelector(".search-banner ");
const searchClose = document.querySelector(".search-close-icon");
const navContainer = document.querySelector(".nav-container");
const searchInput = document.querySelector(".search-input");
const body = document.querySelector(".body");
const mobileNav = document.querySelector(".mobile-nav");
const mobileMenu = document.querySelector(".burger-container");
const navBag = document.querySelector(".bag");
const bagViewBox = document.querySelector(".bag-view-content");

let resetTimer2;
let toggleTrue = true;

search.onclick = () => {
  if (toggleTrue == true) {
    toggleTrue = false;
    searchBanner.classList.toggle("active");
    searchBox.classList.toggle("active");
    searchBoxContainer.classList.toggle("active");
    navContainer.classList.toggle("active");
  }

  clearTimeout(resetTimer2);
  resetTimer2 = setTimeout(() => {
    toggleTrue = true;
  }, 300);
}

searchClose.onclick = () => {
  if (toggleTrue == true) {
    toggleTrue = false;
    searchBanner.classList.remove("active");
    searchBox.classList.remove("active");
    searchBoxContainer.classList.remove("active");
    navContainer.classList.remove("active");
    searchInput.value = "";
  }

  clearTimeout(resetTimer2);
  resetTimer2 = setTimeout(() => {
    toggleTrue = true;
  }, 300);
}

navBag.onclick = () => {
  if (toggleTrue == true) {
    toggleTrue = false;
    bagViewBox.classList.toggle("active");
    searchBanner.classList.toggle("active");
  }

  clearTimeout(resetTimer2);
  resetTimer2 = setTimeout(() => {
    toggleTrue = true;
  }, 300);
}

searchBanner.onclick = () => {
  if (toggleTrue == true) {
    toggleTrue = false;
    searchBanner.classList.remove("active");
    searchBox.classList.remove("active");
    searchBoxContainer.classList.remove("active");
    navContainer.classList.remove("active");
    bagViewBox.classList.remove("active");
    searchInput.value = "";
  }

  clearTimeout(resetTimer2);
  resetTimer2 = setTimeout(() => {
    toggleTrue = true;
  }, 300);
}

mobileMenu.onclick = () => {
  if (toggleTrue == true) {
    toggleTrue = false;

    mobileNav.classList.toggle("active");
    mobileMenu.classList.toggle("active");
    navBag.classList.toggle("active");
    bagViewBox.classList.remove("active");
  }

  clearTimeout(resetTimer2);  
  resetTimer2 = setTimeout(() => {
    toggleTrue = true;
  }, 500);
}

window.onresize = () => {

  if (window.innerWidth < 830) {
      searchBanner.classList.remove("active");
      searchBox.classList.remove("active");
      searchBoxContainer.classList.remove("active");
      navContainer.classList.remove("active");
      searchInput.value = "";
  }

  if (window.innerWidth > 830) {
    mobileNav.classList.remove("active");
    mobileMenu.classList.remove("active");
    navBag.classList.remove("active");
  }
}

window.onscroll = () => {
  // searchBanner.classList.remove("active");
  // searchBox.classList.remove("active");
  // searchBoxContainer.classList.remove("active");
  navContainer.classList.remove("active");
  // searchInput.value = "";

  mobileNav.classList.remove("active");
  mobileMenu.classList.remove("active");
  navBag.classList.remove("active");
}