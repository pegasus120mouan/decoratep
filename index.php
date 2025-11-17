<?php
require_once 'config/config.php';

$page_title = "Accueil";
$page_description = "DECORATEP - Spécialiste en publicité et décoration publicitaire. Affiches, enseignes lumineuses, totems, panneaux, impression sur bâche.";
$page_class = "home-page";

include 'includes/header.php';
?>

<!-- Hero Section Ultra Dynamique -->
<section class="hero-dynamic" style="position: relative; min-height: 100vh; overflow: hidden; background: linear-gradient(135deg, rgba(0,180,216,0.8) 0%, rgba(0,119,182,0.9) 50%, rgba(255,107,53,0.8) 100%), url('<?php echo SITE_URL; ?>/images/visuel/16652781-21376448.jpg'); background-size: cover; background-position: center; background-attachment: fixed; display: flex; align-items: center;">
    
    <!-- Particules animées en arrière-plan -->
    <div class="particles-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: 1;">
        <div class="particle" style="position: absolute; width: 4px; height: 4px; background: rgba(255,255,255,0.3); border-radius: 50%; animation: float 6s ease-in-out infinite; top: 20%; left: 10%;"></div>
        <div class="particle" style="position: absolute; width: 6px; height: 6px; background: rgba(255,107,53,0.4); border-radius: 50%; animation: float 8s ease-in-out infinite reverse; top: 60%; left: 80%;"></div>
        <div class="particle" style="position: absolute; width: 3px; height: 3px; background: rgba(144,224,239,0.5); border-radius: 50%; animation: float 7s ease-in-out infinite; top: 80%; left: 20%;"></div>
        <div class="particle" style="position: absolute; width: 5px; height: 5px; background: rgba(255,255,255,0.2); border-radius: 50%; animation: float 9s ease-in-out infinite reverse; top: 30%; left: 70%;"></div>
    </div>
    
    <!-- Formes géométriques animées -->
    <div class="geometric-shapes" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;">
        <div style="position: absolute; width: 200px; height: 200px; border: 2px solid rgba(255,107,53,0.3); border-radius: 50%; top: 10%; right: 10%; animation: rotate 20s linear infinite;"></div>
        <div style="position: absolute; width: 100px; height: 100px; background: rgba(144,224,239,0.2); transform: rotate(45deg); bottom: 20%; left: 5%; animation: pulse 4s ease-in-out infinite;"></div>
        <div style="position: absolute; width: 150px; height: 150px; border: 3px solid rgba(255,255,255,0.2); border-radius: 20px; top: 50%; left: 5%; animation: float 10s ease-in-out infinite;"></div>
    </div>
    
    <div class="container" style="position: relative; z-index: 10;">
        <div class="hero-content" style="text-align: center; color: white;">
            
            <!-- Logo animé grande taille -->
            <div class="hero-logo" style="margin-bottom: 2rem; animation: slideInDown 1s ease-out;">
                <img src="<?php echo SITE_URL; ?>/images/logo.jpg" alt="DECORATEP Plus" style="height: 120px; width: auto; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3)); margin-bottom: 1rem;">
            </div>
            
            <!-- Titre principal avec effet machine à écrire -->
            <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); animation: slideInUp 1s ease-out 0.3s both;">
                Donnez <span style="color: var(--color-accent); text-shadow: 0 0 20px rgba(255,107,53,0.5); animation: pulse 2s ease-in-out infinite;">VIE</span> à vos <span style="background: linear-gradient(45deg, #90E0EF, white); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">IDÉES</span>
            </h1>
            
            <!-- Sous-titre dynamique -->
            <p style="font-size: 1.4rem; margin-bottom: 3rem; opacity: 0.95; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6; animation: slideInUp 1s ease-out 0.6s both;">
                🎨 <strong>Créativité</strong> • 💡 <strong>Innovation</strong> • ⚡ <strong>Impact</strong><br>
                <span style="font-size: 1.1rem; opacity: 0.9;">Votre partenaire de confiance pour une communication visuelle qui marque les esprits</span>
            </p>
            
            <!-- Boutons d'action avec effets -->
            <div class="hero-buttons" style="animation: slideInUp 1s ease-out 0.9s both;">
                <a href="<?php echo SITE_URL; ?>/contact.php" class="btn-hero primary" style="display: inline-block; padding: 18px 40px; background: linear-gradient(45deg, var(--color-accent), #ff8c42); color: white; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 1.1rem; margin: 10px; box-shadow: 0 8px 25px rgba(255,107,53,0.4); transition: all 0.3s ease; position: relative; overflow: hidden;">
                    <i class="fas fa-rocket" style="margin-right: 10px;"></i>
                    DÉMARRER MON PROJET
                </a>
                
                <a href="<?php echo SITE_URL; ?>/realisations.php" class="btn-hero secondary" style="display: inline-block; padding: 18px 40px; background: rgba(255,255,255,0.15); color: white; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 1.1rem; margin: 10px; border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(10px); transition: all 0.3s ease;">
                    <i class="fas fa-play" style="margin-right: 10px;"></i>
                    VOIR NOS CRÉATIONS
                </a>
            </div>
            
            <!-- Indicateurs de scroll -->
            <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); animation: bounce 2s infinite;">
                <div style="width: 30px; height: 50px; border: 2px solid rgba(255,255,255,0.5); border-radius: 25px; position: relative;">
                    <div style="width: 4px; height: 8px; background: white; border-radius: 2px; position: absolute; top: 8px; left: 50%; transform: translateX(-50%); animation: scroll-dot 2s infinite;"></div>
                </div>
                <p style="margin-top: 10px; font-size: 0.9rem; opacity: 0.7;">Découvrez plus</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Impact Visuel -->
