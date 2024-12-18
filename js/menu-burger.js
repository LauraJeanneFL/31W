document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".burger");
  const menuContainer = document.querySelector(".menu-principal-container");

  // Vérifiez si les éléments existent
  if (!burger || !menuContainer) {
    console.error("Bouton burger ou conteneur de menu non trouvé.");
    return;
  }

  // Ajoutez un événement au clic sur le bouton burger
  burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    menuContainer.classList.toggle("active");
  });

  // Fermer le menu en cliquant en dehors
  document.addEventListener("click", (e) => {
    if (!menuContainer.contains(e.target) && !burger.contains(e.target)) {
      menuContainer.classList.remove("active");
      burger.classList.remove("active");
    }
  });
});
