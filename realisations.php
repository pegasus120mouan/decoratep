<?php
require_once 'config/config.php';

$page_title = "Nos Réalisations";
$page_description = "Découvrez nos réalisations en publicité : enseignes lumineuses, affiches, totems, panneaux. Portfolio de projets réussis pour nos clients.";
$page_class = "realisations-page";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" style="padding: 2rem 0;">
    <div class="container">
        <div class="hero-content">
            <h1>Nos Réalisations</h1>
            <p>Découvrez quelques-unes de nos créations les plus remarquables</p>
        </div>
    </div>
</section>

<!-- Filtres -->
<section class="section" style="padding: 2rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 2rem;">
            <button class="btn filter-btn active" data-filter="all" style="margin: 0.5rem;">Tous</button>
            <button class="btn filter-btn" data-filter="enseignes" style="margin: 0.5rem; background: var(--color-dark);">Enseignes</button>
            <button class="btn filter-btn" data-filter="affiches" style="margin: 0.5rem; background: var(--color-dark);">Affiches</button>
            <button class="btn filter-btn" data-filter="totems" style="margin: 0.5rem; background: var(--color-dark);">Totems</button>
            <button class="btn filter-btn" data-filter="impression" style="margin: 0.5rem; background: var(--color-dark);">Impression</button>
        </div>
    </div>
</section>