<section class="impact-section" style="padding: 0; position: relative; background: linear-gradient(180deg, var(--color-dark), var(--color-primary)); overflow: hidden;">
    <div class="container" style="padding: 4rem 20px;">
        <div style="text-align: center; color: white; margin-bottom: 3rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem; animation: fadeInUp 1s ease-out;">
                🚀 <span style="color: var(--color-accent);">30+ ANS</span> D'EXCELLENCE
            </h2>
            <p style="font-size: 1.2rem; opacity: 0.9;">De l'atelier artisanal à l'entreprise industrielle de référence</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div class="stat-card" style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: transform 0.3s ease;">
                <div style="font-size: 3rem; color: var(--color-accent); margin-bottom: 1rem;">🎯</div>
                <h3 style="font-size: 2.5rem; color: white; margin-bottom: 0.5rem; font-weight: 700;">500+</h3>
                <p style="color: rgba(255,255,255,0.8);">Projets Réalisés</p>
            </div>
            
            <div class="stat-card" style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: transform 0.3s ease;">
                <div style="font-size: 3rem; color: var(--color-accent); margin-bottom: 1rem;">⚡</div>
                <h3 style="font-size: 2.5rem; color: white; margin-bottom: 0.5rem; font-weight: 700;">24h</h3>
                <p style="color: rgba(255,255,255,0.8);">Délai de Réponse</p>
            </div>
            
            <div class="stat-card" style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: transform 0.3s ease;">
                <div style="font-size: 3rem; color: var(--color-accent); margin-bottom: 1rem;">🏆</div>
                <h3 style="font-size: 2.5rem; color: white; margin-bottom: 0.5rem; font-weight: 700;">100%</h3>
                <p style="color: rgba(255,255,255,0.8);">Satisfaction Client</p>
            </div>
            
            <div class="stat-card" style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: transform 0.3s ease;">
                <div style="font-size: 3rem; color: var(--color-accent); margin-bottom: 1rem;">🌍</div>
                <h3 style="font-size: 2.5rem; color: white; margin-bottom: 0.5rem; font-weight: 700;">CI</h3>
                <p style="color: rgba(255,255,255,0.8);">Côte d'Ivoire</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section Ultra Visuelle -->
