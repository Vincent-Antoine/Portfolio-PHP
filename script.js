particlesJS.load("particles-js", "./assets/json/particles-config.json");

// Back to top button functionality
document.addEventListener("DOMContentLoaded", function () {
  const backToTopButton = document.querySelector(".back-to-top");

  // Montrer ou cacher le bouton en fonction du défilement
  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  });

  backToTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth", // Défilement fluide
    });
  });
});
