// JavaScript principal pour DECORATEP
document.addEventListener('DOMContentLoaded', function() {
    
    // Navigation mobile
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });
        
        // Fermer le menu en cliquant sur un lien
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });
    }
    
    // Smooth scrolling pour les ancres
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observer les cartes de service
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
    
    // Validation du formulaire de contact
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupérer les valeurs
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();
            
            // Validation
            let isValid = true;
            const errors = [];
            
            if (!name) {
                errors.push('Le nom est requis');
                isValid = false;
            }
            
            if (!email || !isValidEmail(email)) {
                errors.push('Un email valide est requis');
                isValid = false;
            }
            
            if (!message) {
                errors.push('Le message est requis');
                isValid = false;
            }
            
            if (!isValid) {
                showMessage(errors.join('<br>'), 'error');
                return;
            }
            
            // Simulation d'envoi (remplacer par vraie logique PHP)
            showMessage('Votre message a été envoyé avec succès! Nous vous répondrons dans les plus brefs délais.', 'success');
            contactForm.reset();
        });
    }
    
    // Fonction de validation email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Fonction d'affichage des messages
    function showMessage(message, type) {
        // Supprimer les anciens messages
        const existingMessage = document.querySelector('.form-message');
        if (existingMessage) {
            existingMessage.remove();
        }
        
        // Créer le nouveau message
        const messageDiv = document.createElement('div');
        messageDiv.className = `form-message ${type}`;
        messageDiv.innerHTML = message;
        
        // Styles pour le message
        messageDiv.style.padding = '1rem';
        messageDiv.style.marginTop = '1rem';
        messageDiv.style.borderRadius = '8px';
        messageDiv.style.fontWeight = '500';
        
        if (type === 'success') {
            messageDiv.style.backgroundColor = '#d4edda';
            messageDiv.style.color = '#155724';
            messageDiv.style.border = '1px solid #c3e6cb';
        } else {
            messageDiv.style.backgroundColor = '#f8d7da';
            messageDiv.style.color = '#721c24';
            messageDiv.style.border = '1px solid #f5c6cb';
        }
        
        // Ajouter après le formulaire
        contactForm.appendChild(messageDiv);
        
        // Faire défiler vers le message
        messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Supprimer le message après 5 secondes
        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.remove();
            }
        }, 5000);
    }
    
    // Effet parallax léger sur le hero
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        });
    }
    
    // Animation du compteur (si présent)
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.ceil(current);
                setTimeout(updateCounter, 20);
            } else {
                counter.textContent = target;
            }
        };
        
        // Démarrer l'animation quand l'élément est visible
        observer.observe(counter);
        counter.addEventListener('animationstart', updateCounter);
    });
    
    // Gestion des modales (si présentes)
    const modalTriggers = document.querySelectorAll('[data-modal]');
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // Fermer les modales
    const modalCloses = document.querySelectorAll('.modal-close, .modal-overlay');
    modalCloses.forEach(close => {
        close.addEventListener('click', function() {
            const modal = this.closest('.modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    });
    
    // Fermer modal avec Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const openModal = document.querySelector('.modal[style*="flex"]');
            if (openModal) {
                openModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    });
    
    // Lazy loading des images
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Effets spéciaux pour la page d'accueil
    if (document.querySelector('.hero-dynamic')) {
        
        // Animation des compteurs
        const animateCounters = () => {
            const counters = document.querySelectorAll('.stat-card h3');
            counters.forEach(counter => {
                const target = counter.textContent;
                const numericTarget = parseInt(target.replace(/\D/g, ''));
                
                if (numericTarget && !counter.classList.contains('animated')) {
                    counter.classList.add('animated');
                    let current = 0;
                    const increment = numericTarget / 50;
                    
                    const updateCounter = () => {
                        if (current < numericTarget) {
                            current += increment;
                            if (target.includes('+')) {
                                counter.textContent = Math.ceil(current) + '+';
                            } else if (target.includes('h')) {
                                counter.textContent = Math.ceil(current) + 'h';
                            } else if (target.includes('%')) {
                                counter.textContent = Math.ceil(current) + '%';
                            } else {
                                counter.textContent = target;
                            }
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };
                    updateCounter();
                }
            });
        };
        
        // Observer pour déclencher les animations au scroll
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, observerOptions);
        
        const statsSection = document.querySelector('.impact-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
        
        // Parallax léger pour les formes géométriques
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll('.geometric-shapes > div');
            
            shapes.forEach((shape, index) => {
                const speed = 0.5 + (index * 0.2);
                const yPos = -(scrolled * speed);
                shape.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
            });
        });
        
        // Effet de typing pour le titre principal
        const typeWriter = (element, text, speed = 100) => {
            let i = 0;
            element.innerHTML = '';
            
            const typing = () => {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                }
            };
            typing();
        };
        
        // Déclenchement du typing après un délai
        setTimeout(() => {
            const heroTitle = document.querySelector('.hero-content h1');
            if (heroTitle) {
                const originalText = heroTitle.textContent;
                typeWriter(heroTitle, originalText, 80);
            }
        }, 1500);
        
        // Effet de particules supplémentaires au clic
        document.addEventListener('click', (e) => {
            if (e.target.closest('.btn-hero')) {
                createClickEffect(e.pageX, e.pageY);
            }
        });
        
        const createClickEffect = (x, y) => {
            for (let i = 0; i < 6; i++) {
                const particle = document.createElement('div');
                particle.style.position = 'fixed';
                particle.style.left = x + 'px';
                particle.style.top = y + 'px';
                particle.style.width = '4px';
                particle.style.height = '4px';
                particle.style.background = '#FF6B35';
                particle.style.borderRadius = '50%';
                particle.style.pointerEvents = 'none';
                particle.style.zIndex = '9999';
                
                document.body.appendChild(particle);
                
                const angle = (i / 6) * Math.PI * 2;
                const velocity = 100;
                const vx = Math.cos(angle) * velocity;
                const vy = Math.sin(angle) * velocity;
                
                let opacity = 1;
                let posX = x;
                let posY = y;
                
                const animate = () => {
                    posX += vx * 0.02;
                    posY += vy * 0.02;
                    opacity -= 0.02;
                    
                    particle.style.left = posX + 'px';
                    particle.style.top = posY + 'px';
                    particle.style.opacity = opacity;
                    
                    if (opacity > 0) {
                        requestAnimationFrame(animate);
                    } else {
                        document.body.removeChild(particle);
                    }
                };
                
                requestAnimationFrame(animate);
            }
        };
    }
    
    // Smooth reveal des éléments au scroll
    const revealElements = document.querySelectorAll('.service-card-premium, .stat-card');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, { threshold: 0.1 });
    
    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        revealObserver.observe(el);
    });
    
    console.log('DECORATEP - Site web chargé avec succès! 🚀');
});