<!-- Galerie de réalisations -->
<section class="section">
    <div class="container">
        <div class="realisations-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
            
            <!-- Enseigne TOTAL -->
            <div class="realisation-card enseignes" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/TOTAL - Enseigne.png'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Enseigne TOTAL</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">Station TOTAL</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Enseigne lumineuse LED pour station-service TOTAL. Installation complète avec éclairage nocturne et maintenance.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Enseigne LED</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal1')">Voir détails</button>
                    </div>
                </div>
            </div>

            <!-- Branding Camion DETO -->
            <div class="realisation-card affiches" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/Branding - Camion DETO.jpg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Branding Véhicule</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">Camion DETO</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Habillage complet de véhicule utilitaire avec impression sur vinyle adhésif. Design personnalisé et pose professionnelle.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Branding</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal2')">Voir détails</button>
                    </div>
                </div>
            </div>

            <!-- Totem Allianz -->
            <div class="realisation-card totems" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur.jpg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Totem Allianz</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">Assurance Allianz</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Totem de signalétique en hauteur pour agence Allianz. Structure métallique avec éclairage LED intégré.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Totem LED</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal3')">Voir détails</button>
                    </div>
                </div>
            </div>

            <!-- Impression Bâche 4x4 -->
            <div class="realisation-card impression" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/Branding - Bachée 4x4.jpg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Bâche 4x4</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">Bâche Publicitaire</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Impression grand format sur bâche résistante. Installation sur structure métallique pour affichage extérieur longue durée.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Grand Format</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal4')">Voir détails</button>
                    </div>
                </div>
            </div>

            <!-- Enseigne SGCI -->
            <div class="realisation-card enseignes" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne.jpg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Enseigne SGCI</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">SGCI Entreprise</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Enseigne lumineuse avec lettres en relief et éclairage LED. Installation en façade avec structure de fixation renforcée.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Enseigne LED</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal5')">Voir détails</button>
                    </div>
                </div>
            </div>
            
            <!-- Station Afriquia -->
            <div class="realisation-card totems" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/Afriquia - Totem Station.jpg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Station Afriquia</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">Totem Station Afriquia</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Totem de signalisation pour station-service avec éclairage intégré. Structure résistante aux intempéries.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Station-Service</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal6')">Voir détails</button>
                    </div>
                </div>
            </div>
            
            <!-- DMD Enseigne -->
            <div class="realisation-card enseignes" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background-image: url('<?php echo SITE_URL; ?>/images/visuel/DMD - Enseigne.jpg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 1rem;">
                        <h4 style="margin: 0; font-size: 1.1rem;">Enseigne DMD</h4>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">DMD Services</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Enseigne moderne avec éclairage LED et design contemporain. Installation complète avec câblage et programmation.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Design Moderne</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal7')">Voir détails</button>
                    </div>
                </div>
            </div>

            <!-- Panneau immobilier -->
            <div class="realisation-card totems" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--box-shadow); transition: var(--transition);">
                <div style="height: 250px; background: linear-gradient(45deg, var(--color-accent), var(--color-dark)); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                    <div style="text-align: center;">
                        <i class="fas fa-home" style="font-size: 3rem; margin-bottom: 1rem;"></i><br>
                        Panneau Immobilier
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--color-dark); margin-bottom: 0.5rem;">Résidence "Les Jardins"</h3>
                    <p style="color: var(--color-gray); margin-bottom: 1rem;">Panneau de promotion immobilière avec structure métallique. Impression sur dibond avec protection anti-UV.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="background: var(--color-light); color: var(--color-dark); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.9rem;">Immobilier</span>
                        <button class="btn" style="padding: 0.5rem 1rem; font-size: 0.9rem;" onclick="openModal('modal6')">Voir détails</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Photothèque Complète -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>📸 Photothèque Complète</h2>
            <p>Découvrez toutes nos réalisations en images</p>
        </div>
        
        <!-- Filtres de la photothèque -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <button class="btn gallery-filter active" data-category="all" style="margin: 0.5rem;">Toutes</button>
            <button class="btn gallery-filter" data-category="enseignes" style="margin: 0.5rem; background: var(--color-dark);">Enseignes</button>
            <button class="btn gallery-filter" data-category="totems" style="margin: 0.5rem; background: var(--color-dark);">Totems</button>
            <button class="btn gallery-filter" data-category="branding" style="margin: 0.5rem; background: var(--color-dark);">Branding</button>
            <button class="btn gallery-filter" data-category="atelier" style="margin: 0.5rem; background: var(--color-dark);">Atelier</button>
        </div>
        
        <!-- Galerie d'images -->
        <div class="photo-gallery" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
            
            <!-- Enseignes -->
            <div class="gallery-item enseignes" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/TOTAL - Enseigne.png', 'Enseigne TOTAL')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/TOTAL - Enseigne.png" alt="Enseigne TOTAL" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Enseigne TOTAL</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Station-service</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item enseignes" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne.jpg', 'Enseigne SGCI')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne.jpg" alt="Enseigne SGCI" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Enseigne SGCI</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Entreprise</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item enseignes" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/DMD - Enseigne.jpg', 'Enseigne DMD')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/DMD - Enseigne.jpg" alt="Enseigne DMD" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Enseigne DMD</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Services</p>
                    </div>
                </div>
            </div>
            
            <!-- Totems -->
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur.jpg', 'Totem Allianz')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur.jpg" alt="Totem Allianz" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Totem Allianz</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Assurance</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Afriquia - Totem Station.jpg', 'Totem Afriquia')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Afriquia - Totem Station.jpg" alt="Totem Afriquia" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Totem Afriquia</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Station-service</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Totem GESTOCI.jpg', 'Totem GESTOCI')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Totem GESTOCI.jpg" alt="Totem GESTOCI" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Totem GESTOCI</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Entreprise</p>
                    </div>
                </div>
            </div>
            
            <!-- Branding -->
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Branding - Camion DETO.jpg', 'Branding Camion DETO')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Branding - Camion DETO.jpg" alt="Branding Camion DETO" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Branding DETO</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Véhicule utilitaire</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Branding - Camion TOTAL.jpg', 'Branding Camion TOTAL')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Branding - Camion TOTAL.jpg" alt="Branding Camion TOTAL" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Branding TOTAL</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Camion de livraison</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Branding - Bachée 4x4.jpg', 'Bâche 4x4')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Branding - Bachée 4x4.jpg" alt="Bâche 4x4" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Bâche 4x4</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Grand format</p>
                    </div>
                </div>
            </div>
            
            <!-- Atelier -->
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/IMG_1439.jpg', 'Atelier DECORATEP')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1439.jpg" alt="Atelier DECORATEP" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Atelier Production</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Équipements modernes</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/IMG_1442.jpg', 'Zone de travail')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1442.jpg" alt="Zone de travail" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Zone de Travail</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Atelier DECORATEP</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/PLIEUSE 5.jpeg', 'Plieuse professionnelle')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/PLIEUSE 5.jpeg" alt="Plieuse professionnelle" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Plieuse</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Équipement professionnel</p>
                    </div>
                </div>
            </div>
            
            <!-- Plus d'enseignes -->
            <div class="gallery-item enseignes" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne 1.jpg', 'Enseigne SGCI 1')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne 1.jpg" alt="Enseigne SGCI 1" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Enseigne SGCI</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Version alternative</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item enseignes" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne 2.jpg', 'Enseigne SGCI 2')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/SGCI - Enseigne 2.jpg" alt="Enseigne SGCI 2" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Enseigne SGCI</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Éclairage nocturne</p>
                    </div>
                </div>
            </div>
            
            <!-- Plus de totems -->
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur 2.jpg', 'Totem Allianz 2')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur 2.jpg" alt="Totem Allianz 2" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Totem Allianz</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Vue alternative</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur 3.jpg', 'Totem Allianz 3')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Allianz - Totem en Hauteur 3.jpg" alt="Totem Allianz 3" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Totem Allianz</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Détail construction</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Totem April.jpg', 'Totem April')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Totem April.jpg" alt="Totem April" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Totem April</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Signalétique</p>
                    </div>
                </div>
            </div>
            
            <!-- Stations-service -->
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Oryx - Station.jpg', 'Station Oryx')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Oryx - Station.jpg" alt="Station Oryx" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Station Oryx</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Station-service</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item totems" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/PetroCI - Auvent + Totem.png', 'PetroCI Auvent')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/PetroCI - Auvent + Totem.png" alt="PetroCI Auvent" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">PetroCI</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Auvent + Totem</p>
                    </div>
                </div>
            </div>
            
            <!-- Plus d'atelier -->
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/IMG_1443 2.jpg', 'Atelier équipements')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1443 2.jpg" alt="Atelier équipements" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Équipements</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Atelier moderne</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/IMG_1444 2.jpg', 'Zone production')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1444 2.jpg" alt="Zone production" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Zone Production</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Atelier DECORATEP</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/IMG_1449.jpg', 'Espace travail')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1449.jpg" alt="Espace travail" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Espace Travail</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Organisation</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item atelier" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/IMG_1461.jpg', 'Zone finition')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/IMG_1461.jpg" alt="Zone finition" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Zone Finition</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Contrôle qualité</p>
                    </div>
                </div>
            </div>
            
            <!-- Projets spéciaux -->
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Unico - Box Baril.png', 'Unico Box Baril')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Unico - Box Baril.png" alt="Unico Box Baril" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Unico Box</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Baril personnalisé</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/FDFP - Panneaux.jpg', 'Panneaux FDFP')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/FDFP - Panneaux.jpg" alt="Panneaux FDFP" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Panneaux FDFP</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Signalétique</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/PME -1.jpg', 'Projet PME')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/PME -1.jpg" alt="Projet PME" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Projet PME</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Aménagement</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Auvent  - Construction.jpg', 'Construction Auvent')">
                <img src="<?php echo SITE_URL; ?>/images/visuel/Auvent  - Construction.jpg" alt="Construction Auvent" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                    <div style="color: white;">
                        <h4 style="margin: 0; font-size: 1rem;">Auvent</h4>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Construction</p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Images supplémentaires (cachées initialement) -->
        <div id="moreImages" style="display: none;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                
                <!-- Plus d'images WhatsApp -->
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2019-01-14 at 10.26.36-3.jpg', 'Projet 2019')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2019-01-14 at 10.26.36-3.jpg" alt="Projet 2019" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Projet 2019</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Réalisation client</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2019-12-31 at 09.56.40.jpeg', 'Projet Fin 2019')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2019-12-31 at 09.56.40.jpeg" alt="Projet Fin 2019" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Projet Fin 2019</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Installation</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2020-03-10 at 10.43.52.jpeg', 'Projet Mars 2020')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2020-03-10 at 10.43.52.jpeg" alt="Projet Mars 2020" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Projet Mars 2020</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Signalétique</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2020-05-22 at 13.26.05.jpeg', 'Projet Mai 2020')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2020-05-22 at 13.26.05.jpeg" alt="Projet Mai 2020" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Projet Mai 2020</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Enseigne</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2021-02-10 at 10.09.45.jpeg', 'Projet Février 2021')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/WhatsApp Image 2021-02-10 at 10.09.45.jpeg" alt="Projet Février 2021" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Projet Février 2021</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Installation</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/boîte à suggestions.png', 'Boîte à suggestions')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/boîte à suggestions.png" alt="Boîte à suggestions" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Boîte à Suggestions</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Mobilier sur mesure</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/Deco Tweat.jpg', 'Deco Tweat')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/Deco Tweat.jpg" alt="Deco Tweat" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">Deco Tweat</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Projet spécial</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item branding" style="position: relative; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: var(--box-shadow); cursor: pointer; transition: var(--transition);" onclick="openLightbox('<?php echo SITE_URL; ?>/images/visuel/TOTAL QUARTZ.jpg', 'TOTAL QUARTZ')">
                    <img src="<?php echo SITE_URL; ?>/images/visuel/TOTAL QUARTZ.jpg" alt="TOTAL QUARTZ" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); display: flex; align-items: end; padding: 1rem; opacity: 0; transition: var(--transition);">
                        <div style="color: white;">
                            <h4 style="margin: 0; font-size: 1rem;">TOTAL QUARTZ</h4>
                            <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">Produit TOTAL</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Bouton Voir Plus -->
        <div style="text-align: center; margin-top: 3rem;">
            <button id="loadMoreBtn" class="btn" style="background: var(--color-dark);">
                <i class="fas fa-plus" style="margin-right: 10px;"></i>
                Charger plus d'images
            </button>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightboxModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 9999; cursor: pointer;" onclick="closeLightbox()">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 90%; max-height: 90%;">
        <img id="lightboxImage" src="" alt="" style="max-width: 100%; max-height: 100%; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);">
        <div id="lightboxCaption" style="color: white; text-align: center; margin-top: 1rem; font-size: 1.2rem;"></div>
    </div>
    <button onclick="closeLightbox()" style="position: absolute; top: 20px; right: 30px; background: none; border: none; color: white; font-size: 2rem; cursor: pointer;">×</button>
