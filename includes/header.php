<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - ' . SITE_DESCRIPTION; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : SITE_DESCRIPTION; ?>">
    <meta name="keywords" content="publicité, enseignes, affiches, totems, panneaux, impression, bâche, décoration publicitaire">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/responsive.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="<?php echo SITE_URL; ?>" class="logo">
                        <img src="<?php echo SITE_URL; ?>/images/logo.jpg" alt="DECORATEP Plus" style="height: 50px; width: auto;">
                    </a>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL; ?>" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                <i class="fas fa-home"></i> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL; ?>/services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                                <i class="fas fa-tools"></i> Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL; ?>/realisations.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'realisations.php' ? 'active' : ''; ?>">
                                <i class="fas fa-images"></i> Réalisations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL; ?>/about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                                <i class="fas fa-info-circle"></i> À propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo SITE_URL; ?>/contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                                <i class="fas fa-envelope"></i> Contact
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="nav-toggle" id="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content<?php echo isset($page_class) ? ' ' . $page_class : ''; ?>">
