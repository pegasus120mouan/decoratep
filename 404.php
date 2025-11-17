<?php
require_once 'config/config.php';

$page_title = "Page non trouvée - Erreur 404";
$page_description = "La page que vous recherchez n'existe pas ou a été déplacée.";
$page_class = "error-page";

http_response_code(404);

include 'includes/header.php';
?>

<section class="section" style="padding: 4rem 0; text-align: center;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <div style="font-size: 8rem; color: var(--color-primary); font-weight: bold; margin-bottom: 1rem;">
                404
            </div>
            
            <h1 style="color: var(--color-dark); margin-bottom: 1rem; font-size: 2.5rem;">
                Page non trouvée
            </h1>
            
            <p style="color: var(--color-gray); font-size: 1.2rem; margin-bottom: 2rem;">
                Désolé, la page que vous recherchez n'existe pas ou a été déplacée.
            </p>
            
            <div style="margin-bottom: 3rem;">
                <a href="<?php echo SITE_URL; ?>" class="btn" style="margin-right: 1rem;">
                    <i class="fas fa-home"></i> Retour à l'accueil
                </a>
                <a href="<?php echo SITE_URL; ?>/contact.php" class="btn btn-secondary" style="background: var(--color-dark); color: white; border-color: var(--color-dark);">
                    <i class="fas fa-envelope"></i> Nous contacter
                </a>
            </div>
            
            <div style="background: var(--color-light-gray); padding: 2rem; border-radius: 8px;">
                <h3 style="color: var(--color-dark); margin-bottom: 1rem;">
                    <i class="fas fa-lightbulb" style="color: var(--color-accent);"></i>
                    Suggestions
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; text-align: left;">
                    <div>
                        <h4 style="color: var(--color-dark); margin-bottom: 0.5rem;">Nos Services</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li><a href="<?php echo SITE_URL; ?>/services.php#affiches" style="color: var(--color-primary); text-decoration: none;">Affiches publicitaires</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/services.php#enseignes" style="color: var(--color-primary); text-decoration: none;">Enseignes lumineuses</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/services.php#totems" style="color: var(--color-primary); text-decoration: none;">Totems & panneaux</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--color-dark); margin-bottom: 0.5rem;">Informations</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li><a href="<?php echo SITE_URL; ?>/about.php" style="color: var(--color-primary); text-decoration: none;">À propos de nous</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/realisations.php" style="color: var(--color-primary); text-decoration: none;">Nos réalisations</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/contact.php" style="color: var(--color-primary); text-decoration: none;">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
