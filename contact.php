<?php
require_once 'config/config.php';

$page_title = "Contact";
$page_description = "Contactez DECORATEP pour vos projets de publicité. Devis gratuit, conseils personnalisés. Appelez-nous ou utilisez notre formulaire de contact.";
$page_class = "contact-page";

// Traitement du formulaire
$message_sent = false;
$error_message = '';

if ($_POST) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $service = $_POST['service'] ?? '';
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Le nom est requis";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Un email valide est requis";
    }
    
    if (empty($message)) {
        $errors[] = "Le message est requis";
    }
    
    if (empty($errors)) {
        // Ici, vous pouvez ajouter l'envoi d'email
        // Pour la démo, nous simulons l'envoi
        
        $to = SITE_EMAIL;
        $email_subject = "Nouveau message depuis le site - " . $subject;
        $email_body = "Nouveau message reçu depuis le site web DECORATEP\n\n";
        $email_body .= "Nom: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Téléphone: " . $phone . "\n";
        $email_body .= "Service demandé: " . $service . "\n";
        $email_body .= "Sujet: " . $subject . "\n\n";
        $email_body .= "Message:\n" . $message . "\n";
        
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Tentative d'envoi d'email (décommentez si mail() est configuré)
        // if (mail($to, $email_subject, $email_body, $headers)) {
        //     $message_sent = true;
        // } else {
        //     $error_message = "Erreur lors de l'envoi du message. Veuillez réessayer.";
        // }
        
        // Pour la démo, on considère que l'envoi a réussi
        $message_sent = true;
        
    } else {
        $error_message = implode('<br>', $errors);
    }
}

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" style="padding: 2rem 0;">
    <div class="container">
        <div class="hero-content">
            <h1>Contactez-nous</h1>
            <p>Nous sommes à votre écoute pour tous vos projets</p>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="section">
    <div class="container">
        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Adresse</h3>
                <p><?php echo SITE_ADDRESS; ?></p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Téléphone</h3>
                <p><a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>" style="color: var(--color-primary); text-decoration: none;"><?php echo SITE_PHONE; ?></a></p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p><a href="mailto:<?php echo SITE_EMAIL; ?>" style="color: var(--color-primary); text-decoration: none;"><?php echo SITE_EMAIL; ?></a></p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Horaires</h3>
                <p>Lun-Ven: 8h-18h<br>Sam: 9h-12h<br>Dim: Fermé</p>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire de contact -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Demande de Devis Gratuit</h2>
            <p>Décrivez-nous votre projet, nous vous répondrons rapidement</p>
        </div>
        
        <?php if ($message_sent): ?>
            <div style="max-width: 600px; margin: 0 auto 2rem; padding: 1rem; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 8px; text-align: center;">
                <i class="fas fa-check-circle" style="margin-right: 0.5rem;"></i>
                <strong>Message envoyé avec succès !</strong><br>
                Nous vous répondrons dans les plus brefs délais.
            </div>
        <?php endif; ?>
        
        <?php if ($error_message): ?>
            <div style="max-width: 600px; margin: 0 auto 2rem; padding: 1rem; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 8px; text-align: center;">
                <i class="fas fa-exclamation-triangle" style="margin-right: 0.5rem;"></i>
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        
        <form class="contact-form" method="POST" id="contact-form">
            <div class="form-group">
                <label for="name">Nom complet *</label>
                <input type="text" id="name" name="name" class="form-control" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" class="form-control" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="service">Service demandé</label>
                <select id="service" name="service" class="form-control">
                    <option value="">Sélectionnez un service</option>
                    <option value="affiches" <?php echo ($_POST['service'] ?? '') === 'affiches' ? 'selected' : ''; ?>>Affiches publicitaires</option>
                    <option value="enseignes" <?php echo ($_POST['service'] ?? '') === 'enseignes' ? 'selected' : ''; ?>>Enseignes lumineuses</option>
                    <option value="totems" <?php echo ($_POST['service'] ?? '') === 'totems' ? 'selected' : ''; ?>>Totems et panneaux</option>
                    <option value="impression" <?php echo ($_POST['service'] ?? '') === 'impression' ? 'selected' : ''; ?>>Impression sur bâche</option>
                    <option value="autre" <?php echo ($_POST['service'] ?? '') === 'autre' ? 'selected' : ''; ?>>Autre / Conseil</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Ex: Devis pour enseigne lumineuse" value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
            </div>
            
            <div class="form-group">
                <label for="message">Votre message *</label>
                <textarea id="message" name="message" class="form-control" rows="6" required placeholder="Décrivez votre projet : dimensions, matériaux souhaités, délais, budget approximatif..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
            </div>
            
            <div style="text-align: center;">
                <button type="submit" class="btn">
                    <i class="fas fa-paper-plane"></i> Envoyer ma demande
                </button>
            </div>
            
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: var(--color-gray);">
                * Champs obligatoires<br>
                Vos données sont protégées et ne seront jamais transmises à des tiers.
            </p>
        </form>
    </div>
