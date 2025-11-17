<?php
// Configuration générale du site DECORATEP
define('SITE_NAME', 'DECORATEP');
define('SITE_DESCRIPTION', 'Spécialiste en publicité et décoration publicitaire - Affiches, enseignes lumineuses, totems, panneaux');
define('SITE_URL', 'http://localhost/decoratep');
define('SITE_EMAIL', 'contact@decoratep.com');
define('SITE_PHONE', '+225 21 35 42 18');
define('SITE_ADDRESS', 'Bd du Gabon, près de l\'Hotel Hibiscus<br>Marcory - 11 BP 1577 Abidjan 11<br>Abidjan - Côte d\'Ivoire');

// Configuration de la base de données (si nécessaire plus tard)
define('DB_HOST', 'localhost');
define('DB_NAME', 'decoratep');
define('DB_USER', 'root');
define('DB_PASS', '');

// Charte graphique DECORATEP
define('COLOR_PRIMARY', '#00B4D8');    // Bleu DECORATEP
define('COLOR_DARK', '#0077B6');       // Bleu foncé
define('COLOR_LIGHT', '#90E0EF');      // Bleu clair
define('COLOR_ACCENT', '#FF6B35');     // Orange

// Configuration des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Démarrage de la session
session_start();
?>
