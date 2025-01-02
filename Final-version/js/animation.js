document.addEventListener("DOMContentLoaded", function() {
    // Animation fade-in pour les éléments avec la classe 'fade-in'
    const fadeInElements = document.querySelectorAll('.fade-in');
    fadeInElements.forEach((element, index) => {
        setTimeout(() => {
            // L'animation initiale ici ne fait rien de spécifique
        }, index * 500); // Délai entre chaque apparition d'élément (500ms entre chaque)
    });

    // Animation pour les éléments avec la classe 'top-anim'
    const topAnimElements = document.querySelectorAll('.top-anim');
    topAnimElements.forEach((element, index) => {
        setTimeout(() => {
            // L'animation initiale ici ne fait rien de spécifique
        }, (fadeInElements.length * 500) + (index * 500)); // Délai après les éléments fade-in + délai entre chaque élément top-anim
    });

    // Animation pour les éléments avec la classe 'bot-anim'
    const botAnimElements = document.querySelectorAll('.bot-anim');
    botAnimElements.forEach((element, index) => {
        setTimeout(() => {
            // L'animation initiale ici ne fait rien de spécifique
        }, (fadeInElements.length * 500) + (topAnimElements.length * 500) + (index * 500)); // Délai après les éléments fade-in et top-anim + délai entre chaque élément bot-anim
    });

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: '5',
        loop: true, // Active le carrousel infini
        coverflowEffect: {
            rotate: 75, // Angle de rotation des diapositives
            stretch: -30, // Espacement entre les diapositives
            depth: 100, // Profondeur de la perspective (augmenter pour agrandir l'effet)
            modifier: 1, // Modificateur de l'effet
            slideShadows: false, // Optionnel: désactiver les ombres si nécessaire
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: null, // Pas de boutons de navigation
            prevEl: null, // Pas de boutons de navigation
        },
        allowTouchMove: true, // Permet le déplacement au touché
        touchStartPreventDefault: false, // Désactive la prévention du comportement par défaut lors du touché
    });

    // --- Animation des nuages --- //

    // Fonction pour déplacer les nuages au scroll
    function moveCloudsOnScroll() {
        // Calculer la position de défilement
        const scrollPosition = window.scrollY;

        // Sélectionner les éléments
        const bigCloud = document.querySelector('.big_cloud');
        const littleCloud = document.querySelector('.little_cloud');

        if (bigCloud) {
            // Ajuster la position des nuages en fonction du scroll
            bigCloud.style.right = (-200 + scrollPosition * 0.2) + 'px'; // Gros nuage se déplace à gauche
        }
        if (littleCloud) {
            littleCloud.style.right = (50 + scrollPosition * 0.2) + 'px'; // Petit nuage se déplace à gauche
        }
    }

    // Fonction pour démarrer l'observation de l'élément
    function observeClouds() {
        const cloudsSection = document.getElementById('place');

        if (!cloudsSection) return; // Vérification si la section existe

        // Utilisation de l'Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Lorsque la section est visible, commencer l'animation
                    window.addEventListener('scroll', moveCloudsOnScroll);
                } else {
                    // Si la section n'est plus visible, arrêter l'animation
                    window.removeEventListener('scroll', moveCloudsOnScroll);
                }
            });
        }, {
            threshold: 0.1 // La section doit être au moins 10% visible
        });

        observer.observe(cloudsSection);
    }

    // Démarrer l'observation au chargement de la page
    observeClouds();

    document.getElementById('menu-toggle').addEventListener('click', function() {
        // Sélectionne les éléments avec les classes 'site-main' et 'site-footer'
        var elements = document.querySelectorAll('.site-main, .site-footer');

        // Bascule la classe 'hidden' pour chaque élément
        elements.forEach(function(element) {
            element.classList.toggle('hidden');
        });
    });


    // Sélectionne les sections avec des classes et ID spécifiques
    const sections = [
        document.querySelector('.banner'),     // Sélectionner la section avec la classe 'banner'
        document.querySelector('#story'),      // Sélectionner la section avec l'ID 'story'
        document.querySelector('#studio'),     // Sélectionner la section avec l'ID 'studio'
        document.querySelector('.nomination')  // Sélectionner la section avec la classe 'nomination'
    ].filter(Boolean); // Filtre les éléments null ou non trouvés pour éviter des erreurs

    // Observer pour surveiller la visibilité des sections
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Ajouter la classe 'visible' quand l'élément devient visible
                // Arrêter l'observation si tu ne veux ajouter la classe qu'une fois
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 }); // 10% de la section doit être visible avant l'animation

    sections.forEach(section => {
        observer.observe(section); // Observer chaque section spécifique
    });
});
