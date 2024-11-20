document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".filtrepost-button");
  const resultsDiv = document.getElementById("filtrepost-results");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const categoryId = button.getAttribute("data-id");
      resultsDiv.innerHTML = "<p>Chargement...</p>";

      fetch(`${filtrepost.rest_url}?category_id=${categoryId}`, {
        headers: {
          "X-WP-Nonce": filtrepost.nonce,
        },
      })
        .then((response) => response.json())
        .then((data) => {
          resultsDiv.innerHTML = "";
          if (data.length > 0) {
            data.forEach((post) => {
              const postElement = document.createElement("p");
              postElement.innerHTML = `<a href="${post.link}">${post.title}</a>`;
              resultsDiv.appendChild(postElement);
            });
          } else {
            resultsDiv.innerHTML = "<p>Aucun article trouvé.</p>";
          }
        })
        .catch((error) => {
          console.error("Erreur:", error);
          resultsDiv.innerHTML =
            "<p>Erreur lors du chargement des articles.</p>";
        });
    });
  });
});
