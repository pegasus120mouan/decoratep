<?php
/**
 * Fonctions utilitaires pour DECORATEP
 */

/**
 * Sécuriser les données d'entrée
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Valider une adresse email
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Valider un numéro de téléphone français
 */
function validate_phone($phone) {
    $phone = preg_replace('/[^0-9+]/', '', $phone);
    return preg_match('/^(?:\+33|0)[1-9](?:[0-9]{8})$/', $phone);
}

/**
 * Générer un token CSRF
 */
function generate_csrf_token() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Vérifier un token CSRF
 */
function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Envoyer un email de contact
 */
function send_contact_email($data) {
    $to = SITE_EMAIL;
    $subject = "Nouveau message depuis le site - " . $data['subject'];
    
    $message = "Nouveau message reçu depuis le site web DECORATEP\n\n";
    $message .= "Nom: " . $data['name'] . "\n";
    $message .= "Email: " . $data['email'] . "\n";
    $message .= "Téléphone: " . $data['phone'] . "\n";
    $message .= "Service demandé: " . $data['service'] . "\n";
    $message .= "Sujet: " . $data['subject'] . "\n\n";
    $message .= "Message:\n" . $data['message'] . "\n\n";
    $message .= "---\n";
    $message .= "Envoyé le: " . date('d/m/Y à H:i:s') . "\n";
    $message .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    $headers = "From: " . $data['email'] . "\r\n";
    $headers .= "Reply-To: " . $data['email'] . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    return mail($to, $subject, $message, $headers);
}

/**
 * Logger les erreurs
 */
function log_error($message, $file = '', $line = '') {
    $log_message = date('Y-m-d H:i:s') . " - ";
    if ($file) $log_message .= "File: $file ";
    if ($line) $log_message .= "Line: $line ";
    $log_message .= "Error: $message\n";
    
    error_log($log_message, 3, __DIR__ . '/../logs/error.log');
}

/**
 * Redirection sécurisée
 */
function safe_redirect($url) {
    // Vérifier que l'URL est relative ou appartient au domaine
    if (filter_var($url, FILTER_VALIDATE_URL) === false || 
        strpos($url, SITE_URL) === 0 || 
        $url[0] === '/') {
        header("Location: $url");
        exit();
    }
    // Redirection par défaut vers l'accueil
    header("Location: " . SITE_URL);
    exit();
}

/**
 * Générer un slug à partir d'une chaîne
 */
function create_slug($string) {
    $string = strtolower($string);
    $string = preg_replace('/[àáâãäå]/', 'a', $string);
    $string = preg_replace('/[èéêë]/', 'e', $string);
    $string = preg_replace('/[ìíîï]/', 'i', $string);
    $string = preg_replace('/[òóôõö]/', 'o', $string);
    $string = preg_replace('/[ùúûü]/', 'u', $string);
    $string = preg_replace('/[ç]/', 'c', $string);
    $string = preg_replace('/[^a-z0-9\s-]/', '', $string);
    $string = preg_replace('/[\s-]+/', '-', $string);
    return trim($string, '-');
}

/**
 * Formater un numéro de téléphone
 */
function format_phone($phone) {
    $phone = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($phone) === 10 && $phone[0] === '0') {
        return substr($phone, 0, 2) . ' ' . 
               substr($phone, 2, 2) . ' ' . 
               substr($phone, 4, 2) . ' ' . 
               substr($phone, 6, 2) . ' ' . 
               substr($phone, 8, 2);
    }
    return $phone;
}

/**
 * Calculer le temps de lecture estimé
 */
function reading_time($text) {
    $word_count = str_word_count(strip_tags($text));
    $minutes = ceil($word_count / 200); // 200 mots par minute
    return $minutes . ' min de lecture';
}

/**
 * Générer des métadonnées Open Graph
 */
function generate_og_meta($title, $description, $image = '', $url = '') {
    $og_meta = '';
    $og_meta .= '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n";
    $og_meta .= '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    $og_meta .= '<meta property="og:type" content="website">' . "\n";
    
    if ($url) {
        $og_meta .= '<meta property="og:url" content="' . htmlspecialchars($url) . '">' . "\n";
    }
    
    if ($image) {
        $og_meta .= '<meta property="og:image" content="' . htmlspecialchars($image) . '">' . "\n";
    }
    
    return $og_meta;
}

/**
 * Vérifier si l'utilisateur est sur mobile
 */
function is_mobile() {
    return preg_match('/Mobile|Android|iPhone|iPad/', $_SERVER['HTTP_USER_AGENT'] ?? '');
}

/**
 * Compresser le HTML
 */
function compress_html($html) {
    // Supprimer les commentaires HTML
    $html = preg_replace('/<!--(?!<!)[^\[>].*?-->/', '', $html);
    
    // Supprimer les espaces multiples
    $html = preg_replace('/\s+/', ' ', $html);
    
    // Supprimer les espaces autour des balises
    $html = preg_replace('/>\s+</', '><', $html);
    
    return trim($html);
}

/**
 * Générer un breadcrumb
 */
function generate_breadcrumb($current_page = '') {
    $breadcrumb = '<nav aria-label="breadcrumb" style="margin: 1rem 0;">';
    $breadcrumb .= '<ol style="display: flex; list-style: none; padding: 0; margin: 0; gap: 0.5rem; align-items: center;">';
    $breadcrumb .= '<li><a href="' . SITE_URL . '" style="color: var(--color-primary); text-decoration: none;">Accueil</a></li>';
    
    if ($current_page) {
        $breadcrumb .= '<li style="color: var(--color-gray);"><i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i></li>';
        $breadcrumb .= '<li style="color: var(--color-gray);">' . htmlspecialchars($current_page) . '</li>';
    }
    
    $breadcrumb .= '</ol>';
    $breadcrumb .= '</nav>';
    
    return $breadcrumb;
}
?>
