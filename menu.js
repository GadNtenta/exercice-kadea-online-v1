const currentLocation = window.location.href;
const menuItems = document.querySelectorAll(".header__nav-link");
menuItems.forEach((item) => {
  if (item.href === currentLocation) {
    item.classList.add("active");
  }
});
