/**
 * JenoxGlobal - B2B Import Export Company
 * Custom JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functions
    initStickyHeader();
    initBackToTop();
    initCounterAnimation();
    initSmoothScroll();
    initNavbarDropdown();
    initFormValidation();
    initTestimonialSlider();
    initLazyLoading();
    initScrollAnimations();
});

/**
 * Sticky Header
 */
function initStickyHeader() {
    const navbar = document.getElementById('mainNav');
    const topBar = document.querySelector('.top-bar');
    
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.classList.add('sticky');
                if (topBar) {
                    topBar.style.display = 'none';
                }
            } else {
                navbar.classList.remove('sticky');
                if (topBar) {
                    topBar.style.display = 'block';
                }
            }
        });
    }
}

/**
 * Back to Top Button
 */
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
        
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

/**
 * Counter Animation
 */
function initCounterAnimation() {
    const counters = document.querySelectorAll('.highlight-number');
    
    if (counters.length > 0) {
        const observerOptions = {
            threshold: 0.5
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target')) || parseInt(counter.innerText.replace(/[^0-9]/g, ''));
                    const suffix = counter.innerText.replace(/[0-9]/g, '');
                    let current = 0;
                    const increment = target / 50;
                    const duration = 2000;
                    const stepTime = duration / 50;
                    
                    const timer = setInterval(function() {
                        current += increment;
                        if (current >= target) {
                            counter.innerText = target + suffix;
                            clearInterval(timer);
                        } else {
                            counter.innerText = Math.floor(current) + suffix;
                        }
                    }, stepTime);
                    
                    observer.unobserve(counter);
                }
            });
        }, observerOptions);
        
        counters.forEach(function(counter) {
            observer.observe(counter);
        });
    }
}

/**
 * Smooth Scroll
 */
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(function(link) {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href !== '#' && href.startsWith('#')) {
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/**
 * Navbar Dropdown
 */
function initNavbarDropdown() {
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(function(dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        if (toggle && menu) {
            toggle.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.classList.toggle('show');
            });
            
            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    menu.classList.remove('show');
                }
            });
        }
    });
}

/**
 * Form Validation
 */
function initFormValidation() {
    const forms = document.querySelectorAll('form[data-validate]');
    
    forms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            requiredFields.forEach(function(field) {
                const value = field.value.trim();
                const errorElement = field.parentElement.querySelector('.error-message');
                
                if (!value) {
                    isValid = false;
                    field.classList.add('is-invalid');
                    
                    if (!errorElement) {
                        const error = document.createElement('div');
                        error.className = 'error-message text-danger mt-1';
                        error.style.fontSize = '0.875rem';
                        error.textContent = 'This field is required';
                        field.parentElement.appendChild(error);
                    }
                } else {
                    field.classList.remove('is-invalid');
                    if (errorElement) {
                        errorElement.remove();
                    }
                    
                    // Email validation
                    if (field.type === 'email') {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(value)) {
                            isValid = false;
                            field.classList.add('is-invalid');
                            
                            if (!errorElement) {
                                const error = document.createElement('div');
                                error.className = 'error-message text-danger mt-1';
                                error.style.fontSize = '0.875rem';
                                error.textContent = 'Please enter a valid email address';
                                field.parentElement.appendChild(error);
                            }
                        }
                    }
                    
                    // Phone validation
                    if (field.type === 'tel') {
                        const phoneRegex = /^[\d\s\-\+\(\)]{10,}$/;
                        if (!phoneRegex.test(value)) {
                            isValid = false;
                            field.classList.add('is-invalid');
                            
                            if (!errorElement) {
                                const error = document.createElement('div');
                                error.className = 'error-message text-danger mt-1';
                                error.style.fontSize = '0.875rem';
                                error.textContent = 'Please enter a valid phone number';
                                field.parentElement.appendChild(error);
                            }
                        }
                    }
                }
            });
            
            if (!isValid) {
                e.preventDefault();
            }
        });
        
        // Remove error on input
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(function(input) {
            input.addEventListener('input', function() {
                this.classList.remove('is-invalid');
                const errorElement = this.parentElement.querySelector('.error-message');
                if (errorElement) {
                    errorElement.remove();
                }
            });
        });
    });
}

