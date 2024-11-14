(function () {
  console.log("Carrousel JS chargé");

  let carrousel = document.querySelector(".carrousel");
  let carrousel__x = document.querySelector(".carrousel__x");
  let carrousel__gauche = document.querySelector(".carrousel__gauche");
  let carrousel__droite = document.querySelector(".carrousel__droite");
  let carrousel__figure = document.querySelector(".carrousel__figure");
  let galerie__img = document.querySelectorAll(".galerie img");
  let carrousel__indicateurs = document.querySelector(
    ".carrousel__indicateurs"
  );

  let currentIndex = 0;

  function remplirCarrousel() {
    carrousel__figure.innerHTML = "";
    carrousel__indicateurs.innerHTML = "";
    galerie__img.forEach((img, index) => {
      let imgElement = document.createElement("img");
      imgElement.src = img.src;
      imgElement.classList.add("carrousel__img");
      if (index === currentIndex)
        imgElement.classList.add("carrousel__img--visible");
      carrousel__figure.appendChild(imgElement);

      let indicateur = document.createElement("span");
      indicateur.classList.add("carrousel__indicateur");
      if (index === currentIndex)
        indicateur.classList.add("carrousel__indicateur--actif");
      indicateur.addEventListener("click", () => setIndex(index));
      carrousel__indicateurs.appendChild(indicateur);
    });
  }

  function setIndex(index) {
    currentIndex = index;
    document.querySelectorAll(".carrousel__img").forEach((img, i) => {
      img.classList.toggle("carrousel__img--visible", i === index);
    });
    document.querySelectorAll(".carrousel__indicateur").forEach((ind, i) => {
      ind.classList.toggle("carrousel__indicateur--actif", i === index);
    });
  }

  function showNext() {
    currentIndex = (currentIndex + 1) % galerie__img.length;
    setIndex(currentIndex);
  }

  function showPrev() {
    currentIndex =
      (currentIndex - 1 + galerie__img.length) % galerie__img.length;
    setIndex(currentIndex);
  }

  galerie__img.forEach((img, index) => {
    img.addEventListener("click", () => {
      currentIndex = index;
      remplirCarrousel();
      carrousel.classList.add("carrousel--ouvrir");
    });
  });

  carrousel__x.addEventListener("click", () => {
    carrousel.classList.remove("carrousel--ouvrir");
  });

  carrousel__droite.addEventListener("click", showNext);
  carrousel__gauche.addEventListener("click", showPrev);
})();
