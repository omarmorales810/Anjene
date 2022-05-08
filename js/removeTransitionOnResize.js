const navContainer2 = document.querySelector('.nav-container');
const mobileNav2 = document.querySelector(".mobile-nav");
// const tile = document.querySelector(".tile");
let resizeTimer;

window.addEventListener("resize", () => {
  navContainer2.classList.add("remove-all-transitions");
  mobileNav2.classList.add("remove-all-transitions");
  // tile.classList.add("remove-all-transitions");
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
      navContainer2.classList.remove("remove-all-transitions");
      mobileNav2.classList.remove("remove-all-transitions");
      // tile.classList.remove("remove-all-transitions");
  }, 300);
});