<section class="services-showcase" style="padding: 6rem 0; background: linear-gradient(45deg, #f8f9fa 0%, white 50%, #f8f9fa 100%); position: relative; overflow: hidden;">
    
    <!-- Décoration de fond -->
    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-light), var(--color-primary)); border-radius: 50%; opacity: 0.1; z-index: 1;"></div>
    <div style="position: absolute; bottom: -100px; left: -100px; width: 300px; height: 300px; background: linear-gradient(45deg, var(--color-accent), var(--color-primary)); border-radius: 50%; opacity: 0.05; z-index: 1;"></div>
    
    <div class="container" style="position: relative; z-index: 10;">
        <div class="section-title" style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 3rem; color: var(--color-dark); margin-bottom: 1rem; position: relative;">
                🎨 Nos <span style="color: var(--color-accent);">Expertises</span>
                <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 100px; height: 4px; background: linear-gradient(45deg, var(--color-primary), var(--color-accent)); border-radius: 2px;"></div>
            </h2>
            <p style="font-size: 1.3rem; color: var(--color-gray); max-width: 600px; margin: 0 auto;">
                Des solutions créatives qui transforment vos idées en <strong>réalité visuelle</strong>
            </p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; margin-top: 4rem;">
            
            <!-- Service 1: Affiches -->
            <div class="service-card-premium" style="background: white; border-radius: 25px; padding: 3rem 2rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden; border: 1px solid rgba(0,180,216,0.1);">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(45deg, var(--color-primary), var(--color-accent));"></div>
                
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--color-primary), var(--color-light)); border-radius: 50%; margin: 0 auto 2rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(0,180,216,0.3);">
                    <i class="fas fa-image" style="font-size: 2.5rem; color: white;"></i>
                </div>
                
                <h3 style="font-size: 1.5rem; color: var(--color-dark); margin-bottom: 1rem; font-weight: 700;">📄 Affiches Publicitaires</h3>
                <p style="color: var(--color-gray); line-height: 1.6; margin-bottom: 2rem;">
                    <strong>Haute définition</strong> • Formats sur mesure • Finitions premium
                </p>
                
                <div style="background: var(--color-light-gray); padding: 1rem; border-radius: 15px; margin-bottom: 1.5rem;">
                    <small style="color: var(--color-dark); font-weight: 600;">✨ À partir de 48h</small>
                </div>
                
                <a href="<?php echo SITE_URL; ?>/services.php#affiches" style="color: var(--color-primary); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                    Découvrir <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 2: Enseignes -->
            <div class="service-card-premium" style="background: white; border-radius: 25px; padding: 3rem 2rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden; border: 1px solid rgba(255,107,53,0.1);">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(45deg, var(--color-accent), #ff8c42);"></div>
                
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--color-accent), #ff8c42); border-radius: 50%; margin: 0 auto 2rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(255,107,53,0.3); animation: glow 3s ease-in-out infinite alternate;">
                    <i class="fas fa-lightbulb" style="font-size: 2.5rem; color: white;"></i>
                </div>
                
                <h3 style="font-size: 1.5rem; color: var(--color-dark); margin-bottom: 1rem; font-weight: 700;">💡 Enseignes Lumineuses</h3>
                <p style="color: var(--color-gray); line-height: 1.6; margin-bottom: 2rem;">
                    <strong>LED dernière génération</strong> • Économique • Maintenance incluse
                </p>
                
                <div style="background: var(--color-light-gray); padding: 1rem; border-radius: 15px; margin-bottom: 1.5rem;">
                    <small style="color: var(--color-dark); font-weight: 600;">⚡ Éclairage 24/7</small>
                </div>
                
                <a href="<?php echo SITE_URL; ?>/services.php#enseignes" style="color: var(--color-accent); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                    Découvrir <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 3: Totems -->
            <div class="service-card-premium" style="background: white; border-radius: 25px; padding: 3rem 2rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden; border: 1px solid rgba(0,119,182,0.1);">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(45deg, var(--color-dark), var(--color-primary));"></div>
                
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--color-dark), var(--color-primary)); border-radius: 50%; margin: 0 auto 2rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(0,119,182,0.3);">
                    <i class="fas fa-sign" style="font-size: 2.5rem; color: white;"></i>
                </div>
                
                <h3 style="font-size: 1.5rem; color: var(--color-dark); margin-bottom: 1rem; font-weight: 700;">🏢 Totems & Panneaux</h3>
                <p style="color: var(--color-gray); line-height: 1.6; margin-bottom: 2rem;">
                    <strong>Signalétique durable</strong> • Intérieur/Extérieur • Sur mesure
                </p>
                
                <div style="background: var(--color-light-gray); padding: 1rem; border-radius: 15px; margin-bottom: 1.5rem;">
                    <small style="color: var(--color-dark); font-weight: 600;">🛡️ Garantie 5 ans</small>
                </div>
                
                <a href="<?php echo SITE_URL; ?>/services.php#totems" style="color: var(--color-dark); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                    Découvrir <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 4: Impression -->
            <div class="service-card-premium" style="background: white; border-radius: 25px; padding: 3rem 2rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; position: relative; overflow: hidden; border: 1px solid rgba(144,224,239,0.1);">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(45deg, var(--color-light), var(--color-primary));"></div>
                
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--color-light), var(--color-primary)); border-radius: 50%; margin: 0 auto 2rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(144,224,239,0.3);">
                    <i class="fas fa-print" style="font-size: 2.5rem; color: white;"></i>
                </div>
                
                <h3 style="font-size: 1.5rem; color: var(--color-dark); margin-bottom: 1rem; font-weight: 700;">🖨️ Impression Grand Format</h3>
                <p style="color: var(--color-gray); line-height: 1.6; margin-bottom: 2rem;">
                    <strong>Bâches résistantes</strong> • Jusqu'à 5m de large • Anti-UV
                </p>
                
                <div style="background: var(--color-light-gray); padding: 1rem; border-radius: 15px; margin-bottom: 1.5rem;">
                    <small style="color: var(--color-dark); font-weight: 600;">🌟 Express 24h</small>
                </div>
                
                <a href="<?php echo SITE_URL; ?>/services.php#impression" style="color: var(--color-primary); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                    Découvrir <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <!-- Call to Action Central -->
        <div style="text-align: center; margin-top: 4rem; padding: 3rem; background: linear-gradient(135deg, var(--color-primary), var(--color-dark)); border-radius: 25px; color: white; position: relative; overflow: hidden;">
            <div style="position: absolute; top: -50%; right: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%); animation: rotate 30s linear infinite;"></div>
            
            <div style="position: relative; z-index: 10;">
                <h3 style="font-size: 2.2rem; margin-bottom: 1rem; font-weight: 700;">
                    🚀 Prêt à <span style="color: var(--color-accent);">BRILLER</span> ?
                </h3>
                <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">
                    Transformons ensemble vos idées en communication visuelle d'exception
                </p>
                <a href="<?php echo SITE_URL; ?>/contact.php" style="display: inline-block; padding: 15px 35px; background: var(--color-accent); color: white; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(255,107,53,0.4); transition: all 0.3s ease; transform: translateY(0);">
                    <i class="fas fa-magic" style="margin-right: 10px;"></i>
                    CRÉONS ENSEMBLE
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section bg-light">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h3>Plus de 30 ans d'expertise</h3>
                <p>Depuis 1991, DECORATEP est votre partenaire de confiance pour tous vos travaux de décoration publicitaire. 
                   D'un petit atelier, nous sommes devenus une entreprise industrielle florissante grâce à notre expertise 
                   éprouvée et notre site de production équipé des technologies les plus modernes.</p>
                
                <ul class="about-features">
                    <li><i class="fas fa-check-circle"></i> Équipements modernes et performants</li>
                    <li><i class="fas fa-check-circle"></i> Équipe d'experts qualifiés</li>
                    <li><i class="fas fa-check-circle"></i> Service de A à Z (conception, fabrication, pose)</li>
                    <li><i class="fas fa-check-circle"></i> Respect des délais et de la qualité</li>
                    <li><i class="fas fa-check-circle"></i> Devis gratuit et personnalisé</li>
                </ul>
                
                <a href="<?php echo SITE_URL; ?>/about.php" class="btn">En savoir plus</a>
            </div>
            
            <div class="about-image">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1439.jpg" 
                     alt="Atelier DECORATEP - Équipements modernes" 
                     style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px; box-shadow: var(--box-shadow);">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), var(--color-dark)); color: white;">
    <div class="container">
        <div class="section-title" style="color: white;">
            <h2 style="color: white;">DECORATEP en chiffres</h2>
            <p style="color: rgba(255,255,255,0.9);">Notre expertise reconnue par nos clients</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card" style="background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2);">
                <div class="service-icon" style="color: var(--color-accent);">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3 style="color: white;">+30 ans</h3>
                <p style="color: rgba(255,255,255,0.9);">D'expérience dans la publicité</p>
            </div>
            
            <div class="service-card" style="background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2);">
                <div class="service-icon" style="color: var(--color-accent);">
                    <i class="fas fa-users"></i>
                </div>
                <h3 style="color: white;">500+</h3>
                <p style="color: rgba(255,255,255,0.9);">Clients satisfaits</p>
            </div>
            
            <div class="service-card" style="background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2);">
                <div class="service-icon" style="color: var(--color-accent);">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3 style="color: white;">1000+</h3>
                <p style="color: rgba(255,255,255,0.9);">Projets réalisés</p>
            </div>
            
            <div class="service-card" style="background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.2);">
                <div class="service-icon" style="color: var(--color-accent);">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="color: white;">24h</h3>
                <p style="color: rgba(255,255,255,0.9);">Délai de réponse moyen</p>
            </div>
        </div>
    </div>
