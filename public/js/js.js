
        function createStars() {
    // On crée ou on récupère le conteneur de fond
    let container = document.getElementById('stars-box');
    
    if (!container) {
        container = document.createElement('div');
        container.id = 'stars-box';
        document.body.prepend(container);
    }

    const starCount = 150; // Nombre de particules

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';
        
        // Taille aléatoire
        const size = Math.random() * 10 + 'px';
        star.style.width = size;
        star.style.height = size;
        
        // Position aléatoire
        star.style.left = Math.random() * 400 + 'vw';
        star.style.top = Math.random() * 4 + 'vh';
        
        // Vitesse et délai aléatoires
        star.style.animationDuration = (Math.random() * 5 + 3) + 's';
        star.style.animationDelay = Math.random() * 5 + 's';
        
        // Mélange de couleurs GreenTech (Blanc, Vert, Bleu clair)
        const colors = ['#ffffff', '#2ecc71', '#00ff88', '#a4ffda'];
        star.style.background = colors[Math.floor(Math.random() * colors.length)];
        
        // Effet de lueur sur certaines étoiles
        if (Math.random() > 0.8) {
            star.style.boxShadow = `0 0 10px ${star.style.background}`;
        }

        container.appendChild(star);
    }
}

// Lancer l'animation au chargement
document.addEventListener('DOMContentLoaded', createStars);



/**
 * GreenTech Nature Particles Animation
 * Had l-script ghadi i-generi njom m-khltin b l-byed o l-khder
 */
function createNatureParticles() {
    // Kan-qalbo 3la l-container f l-HTML
    const container = document.getElementById('nature-bg');
    
    // Ila mal9inahsh, may-dir walou (bash may-dirsh error)
    if (!container) return;

    // 100 hta l 150 hya lli mziana bash i-ji dakshi sghir o "pro"
    const particleCount = 120;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'star';
        
        // Kan-sghrou l-hajm dyalhom (1px hta l 3px) bash i-ji dakshi m-nawed
        const size = Math.random() * 2 + 1 + 'px';
        particle.style.width = size;
        particle.style.height = size;
        
        // Blaysh fash ghadi i-banou (random f l-khlef)
        particle.style.left = Math.random() * 100 + 'vw';
        particle.style.top = Math.random() * 100 + 'vh';
        
        // Sor3a dyal l-animation (5s hta l 15s) bash i-ji dakshi hda
        particle.style.animationDuration = (Math.random() * 10 + 5) + 's';
        
        // Delay bash may-bdawsh kamlin f deqqa wehda
        particle.style.animationDelay = (Math.random() * 5) + 's';
        
        // L-alwan dyal GreenTech: Byed, Khder Neon, o Khder Menthe
        const colors = ['#ffffff', '#00ff88', '#2ecc71', '#a4ffda'];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        particle.style.background = randomColor;

        // Ila kano khdrin, kan-zidouhom wahd l-glow (lueur) sghira
        if (randomColor !== '#ffffff') {
            particle.style.boxShadow = `0 0 5px ${randomColor}`;
        }
        
        container.appendChild(particle);
    }
}

/**
 * L-event lli ghadi i-khdem melli l-page t-sharga kamla
 */
document.addEventListener('DOMContentLoaded', () => {
    createNatureParticles();
    
    // Ila briti n-zidou hta dik l-clique dyal l-bouton t-ban fih animation
    console.log("GreenTech Particles Loaded!");
});
