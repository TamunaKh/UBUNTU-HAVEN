document.addEventListener('DOMContentLoaded', () => {
    console.log("Script loaded successfully"); 

    /* MOBILE MENU TOGGLE */
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.navbar__menu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation(); 
            navMenu.classList.toggle('active');
            
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
        });

        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ROOMS CAROUSEL  */
    const roomsTrack = document.querySelector('.rooms-track');
    if (roomsTrack) {
        const prevBtn = document.querySelector('.rooms-nav .nav-btn:first-child');
        const nextBtn = document.querySelector('.rooms-nav .nav-btn:last-child');

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                roomsTrack.scrollBy({ left: -350, behavior: 'smooth' });
            });
            nextBtn.addEventListener('click', () => {
                roomsTrack.scrollBy({ left: 350, behavior: 'smooth' });
            });
        }
    }
});