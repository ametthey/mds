<?php
/*
 * Template Name: Info Pratiques
 */
?>
<?php get_header(); ?>

<!-- <div class="container&#45;divider"></div> -->
<div class="container-layout-big">
<?php
    get_template_part( 'template-parts/info-pratiques' );
?>
</div>
<div class="container-divider"></div>
<div class="container-divider"></div>
</div>
<?php
    get_template_part( 'template-parts/newsletter' );
?>
<div class="container-divider"></div>
<div class="container-layout-big container-flex flex-center">
<?php
    get_template_part( 'template-parts/devenir-benevole' );
?>
</div>
<div class="container-divider"></div>
<?php get_footer(); ?>
