let currentImage = document.querySelector(".images .preview-image");
let images = document.querySelectorAll(".images .all-images img");

currentImage.src = images[0].src;

images.forEach((image) => {
  image.addEventListener("click", (e) => {
    images.forEach((image) => {
      image.classList.remove("active");
    });
    e.target.classList.add("active");
    currentImage.src = e.target.src;
  });
});
