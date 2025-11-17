    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="<?php echo SITE_URL; ?>/images/logo.jpg" alt="DECORATEP Plus" style="height: 40px; width: auto; margin-bottom: 1rem;">
                    </div>
                    <p class="footer-description">
                        Spécialiste en publicité et décoration publicitaire depuis plus de 20 ans. 
                        Nous disposons d'un site de production doté d'équipements modernes.
                    </p>
                </div>
                
                <div class="footer-section">
                    <h3>Nos Services</h3>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#affiches">Affiches publicitaires</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#enseignes">Enseignes lumineuses</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#totems">Totems et panneaux</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/services.php#impression">Impression sur bâche</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contact</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> <?php echo SITE_ADDRESS; ?></p>
                        <p><i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?></p>
                        <p><i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?></p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Horaires</h3>
                    <div class="hours">
                        <p><strong>Lundi - Vendredi:</strong><br>8h00 - 18h00</p>
                        <p><strong>Samedi:</strong><br>9h00 - 12h00</p>
                        <p><strong>Dimanche:</strong><br>Fermé</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Tous droits réservés.</p>
                    <div class="footer-links">
                        <a href="<?php echo SITE_URL; ?>/mentions-legales.php">Mentions légales</a>
                        <a href="<?php echo SITE_URL; ?>/politique-confidentialite.php">Politique de confidentialité</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>
