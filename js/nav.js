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

search.onclick = () => {
   searchBanner.classList.toggle("active");
  searchBox.classList.toggle("active");
  searchBoxContainer.classList.toggle("active");
  navContainer.classList.toggle("active");
}

searchClose.onclick = () => {
  searchBanner.classList.remove("active");
  searchBox.classList.remove("active");
  searchBoxContainer.classList.remove("active");
  navContainer.classList.remove("active");
  searchInput.value = "";
}

searchBanner.onclick = () => {
  searchBanner.classList.remove("active");
  searchBox.classList.remove("active");
  searchBoxContainer.classList.remove("active");
  navContainer.classList.remove("active");
  searchInput.value = "";
}

mobileMenu.onclick = () => {
  mobileNav.classList.toggle("active");
  mobileMenu.classList.toggle("active");
}

window.onresize = () => {

  if (window.innerWidth < 920) {
      searchBanner.classList.remove("active");
      searchBox.classList.remove("active");
      searchBoxContainer.classList.remove("active");
      navContainer.classList.remove("active");
      searchInput.value = "";
  }

  if (window.innerWidth > 920) {
    mobileNav.classList.remove("active");
    mobileMenu.classList.remove("active");
  }
}

window.onscroll = () => {
  searchBanner.classList.remove("active");
  searchBox.classList.remove("active");
  searchBoxContainer.classList.remove("active");
  navContainer.classList.remove("active");
  searchInput.value = "";

  mobileNav.classList.remove("active");
  mobileMenu.classList.remove("active");
}