const searchBox = document.querySelector(".search-box");
const searchBoxContainer = document.querySelector(".search-box-container");
const search = document.querySelector(".search");
const searchBanner = document.querySelector(".search-banner ");
const searchClose = document.querySelector(".search-close-icon");
const navLinks = document.getElementsByClassName("nav-link");
const navContainer = document.querySelector(".nav-container");
const logo = document.querySelector("#logo");
const bagIcon = document.querySelector(".bag");
const searchInput = document.querySelector(".search-input");

search.onclick = () => {
  for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.toggle("active");
  }
  searchBanner.classList.toggle("active");
  searchBox.classList.toggle("active");
  searchBoxContainer.classList.toggle("active");
  navContainer.classList.toggle("active");
  logo.classList.toggle("active");
  search.classList.toggle("active");
  bagIcon.classList.toggle("active");
}

searchClose.onclick = () => {
  for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.remove("active");
  }
  searchBanner.classList.remove("active");
  searchBox.classList.remove("active");
  searchBoxContainer.classList.remove("active");
  navContainer.classList.remove("active");
  logo.classList.remove("active");
  search.classList.remove("active");
  bagIcon.classList.remove("active");
  searchInput.value = "";
}

searchBanner.onclick = () => {
  for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.remove("active");
  }
  searchBanner.classList.remove("active");
  searchBox.classList.remove("active");
  searchBoxContainer.classList.remove("active");
  navContainer.classList.remove("active");
  logo.classList.remove("active");
  search.classList.remove("active");
  bagIcon.classList.remove("active");
  searchInput.value = "";
}
