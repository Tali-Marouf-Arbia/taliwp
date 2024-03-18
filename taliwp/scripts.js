// Script du menu
document.addEventListener("DOMContentLoaded", function() {
    const burgerMenu = document.querySelector('.burger-menu');
    const megaMenu = document.getElementById('mega-menu');

    burgerMenu.addEventListener('click', function() {
        burgerMenu.classList.toggle('change');
        megaMenu.classList.toggle('active-mobile');
        megaMenu.classList.toggle('inactive-mobile');
    });

    megaMenu.addEventListener('click', function() {
        burgerMenu.classList.remove('change');
        megaMenu.classList.remove('active-mobile');
        megaMenu.classList.add('inactive-mobile');
    });
});


// animation form / cv-button
document.addEventListener('DOMContentLoaded', function() {
    var formContainer = document.getElementById('wpcf7-f16-o1');
    var cvButton = document.querySelector('.cv-button');

    function applyTransform(element, event) {
        var rect = element.getBoundingClientRect();
        var centerX = rect.left + rect.width / 2;
        var centerY = rect.top + rect.height / 2;
        var deltaX = event.clientX - centerX;
        var deltaY = event.clientY - centerY;
        var percentX = deltaX / (rect.width / 2); 
        var percentY = deltaY / (rect.height / 2); 
        
        var rotateX, rotateY;

        // Calcul des valeurs de rotation en fonction de la position du curseur
        rotateX = -21.88 * percentY; // X (de bas en haut)
        rotateY = 22.5 * percentX; // Y (de gauche à droite)

        element.style.setProperty('--rotateX', rotateX + 'deg');
        element.style.setProperty('--rotateY', rotateY + 'deg');
    }

    formContainer.addEventListener('mousemove', function(event) {
        applyTransform(formContainer, event);
    });

    formContainer.addEventListener('mouseleave', function() {
        formContainer.style.setProperty('--rotateX', '0deg'); // Réinitialisation de la rotation X
        formContainer.style.setProperty('--rotateY', '0deg'); // Réinitialisation de la rotation Y
    });

    cvButton.addEventListener('mousemove', function(event) {
        applyTransform(cvButton, event);
    });

    cvButton.addEventListener('mouseleave', function() {
        cvButton.style.setProperty('--rotateX', '0deg'); // Réinitialisation de la rotation X
        cvButton.style.setProperty('--rotateY', '0deg'); // Réinitialisation de la rotation Y
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var projetItems = document.querySelectorAll('.projet-animate');

    function applyTransform(element, event) {
        var rect = element.getBoundingClientRect();
        var centerX = rect.left + rect.width / 2;
        var centerY = rect.top + rect.height / 2;
        var deltaX = event.clientX - centerX;
        var deltaY = event.clientY - centerY;
        var percentX = deltaX / (rect.width / 2); 
        var percentY = deltaY / (rect.height / 2); 
        
        var rotateX, rotateY;

        // Calcul des valeurs de rotation en fonction de la position du curseur
        rotateX = -21.88 * percentY; // X (de bas en haut)
        rotateY = 22.5 * percentX; // Y (de gauche à droite)

        element.style.setProperty('--rotateX', rotateX + 'deg');
        element.style.setProperty('--rotateY', rotateY + 'deg');
    }

    projetItems.forEach(function(item) {
        item.addEventListener('mousemove', function(event) {
            applyTransform(item, event);
        });

        item.addEventListener('mouseleave', function() {
            item.style.setProperty('--rotateX', '0deg'); // Réinitialisation de la rotation X
            item.style.setProperty('--rotateY', '0deg'); // Réinitialisation de la rotation Y
        });
    });
});

// fade-in sur sections
const sections = document.querySelectorAll('section');
// Créez un observateur d'intersection
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.3 }); 

// Observer chaque section
sections.forEach(section => {
    observer.observe(section);
});
