document.addEventListener('DOMContentLoaded', () => {
    // On attend que le DOM soit charge avant de manipuler les elements HTML.
    // A retenir : si l'element n'est pas encore charge, querySelector peut renvoyer null.

    // Gestion du menu mobile.
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            // Ajoute ou retire la classe CSS qui affiche le menu.
            navLinks.classList.toggle('active');
        });
    }

    // Gestion de la soumission du formulaire de contact.
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        // Ce test evite une erreur sur les pages qui n'ont pas ce formulaire.
        contactForm.addEventListener('submit', (e) => {
            // On bloque l'envoi reel pour simuler un traitement cote client.
            e.preventDefault();

            // Recupere tous les champs du formulaire dans un objet exploitable.
            const formData = new FormData(contactForm);
            console.log("Données capturées (prêtes pour une API PHP) :", Object.fromEntries(formData));

            // Retour visuel pour montrer que le traitement est passe.
            alert("Merci ! Votre message a bien été simulé et traité en JavaScript.");

            // On remet le formulaire a zero apres la simulation.
            contactForm.reset();
        });
    }
});
