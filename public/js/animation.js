let container = document.querySelector(".container");
let search = document.querySelector(".search");
window.addEventListener("DOMContentLoaded", (event) => {
  // fade in
  container.classList.add("fade-in");
  search.classList.add("fade-in");
  // slide up
  let items = document.querySelectorAll(".item");
  const options = {
    threshold: 1,
  };
  const slideUp = new IntersectionObserver((entries, slideUp) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      } else {
        entry.target.classList.add("slide-up");
        slideUp.unobserve(entry.target);
      }
    });
  }, options);
  items.forEach((item) => {
    slideUp.observe(item);
  });
});
