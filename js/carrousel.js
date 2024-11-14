(function () {
  console.log("Vive JavaScript");

  let carrousel__bouton = document.querySelector(".carrousel__bouton");
  let carrousel__x = document.querySelector(".carrousel__x");
  let carrousel = document.querySelector(".carrousel");
  let carrousel__figure = document.querySelector(".carrousel__figure");
  let galerie__img = document.querySelectorAll(".galerie img");

  let currentIndex = 0;

  // Fonction pour remplir le carrousel avec les images de la galerie
  function remplirCarrousel() {
    carrousel__figure.innerHTML = "";
    galerie__img.forEach((elm, index) => {
      let img = document.createElement("img");
      img.src = elm.src; // copie une image de la galerie vers le carrousel
      img.classList.add("carrousel__img");
      if (index !== currentIndex) {
        img.classList.add("carrousel__img--hidden");
      }
      carrousel__figure.appendChild(img);
    });
  }

  // Fonction pour afficher l'image à un index spécifique
  function afficheImage(index) {
    let images = document.querySelectorAll(".carrousel__img");
    images.forEach((img, i) => {
      img.classList.toggle("carrousel__img--visible", i === index);
      img.classList.toggle("carrousel__img--hidden", i !== index);
    });
    currentIndex = index;
  }

  // Événement pour afficher le carrousel en cliquant sur une image de la galerie
  galerie__img.forEach((img, index) => {
    img.addEventListener("click", () => {
      currentIndex = index;
      remplirCarrousel();
      afficheImage(currentIndex);
      carrousel.classList.add("carrousel__bouton");
    });
  });

  // Bouton pour fermer le carrousel
  carrousel__x.addEventListener("click", function () {
    carrousel.classList.remove("carrousel__bouton");
    console.log("fermer");
  });

  // Navigation pour passer à l'image suivante
  document.querySelector(".carrousel__droite").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % galerie__img.length;
    afficheImage(currentIndex);
  });

  // Navigation pour passer à l'image précédente
  document.querySelector(".carrousel__gauche").addEventListener("click", () => {
    currentIndex =
      (currentIndex - 1 + galerie__img.length) % galerie__img.length;
    afficheImage(currentIndex);
  });
})();