/**
 * Testimonial Slider
 */
function initTestimonialSlider() {
    const slider = document.querySelector('.testimonial-slider');
    
    if (slider) {
        let currentSlide = 0;
        const slides = slider.querySelectorAll('.testimonial-card');
        const totalSlides = slides.length;
        
        if (totalSlides > 0) {
            // Show first slide
            slides.forEach(function(slide, index) {
                slide.style.display = index === 0 ? 'block' : 'none';
            });
            
            // Auto slide
            setInterval(function() {
                slides[currentSlide].style.display = 'none';
                currentSlide = (currentSlide + 1) % totalSlides;
                slides[currentSlide].style.display = 'block';
            }, 5000);
        }
    }
}

/**
 * Lazy Loading Images
 */
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.getAttribute('data-src');
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(function(img) {
            imageObserver.observe(img);
        });
    }
}

/**
 * Scroll Animations
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    if (animatedElements.length > 0) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animatedElements.forEach(function(element) {
            observer.observe(element);
        });
    }
}

/**
 * Mobile Menu Toggle
 */
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', function() {
            setTimeout(function() {
                if (navbarCollapse.classList.contains('show')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }, 300);
        });
        
        // Close menu when clicking on a link
        const navLinks = navbarCollapse.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    navbarCollapse.classList.remove('show');
                    document.body.style.overflow = '';
                }
            });
        });
    }
});

/**
 * Language Selector
 */
function changeLanguage(lang) {
    // This function can be extended to handle language switching
    console.log('Language changed to: ' + lang);
    
    // Example: Store preference in localStorage
    localStorage.setItem('preferredLanguage', lang);
    
    // Example: Reload page with language parameter
    // window.location.href = '?lang=' + lang;
}

/**
 * Newsletter Subscription
 */
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = this.querySelector('input[type="email"]').value;
            const submitBtn = this.querySelector('button[type="submit"]');
            
            if (email) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Subscribing...';
                
                // Simulate API call
                setTimeout(function() {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Subscribe';
                    alert('Thank you for subscribing to our newsletter!');
                    newsletterForm.reset();
                }, 1500);
            }
        });
    }
});

/**
 * Product Card Hover Effect
 */
document.addEventListener('DOMContentLoaded', function() {
    const productCards = document.querySelectorAll('.product-card, .category-card');
    
    productCards.forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

/**
 * FAQ Accordion
 */
document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const isExpanded = this.classList.contains('collapsed');
            
            // Close all other accordions
            accordionButtons.forEach(function(otherButton) {
                if (otherButton !== button) {
                    otherButton.classList.add('collapsed');
                    otherButton.setAttribute('aria-expanded', 'false');
                    const collapse = otherButton.nextElementSibling;
                    if (collapse) {
                        collapse.classList.remove('show');
                    }
                }
            });
        });
    });
});

/**
 * Contact Form AJAX Submission
 */
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form-card form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
            
            // Simulate AJAX call
            setTimeout(function() {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Send Message';
                alert('Thank you for your message! We will get back to you soon.');
                contactForm.reset();
            }, 2000);
        });
    }
});

/**
 * Dynamic Year in Footer
 */
document.addEventListener('DOMContentLoaded', function() {
    const yearElements = document.querySelectorAll('.current-year');
    
    yearElements.forEach(function(element) {
        element.textContent = new Date().getFullYear();
    });
});

/**
 * Preloader
 */
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(function() {
            preloader.style.display = 'none';
        }, 500);
    }
});

/**
 * Cookie Consent
 */
document.addEventListener('DOMContentLoaded', function() {
    // Check if user has already consented
    if (!localStorage.getItem('cookieConsent')) {
        // Show cookie consent banner (can be implemented)
        console.log('Show cookie consent banner');
    }
});

/**
 * Export functions for global use
 */
window.JenoxGlobal = {
    changeLanguage: changeLanguage,
    initStickyHeader: initStickyHeader,
    initBackToTop: initBackToTop,
    initCounterAnimation: initCounterAnimation,
    initSmoothScroll: initSmoothScroll
};
