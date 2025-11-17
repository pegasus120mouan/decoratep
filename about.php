<?php
require_once 'config/config.php';

$page_title = "À propos de nous";
$page_description = "Découvrez DECORATEP, entreprise spécialisée en publicité depuis plus de 20 ans. Notre expertise, nos équipements modernes et notre engagement qualité.";
$page_class = "about-page";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" style="padding: 2rem 0;">
    <div class="container">
        <div class="hero-content">
            <h1>À propos de DECORATEP</h1>
            <p>Plus de 20 ans d'expertise au service de votre communication visuelle</p>
        </div>
    </div>
</section>

<!-- Histoire de l'entreprise -->
<section class="section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 style="color: var(--color-dark); margin-bottom: 1rem;">Notre Histoire</h2>
                <p>Le petit atelier créé en 1991 est devenu un peu plus de 25 ans plus tard une entreprise industrielle florissante. 
                   Grâce à son expertise éprouvée dans le développement, la réalisation et la mise en œuvre de projet signalétique, 
                   DECORATEP a su s'imposer comme un partenaire de premier choix pour accompagner ses clients dans la mise en œuvre de leur marque.</p>
                
                <p>Dans le souci de mieux vous servir, notre société est constituée d'une équipe jeune, dynamique et expérimentée. 
                   Par ailleurs, s'agissant des moyens techniques, DECORATEP dispose d'un site de production doté d'équipements modernes, 
                   régulièrement renouvelés au gré des avancées technologiques ; Ce qui lui permet de couvrir à la fois des besoins 
                   spécifiques (enseigne unitaire) et des besoins à l'échelle d'un réseau (signalétique de série).</p>
                
                <h3 style="color: var(--color-dark); margin: 2rem 0 1rem;">Nos Valeurs</h3>
                <ul class="about-features">
                    <li><i class="fas fa-star"></i> <strong>Excellence :</strong> Nous visons la perfection dans chaque réalisation</li>
                    <li><i class="fas fa-handshake"></i> <strong>Partenariat :</strong> Nous construisons des relations durables avec nos clients</li>
                    <li><i class="fas fa-lightbulb"></i> <strong>Innovation :</strong> Nous investissons dans les dernières technologies</li>
                    <li><i class="fas fa-clock"></i> <strong>Réactivité :</strong> Nous respectons nos engagements et délais</li>
                </ul>
            </div>
            
            <div class="about-image">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1461.jpg" alt="Atelier DECORATEP - Zone de finition" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px; box-shadow: var(--box-shadow);">
            </div>
        </div>
    </div>
</section>

<!-- Mot du Directeur Général -->
<section class="section" style="background: linear-gradient(135deg, var(--color-light-gray), var(--color-light)); padding: 4rem 0;">
    <div class="container">
        <div class="section-title">
            <h2>Mot du Directeur Général</h2>
        </div>
        
        <div class="about-content" style="align-items: center;">
            <div class="about-image" style="order: 1;">
                <div style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-primary), var(--color-dark)); border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; color: white; font-size: 4rem; box-shadow: var(--box-shadow);">
                    <i class="fas fa-user-tie"></i>
                </div>
            </div>
            
            <div class="about-text" style="order: 2;">
                <div style="background: white; padding: 2.5rem; border-radius: 12px; box-shadow: var(--box-shadow); position: relative;">
                    <div style="position: absolute; top: -10px; left: 30px; width: 0; height: 0; border-left: 20px solid transparent; border-right: 20px solid transparent; border-bottom: 20px solid white;"></div>
                    
                    <div style="color: var(--color-accent); font-size: 3rem; margin-bottom: 1rem; opacity: 0.3;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-gray); font-style: italic; margin-bottom: 2rem;">
                        "Depuis la création de DECORATEP en 1991, notre ambition a toujours été de faire de chaque projet 
                        une réussite pour nos clients. Cette philosophie nous a menés d'un petit atelier à une entreprise 
                        industrielle reconnue dans le secteur de la signalétique.
                    </p>
                    
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-gray); font-style: italic; margin-bottom: 2rem;">
                        Notre force réside dans notre capacité à allier savoir-faire artisanal et technologies de pointe, 
                        tout en maintenant une relation de proximité avec chacun de nos clients. Que vous soyez une entreprise 
                        individuelle ou un grand réseau, nous mettons la même passion et la même exigence au service de votre image.
                    </p>
                    
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-gray); font-style: italic; margin-bottom: 2rem;">
                        L'avenir de DECORATEP s'écrit avec vous, nos partenaires, dans l'innovation constante et le respect 
                        de nos valeurs fondamentales : qualité, réactivité et excellence."
                    </p>
                    
                    <div style="border-top: 2px solid var(--color-light); padding-top: 1.5rem; margin-top: 2rem;">
                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <div>
                                <h4 style="color: var(--color-dark); margin: 0; font-size: 1.2rem;">Ibrahim DIAKITÉ</h4>
                                <p style="color: var(--color-primary); margin: 0; font-weight: 600;">Directeur Général</p>
                                <p style="color: var(--color-gray); margin: 0; font-size: 0.9rem;">DECORATEP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Équipements et Technologies -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Nos Équipements Modernes</h2>
            <p>Un parc machine régulièrement renouvelé pour suivre les avancées technologiques</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-print"></i>
                </div>
                <h3>Impression Numérique</h3>
                <p>Imprimantes grand format dernière génération pour une qualité d'impression exceptionnelle sur tous supports.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-cut"></i>
                </div>
                <h3>Découpe de Précision</h3>
                <p>Tables de découpe CNC et plotters de découpe pour des finitions parfaites sur tous matériaux.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Atelier de Fabrication</h3>
                <p>Atelier équipé pour la fabrication de structures métalliques et l'assemblage d'enseignes complexes.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Studio Graphique</h3>
                <p>Studio de création équipé des derniers logiciels de PAO pour la conception de vos visuels.</p>
            </div>
        </div>
    </div>