</div>

<!-- Témoignages clients -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Ce que disent nos clients</h2>
            <p>Leur satisfaction est notre meilleure récompense</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p style="font-style: italic; margin-bottom: 1rem;">"Excellent travail pour notre enseigne LED. L'équipe est professionnelle et respecte les délais. Je recommande vivement DECORATEP."</p>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                        M.D
                    </div>
                    <div>
                        <strong>Marc Dubois</strong><br>
                        <small style="color: var(--color-gray);">Restaurant Le Gourmet</small>
                    </div>
                </div>
            </div>
            
            <div class="service-card">
                <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p style="font-style: italic; margin-bottom: 1rem;">"Service impeccable du devis à l'installation. La qualité des matériaux et la finition sont au rendez-vous. Très satisfait !"</p>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 50px; height: 50px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                        S.M
                    </div>
                    <div>
                        <strong>Sophie Martin</strong><br>
                        <small style="color: var(--color-gray);">Pharmacie Centrale</small>
                    </div>
                </div>
            </div>
            
            <div class="service-card">
                <div style="color: var(--color-accent); font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p style="font-style: italic; margin-bottom: 1rem;">"Réactivité exceptionnelle pour notre urgence. L'équipe s'est mobilisée pour respecter nos contraintes. Merci !"</p>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 50px; height: 50px; background: var(--color-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                        P.L
                    </div>
                    <div>
                        <strong>Pierre Leroy</strong><br>
                        <small style="color: var(--color-gray);">Centre Commercial</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container text-center">
        <h2 style="color: var(--color-dark); margin-bottom: 1rem;">Votre projet mérite le meilleur</h2>
        <p style="color: var(--color-gray); font-size: 1.1rem; margin-bottom: 2rem;">
            Rejoignez nos clients satisfaits et donnez vie à vos idées
        </p>
        <a href="<?php echo SITE_URL; ?>/contact.php" class="btn">Démarrer mon projet</a>
    </div>
