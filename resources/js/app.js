document.addEventListener('DOMContentLoaded', () => {

    const menuButton = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    const navItems = document.querySelectorAll('.nav-links a');

    // MOBILE MENU
    if (menuButton && navLinks) {
        menuButton.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-open');
        });
    }


    // ONE-PAGE NAVIGATION
    navItems.forEach(link => {

        link.addEventListener('click', () => {

            navItems.forEach(item => {
                item.classList.remove('active');
            });

            link.classList.add('active');

            // Close mobile menu after clicking
            if (navLinks) {
                navLinks.classList.remove('mobile-open');
            }

        });

    });


    // ACTIVE SECTION WHILE SCROLLING
    const sections = document.querySelectorAll(
        '#home, #about, #experience, #projects, #contact'
    );

    const observer = new IntersectionObserver(
        (entries) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    const id = entry.target.getAttribute('id');

                    navItems.forEach(link => {

                        link.classList.remove('active');

                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                        }

                    });

                }

            });

        },
        {
            root: null,
            threshold: 0.45
        }
    );


    sections.forEach(section => {
        observer.observe(section);
    });

});