</section>

<!-- Galerie Réalisations -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>🏆 Nos Réalisations Phares</h2>
            <p>Découvrez quelques-unes de nos créations les plus remarquables</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition); cursor: pointer;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/TOTAL - Enseigne.png" alt="Enseigne TOTAL" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Enseigne TOTAL</h4>
                </div>
            </div>
            
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition); cursor: pointer;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur.jpg" alt="Totem Allianz" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Totem Allianz</h4>
                </div>
            </div>
            
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition); cursor: pointer;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Branding - Camion DETO.jpg" alt="Branding Camion" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Branding Véhicule</h4>
                </div>
            </div>
            
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition); cursor: pointer;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne.jpg" alt="Enseigne SGCI" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Enseigne SGCI</h4>
                </div>
            </div>
        </div>
        
        <div style="text-align: center;">
            <a href="<?php echo SITE_URL; ?>/realisations.php" class="btn" style="background: var(--color-dark);">
                <i class="fas fa-images" style="margin-right: 10px;"></i>
                Voir toutes nos réalisations
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container text-center">
        <h2 style="color: var(--color-dark); margin-bottom: 1rem;">Prêt à démarrer votre projet ?</h2>
        <p style="color: var(--color-gray); font-size: 1.1rem; margin-bottom: 2rem;">
            Contactez-nous dès aujourd'hui pour un devis gratuit et personnalisé
        </p>
        <a href="<?php echo SITE_URL; ?>/contact.php" class="btn" style="margin-right: 1rem;">Demander un devis</a>
        <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>" class="btn btn-secondary" style="background: var(--color-dark); color: white; border-color: var(--color-dark);">
            <i class="fas fa-phone"></i> Appelez-nous
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
