<?php
require_once 'config/config.php';

$page_title = "Nos Services";
$page_description = "Découvrez tous nos services : affiches publicitaires, enseignes lumineuses, totems, panneaux et impression sur bâche. Expertise et qualité garanties.";
$page_class = "services-page";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" style="padding: 2rem 0;">
    <div class="container">
        <div class="hero-content">
            <h1>Nos Services</h1>
            <p>Une gamme complète de solutions pour votre communication visuelle</p>
        </div>
    </div>
</section>

<!-- Services détaillés -->
<section class="section">
    <div class="container">
        
        <!-- Affiches Publicitaires -->
        <div id="affiches" class="service-detail" style="margin-bottom: 4rem;">
            <div class="about-content">
                <div class="about-text">
                    <h2 style="color: var(--color-dark); margin-bottom: 1rem;">
                        <i class="fas fa-image" style="color: var(--color-primary); margin-right: 1rem;"></i>
                        Affiches Publicitaires
                    </h2>
                    <p>Nous concevons et imprimons vos affiches publicitaires avec la plus haute qualité. 
                       Que ce soit pour une campagne de communication, un événement ou la promotion de vos produits, 
                       nos affiches captent l'attention et transmettent efficacement votre message.</p>
                    
                    <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Nos prestations :</h4>
                    <ul class="about-features">
                        <li><i class="fas fa-check-circle"></i> Conception graphique personnalisée</li>
                        <li><i class="fas fa-check-circle"></i> Impression haute définition</li>
                        <li><i class="fas fa-check-circle"></i> Formats de A4 à 4x3 mètres</li>
                        <li><i class="fas fa-check-circle"></i> Papiers et supports variés</li>
                        <li><i class="fas fa-check-circle"></i> Finitions professionnelles (pelliculage, vernis)</li>
                        <li><i class="fas fa-check-circle"></i> Livraison et pose possible</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/Impression.jpeg" alt="Impression affiches DECORATEP" style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px; box-shadow: var(--box-shadow);">
                </div>
            </div>
        </div>

        <!-- Enseignes Lumineuses -->
        <div id="enseignes" class="service-detail bg-light" style="padding: 3rem; border-radius: 8px; margin-bottom: 4rem;">
            <div class="about-content" style="flex-direction: row-reverse;">
                <div class="about-text">
                    <h2 style="color: var(--color-dark); margin-bottom: 1rem;">
                        <i class="fas fa-lightbulb" style="color: var(--color-accent); margin-right: 1rem;"></i>
                        Enseignes Lumineuses
                    </h2>
                    <p>Nos enseignes lumineuses LED offrent une visibilité maximale jour et nuit. 
                       Économiques et durables, elles sont parfaites pour mettre en valeur votre commerce 
                       ou votre entreprise. Nous nous occupons de la conception, la fabrication et l'installation.</p>
                    
                    <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Technologies disponibles :</h4>
                    <ul class="about-features">
                        <li><i class="fas fa-check-circle"></i> LED haute performance</li>
                        <li><i class="fas fa-check-circle"></i> Éclairage uniforme et durable</li>
                        <li><i class="fas fa-check-circle"></i> Caissons lumineux sur mesure</li>
                        <li><i class="fas fa-check-circle"></i> Lettres découpées rétroéclairées</li>
                        <li><i class="fas fa-check-circle"></i> Programmation et variateurs</li>
                        <li><i class="fas fa-check-circle"></i> Maintenance et SAV inclus</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/TOTAL - Enseigne.png" alt="Enseigne lumineuse TOTAL" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px; box-shadow: var(--box-shadow);">
                </div>
            </div>
        </div>

        <!-- Totems et Panneaux -->
        <div id="totems" class="service-detail" style="margin-bottom: 4rem;">
            <div class="about-content">
                <div class="about-text">
                    <h2 style="color: var(--color-dark); margin-bottom: 1rem;">
                        <i class="fas fa-sign" style="color: var(--color-primary); margin-right: 1rem;"></i>
                        Totems & Panneaux
                    </h2>
                    <p>Nos totems et panneaux signalétiques guident et informent vos visiteurs. 
                       Résistants aux intempéries, ils sont conçus pour durer dans le temps tout en 
                       conservant leur esthétique. Solutions intérieures et extérieures disponibles.</p>
                    
                    <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Gamme complète :</h4>
                    <ul class="about-features">
                        <li><i class="fas fa-check-circle"></i> Totems d'accueil et directionnels</li>
                        <li><i class="fas fa-check-circle"></i> Panneaux de signalisation</li>
                        <li><i class="fas fa-check-circle"></i> Mâts et supports sur mesure</li>
                        <li><i class="fas fa-check-circle"></i> Matériaux premium (alu, inox, composite)</li>
                        <li><i class="fas fa-check-circle"></i> Finitions anti-graffiti</li>
                        <li><i class="fas fa-check-circle"></i> Installation et scellement</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur.jpg" alt="Totem Allianz" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px; box-shadow: var(--box-shadow);">
                </div>
            </div>
        </div>

        <!-- Impression sur Bâche -->
        <div id="impression" class="service-detail bg-light" style="padding: 3rem; border-radius: 8px; margin-bottom: 4rem;">
            <div class="about-content" style="flex-direction: row-reverse;">
                <div class="about-text">
                    <h2 style="color: var(--color-dark); margin-bottom: 1rem;">
                        <i class="fas fa-print" style="color: var(--color-accent); margin-right: 1rem;"></i>
                        Impression sur Bâche
                    </h2>
                    <p>L'impression grand format sur bâche est idéale pour vos événements, chantiers et 
                       communications temporaires. Nos bâches résistent aux UV et aux intempéries pour 
                       une utilisation extérieure prolongée.</p>
                    
                    <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Spécialités :</h4>
                    <ul class="about-features">
                        <li><i class="fas fa-check-circle"></i> Impression haute résolution</li>
                        <li><i class="fas fa-check-circle"></i> Bâches micro-perforées</li>
                        <li><i class="fas fa-check-circle"></i> Formats jusqu'à 5 mètres de large</li>
                        <li><i class="fas fa-check-circle"></i> Finitions avec œillets et sangles</li>
                        <li><i class="fas fa-check-circle"></i> Bâches mesh pour façades</li>
                        <li><i class="fas fa-check-circle"></i> Livraison express possible</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/Branding - Bachée 4x4.jpg" alt="Impression bâche grand format" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px; box-shadow: var(--box-shadow);">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Équipements Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>🏭 Nos Équipements Modernes</h2>
            <p>Un parc machine de pointe pour une qualité exceptionnelle</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1442.jpg" alt="Atelier DECORATEP" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Atelier de Production</h4>
                </div>
            </div>
            
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/PLIEUSE 5.jpeg" alt="Plieuse DECORATEP" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Plieuse Professionnelle</h4>
                </div>
            </div>
            
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1443 2.jpg" alt="Équipements modernes" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Équipements Modernes</h4>
                </div>
            </div>
            
            <div style="position: relative; height: 200px; border-radius: 15px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1461.jpg" alt="Zone de finition" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
                    <h4 style="margin: 0; font-size: 1rem;">Zone de Finition</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section" style="background: var(--color-light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Notre Processus</h2>
            <p>De l'idée à la réalisation, nous vous accompagnons à chaque étape</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon" style="color: var(--color-primary);">
                    <span style="font-size: 2rem; font-weight: bold;">1</span>
                </div>
                <h3>Consultation</h3>
                <p>Analyse de vos besoins et conseils personnalisés pour définir la solution optimale.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="color: var(--color-primary);">
                    <span style="font-size: 2rem; font-weight: bold;">2</span>
                </div>
                <h3>Conception</h3>
                <p>Création des maquettes et validation des visuels avant production.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="color: var(--color-primary);">
                    <span style="font-size: 2rem; font-weight: bold;">3</span>
                </div>
                <h3>Production</h3>
                <p>Fabrication avec nos équipements modernes et contrôle qualité rigoureux.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="color: var(--color-primary);">
                    <span style="font-size: 2rem; font-weight: bold;">4</span>
                </div>
                <h3>Installation</h3>
                <p>Pose professionnelle et mise en service par nos équipes qualifiées.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container text-center">
        <h2 style="color: var(--color-dark); margin-bottom: 1rem;">Besoin d'un devis ?</h2>
        <p style="color: var(--color-gray); font-size: 1.1rem; margin-bottom: 2rem;">
            Contactez-nous pour discuter de votre projet et recevoir une estimation gratuite
        </p>
        <a href="<?php echo SITE_URL; ?>/contact.php" class="btn">Demander un devis gratuit</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
