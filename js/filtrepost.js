/* (function(){
    let filtre__bouton = document.querySelector('.filtre__bouton button');
    console.log(filtre__bouton.lenght);

    function extraire_cours() {
        fetch(
          `https://localhost:81/31w05/wp-json/wp/v2/posts?categories=${categorie}&per_page=30`
        )
        .then((response) => response.json())
        .then((data) => {
            console.log("Articles récupérés:", data);
            afficherArticles(data);
        });
        .catch(error) => console.log.error ("Error lors de l'extraction des cours", error);
    }
    function afficherArticles(data)
    {}
})() */