</section>

<!-- Équipe -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Notre Équipe</h2>
            <p>Des professionnels passionnés à votre service</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div style="width: 100px; height: 100px; background: var(--color-primary); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>Direction</h3>
                <p>Une direction expérimentée qui pilote l'entreprise avec vision et expertise depuis plus de 20 ans.</p>
            </div>
            
            <div class="service-card">
                <div style="width: 100px; height: 100px; background: var(--color-accent); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">
                    <i class="fas fa-palette"></i>
                </div>
                <h3>Créatifs</h3>
                <p>Graphistes et designers qui donnent vie à vos idées avec créativité et professionnalisme.</p>
            </div>
            
            <div class="service-card">
                <div style="width: 100px; height: 100px; background: var(--color-dark); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem;">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>Production</h3>
                <p>Techniciens spécialisés qui maîtrisent parfaitement nos équipements et garantissent la qualité.</p>
            </div>
            
            <div class="service-card">
                <div style="width: 100px; height: 100px; background: var(--color-light); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: var(--color-dark); font-size: 2rem;">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3>Installation</h3>
                <p>Équipes de pose qualifiées pour l'installation sécurisée de vos enseignes et signalétiques.</p>
            </div>
        </div>
    </div>
</section>

<!-- Certifications et Engagements -->
<section class="section" style="background: linear-gradient(135deg, var(--color-primary), var(--color-dark)); color: white;">
    <div class="container">
        <div class="section-title" style="color: white;">
            <h2 style="color: white;">Nos Engagements</h2>
            <p style="color: rgba(255,255,255,0.9);">Qualité, sécurité et respect de l'environnement</p>
        </div>
        
        <div class="about-content">
            <div class="about-text" style="color: white;">
                <h3 style="color: var(--color-accent); margin-bottom: 1rem;">Qualité & Sécurité</h3>
                <ul class="about-features" style="color: white;">
                    <li><i class="fas fa-certificate" style="color: var(--color-accent);"></i> Respect des normes en vigueur</li>
                    <li><i class="fas fa-shield-alt" style="color: var(--color-accent);"></i> Assurance décennale et responsabilité civile</li>
                    <li><i class="fas fa-hard-hat" style="color: var(--color-accent);"></i> Formation continue de nos équipes</li>
                    <li><i class="fas fa-check-double" style="color: var(--color-accent);"></i> Contrôle qualité à chaque étape</li>
                </ul>
                
                <h3 style="color: var(--color-accent); margin: 2rem 0 1rem;">Environnement</h3>
                <ul class="about-features" style="color: white;">
                    <li><i class="fas fa-leaf" style="color: var(--color-accent);"></i> Encres écologiques sans solvant</li>
                    <li><i class="fas fa-recycle" style="color: var(--color-accent);"></i> Recyclage des déchets de production</li>
                    <li><i class="fas fa-lightbulb" style="color: var(--color-accent);"></i> LED basse consommation</li>
                    <li><i class="fas fa-tree" style="color: var(--color-accent);"></i> Matériaux durables et recyclables</li>
                </ul>
            </div>
            
            <div class="about-image">
                <div style="width: 100%; height: 300px; background: rgba(255,255,255,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; border: 2px solid rgba(255,255,255,0.2);">
                    <div style="text-align: center;">
                        <i class="fas fa-award" style="font-size: 3rem; color: var(--color-accent); margin-bottom: 1rem;"></i><br>
                        Entreprise Certifiée<br>
                        <small style="opacity: 0.8;">Qualité & Environnement</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Zone de chalandise -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Notre Zone d'Intervention</h2>
            <p>Nous intervenons dans tout Abidjan et ses environs pour vos projets</p>
        </div>
        
        <div class="about-content">
            <div class="about-text">
                <h3 style="color: var(--color-dark); margin-bottom: 1rem;">Proximité et Réactivité</h3>
                <p>Basés à Marcory, au cœur d'Abidjan, nous intervenons rapidement dans toute la capitale économique 
                   et ses communes. Notre localisation stratégique près de l'Hôtel Hibiscus nous permet d'être réactifs 
                   pour vos urgences et de maintenir un service de proximité apprécié de nos clients.</p>
                
                <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Services disponibles :</h4>
                <ul class="about-features">
                    <li><i class="fas fa-map-marker-alt"></i> Déplacement gratuit pour devis</li>
                    <li><i class="fas fa-truck"></i> Livraison dans tout Abidjan et environs</li>
                    <li><i class="fas fa-tools"></i> Installation sur site</li>
                    <li><i class="fas fa-phone"></i> Support technique réactif</li>
                    <li><i class="fas fa-wrench"></i> Maintenance et SAV</li>
                </ul>
                
                <a href="<?php echo SITE_URL; ?>/contact.php" class="btn" style="margin-top: 1rem;">Nous contacter</a>
            </div>
            
            <div class="about-image">
                <div style="width: 100%; height: 300px; background: var(--color-light-gray); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--color-gray); font-size: 1.2rem; border: 2px solid var(--color-light);">
                    <div style="text-align: center;">
                        <i class="fas fa-map" style="font-size: 3rem; color: var(--color-primary); margin-bottom: 1rem;"></i><br>
                        Carte de notre<br>zone d'intervention
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
