// Initialize AOS Animations
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'slide',
        once: true,
        offset: 50
    });
    
    // Auto-close mobile menu on click (for one-page smooth scroll if used)
    const navLinks = document.querySelectorAll('.nav-link:not(.dropdown-toggle)');
    const menuToggle = document.getElementById('navbarNav');
    const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle: false});
    
    navLinks.forEach((l) => {
        l.addEventListener('click', () => {
            if (menuToggle.classList.contains('show')) {
                bsCollapse.toggle();
            }
        });
    });

    // Smart Sticky Navbar
    const navbar = document.getElementById('mainNav');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Background color logic
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Hide on scroll down, show on scroll up
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            navbar.classList.add('navbar-hidden');
        } else {
            // Scrolling up
            navbar.classList.remove('navbar-hidden');
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });
});
document.addEventListener('DOMContentLoaded', function() {
    // Contact Form AJAX
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({ icon: 'success', title: 'Success!', text: data.message, confirmButtonColor: '#0a3d62' });
                    contactForm.reset();
                } else {
                    Swal.fire({ icon: 'error', title: 'Oops...', text: data.message, confirmButtonColor: '#0a3d62' });
                }
            })
            .catch(error => {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Something went wrong.', confirmButtonColor: '#0a3d62' });
            });
        });
    }

    // Subscribe Form AJAX
    const subscribeForm = document.getElementById("subscribeForm");
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({ icon: 'success', title: 'Subscribed!', text: data.message, confirmButtonColor: '#0a3d62' });
                    subscribeForm.reset();
                } else {
                    Swal.fire({ icon: 'error', title: 'Oops...', text: data.message, confirmButtonColor: '#0a3d62' });
                }
            })
            .catch(error => {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Something went wrong.', confirmButtonColor: '#0a3d62' });
            });
        });
    }
});