</section>

<!-- JavaScript pour les filtres -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const realisationCards = document.querySelectorAll('.realisation-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Mettre à jour les boutons actifs
            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.style.background = 'var(--color-dark)';
            });
            this.classList.add('active');
            this.style.background = 'var(--color-accent)';
            
            // Filtrer les cartes
            realisationCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.5s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Effet hover sur les cartes
    realisationCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'var(--box-shadow)';
        });
    });
});

// Fonction pour ouvrir les modales (à implémenter si nécessaire)
function openModal(modalId) {
    alert('Détails de la réalisation - Fonctionnalité à développer');
}

// Fonctions pour la photothèque
function openLightbox(imageSrc, caption) {
    const modal = document.getElementById('lightboxModal');
    const image = document.getElementById('lightboxImage');
    const captionElement = document.getElementById('lightboxCaption');
    
    image.src = imageSrc;
    image.alt = caption;
    captionElement.textContent = caption;
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const modal = document.getElementById('lightboxModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Filtres de la galerie
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.gallery-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    // Gestion des filtres
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Mettre à jour les boutons actifs
            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.style.background = 'var(--color-dark)';
            });
            this.classList.add('active');
            this.style.background = 'var(--color-accent)';
            
            // Filtrer les images
            galleryItems.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeInUp 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Effets hover sur les images
    galleryItems.forEach(item => {
        const overlay = item.querySelector('.gallery-overlay');
        
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            if (overlay) overlay.style.opacity = '1';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            if (overlay) overlay.style.opacity = '0';
        });
    });
    
    // Fermer lightbox avec Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        }
    });
    
    // Bouton "Charger plus"
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const moreImages = document.getElementById('moreImages');
    
    if (loadMoreBtn && moreImages) {
        loadMoreBtn.addEventListener('click', function() {
            // Afficher les images supplémentaires avec animation
            moreImages.style.display = 'block';
            moreImages.style.opacity = '0';
            moreImages.style.transform = 'translateY(20px)';
            moreImages.style.transition = 'all 0.5s ease';
            
            // Animation d'apparition
            setTimeout(() => {
                moreImages.style.opacity = '1';
                moreImages.style.transform = 'translateY(0)';
            }, 50);
            
            // Mettre à jour le bouton
            this.innerHTML = '<i class="fas fa-check" style="margin-right: 10px;"></i>Toutes les images sont affichées';
            this.disabled = true;
            this.style.opacity = '0.6';
            this.style.cursor = 'not-allowed';
            
            // Réappliquer les événements hover aux nouvelles images
            const newGalleryItems = moreImages.querySelectorAll('.gallery-item');
            newGalleryItems.forEach(item => {
                const overlay = item.querySelector('.gallery-overlay');
                
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    if (overlay) overlay.style.opacity = '1';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    if (overlay) overlay.style.opacity = '0';
                });
            });
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>
