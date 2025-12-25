// Typing effect déjà dans CSS (hero)
// Fade-in scroll animations simples
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if(scrollY > sectionTop){
            section.style.opacity = 1;
            section.style.transform = 'translateY(0)';
            section.style.transition = '1s';
        } else {
            section.style.opacity = 0;
            section.style.transform = 'translateY(50px)';
        }
    });
});
