<!-- main&#45;container -->
    <footer>
        <div class="footer-logo">
            <?php get_template_part( 'template-parts/logo' );?>
        </div>
        <div class="footer-infopratiques">
            <h5>Info Pratiques</h5>
            <a href="#">Adhésion</a>
            <a href="#">Inscription</a>
            <a href="#">Horaires et Accès</a>
        </div>
        <div class="footer-actions">
            <h5>Nos actions</h5>
            <a href="#" target="_blank">Enfane / Jeunesse</a>
        </div>
        <div class="footer-contacter">
            <h5>Nous Contacter</h5>
            <p>5 Rue de Suède, <br>35000 Rennes</p>
            <a href="tel:0033299516170" target="_blank">+33 2 99 51 61 70</a>
        </div>
        <div class="footer-suivez">
            <h5>Suivez Nous</h5>
            <a href="#" target="_blank"><span>Facebook</span></a>
            <a href="#" target="_blank"><span>Instagram</span></a>
        </div>
        <div class="footer-partenaires">
            <p class="smaller">Nos Partenaires</p>
            <img decoding="async" loading="lazy" class="lazyload " src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/pdf-download.svg">
            <img decoding="async" loading="lazy" class="lazyload " src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/pdf-download.svg">
            <img decoding="async" loading="lazy" class="lazyload " src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/pdf-download.svg">
        </div>
        <a class="footer-mentions" href="#"><span class="smaller">Mentions Légales</span></a>
    </footer>
</div>
    </div>



<?php
    get_template_part( 'template-parts/back-to-top' );
?>

<?php wp_footer(); ?>
</body>
</html>