</section>

<!-- Carte et informations pratiques -->
<section class="section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 style="color: var(--color-dark); margin-bottom: 1rem;">Informations Pratiques</h2>
                
                <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Horaires d'ouverture :</h4>
                <ul class="about-features">
                    <li><i class="fas fa-clock"></i> <strong>Lundi - Vendredi :</strong> 8h00 - 18h00</li>
                    <li><i class="fas fa-clock"></i> <strong>Samedi :</strong> 9h00 - 12h00</li>
                    <li><i class="fas fa-clock"></i> <strong>Dimanche :</strong> Fermé</li>
                </ul>
                
                <h4 style="color: var(--color-dark); margin: 1.5rem 0 1rem;">Services :</h4>
                <ul class="about-features">
                    <li><i class="fas fa-car"></i> Parking gratuit sur place</li>
                    <li><i class="fas fa-wheelchair"></i> Accès PMR</li>
                    <li><i class="fas fa-handshake"></i> Rendez-vous sur site possible</li>
                    <li><i class="fas fa-phone"></i> Urgences : nous contacter</li>
                </ul>
                
                <div style="margin-top: 2rem;">
                    <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>" class="btn" style="margin-right: 1rem;">
                        <i class="fas fa-phone"></i> Appeler maintenant
                    </a>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" class="btn btn-secondary" style="background: var(--color-dark); color: white; border-color: var(--color-dark);">
                        <i class="fas fa-envelope"></i> Envoyer un email
                    </a>
                </div>
            </div>
            
            <div class="about-image">
                <div style="width: 100%; height: 400px; background: var(--color-light-gray); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--color-gray); font-size: 1.2rem; border: 2px solid var(--color-light);">
                    <div style="text-align: center;">
                        <i class="fas fa-map-marked-alt" style="font-size: 3rem; color: var(--color-primary); margin-bottom: 1rem;"></i><br>
                        Plan d'accès<br>
                        <small style="opacity: 0.8;"><?php echo SITE_ADDRESS; ?></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ rapide -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Questions Fréquentes</h2>
            <p>Les réponses aux questions les plus courantes</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <h3 style="color: var(--color-dark);">Délais de réalisation ?</h3>
                <p>Les délais varient selon le projet : 2-5 jours pour les affiches, 1-2 semaines pour les enseignes. Nous vous communiquons un planning précis avec le devis.</p>
            </div>
            
            <div class="service-card">
                <h3 style="color: var(--color-dark);">Le devis est-il gratuit ?</h3>
                <p>Oui, tous nos devis sont gratuits et sans engagement. Nous nous déplaçons également gratuitement pour étudier votre projet sur site.</p>
            </div>
            
            <div class="service-card">
                <h3 style="color: var(--color-dark);">Garantie des travaux ?</h3>
                <p>Nous garantissons tous nos travaux. La durée varie selon le type de prestation : 1 an pour les impressions, 2 ans pour les enseignes LED.</p>
            </div>
            
            <div class="service-card">
                <h3 style="color: var(--color-dark);">Zone d'intervention ?</h3>
                <p>Nous intervenons dans toute la région. Pour les projets importants, nous pouvons étendre notre zone d'intervention. Contactez-nous pour plus d'infos.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
