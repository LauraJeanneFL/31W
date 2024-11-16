document.addEventListener("DOMContentLoaded", function () {
  console.log("Carrousel JS chargé");

  // Sélection des éléments principaux
  const carrousel = document.querySelector(".carrousel");
  const carrouselClose = document.querySelector(".carrousel__x");
  const carrouselLeft = document.querySelector(".carrousel__gauche");
  const carrouselRight = document.querySelector(".carrousel__droite");
  const carrouselFigure = document.querySelector(".carrousel__figure");
  const carrouselIndicators = document.querySelector(".carrousel__indicateurs");
  const galerieImages = document.querySelectorAll(".galerie img");

  let currentIndex = 0;

  // Fonction pour afficher l'image sélectionnée dans le carrousel
  function remplirCarrousel(index) {
    const image = galerieImages[index];
    carrouselFigure.innerHTML = `<img src="${image.src}" alt="${image.alt}" class="carrousel__img--visible">`;

    // Mettre à jour les indicateurs
    carrouselIndicators.innerHTML = "";
    galerieImages.forEach((_, i) => {
      const indicator = document.createElement("span");
      indicator.classList.add("carrousel__indicateur");
      if (i === index) {
        indicator.classList.add("carrousel__indicateur--actif");
      }
      indicator.addEventListener("click", () => setIndex(i));
      carrouselIndicators.appendChild(indicator);
    });

    currentIndex = index;
  }

  // Fonction pour changer d'image dans le carrousel
  function setIndex(index) {
    currentIndex = index;
    remplirCarrousel(currentIndex);
  }

  // Navigation suivante
  function showNext() {
    const nextIndex = (currentIndex + 1) % galerieImages.length;
    setIndex(nextIndex);
  }

  // Navigation précédente
  function showPrev() {
    const prevIndex =
      (currentIndex - 1 + galerieImages.length) % galerieImages.length;
    setIndex(prevIndex);
  }

  // Ouvrir le carrousel sur l'image sélectionnée
  galerieImages.forEach((img, index) => {
    img.addEventListener("click", () => {
      currentIndex = index;
      remplirCarrousel(currentIndex);
      carrousel.classList.add("carrousel--ouvrir");
    });
  });

  // Fermer le carrousel
  if (carrouselClose) {
    carrouselClose.addEventListener("click", () => {
      carrousel.classList.remove("carrousel--ouvrir");
    });
  }

  // Boutons de navigation
  if (carrouselRight) {
    carrouselRight.addEventListener("click", showNext);
  }
  if (carrouselLeft) {
    carrouselLeft.addEventListener("click", showPrev);
  }
});
