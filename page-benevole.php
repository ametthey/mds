<?php
/*
 * Template Name: Bénévole
 */
?>
<?php get_header(); ?>
<div class="container-layout-big container-flex flex-center">
<?php
    get_template_part( 'template-parts/formulaire-benevole' );
?>
</div>
<div class="container-divider"></div>
<!-- <div class="container&#45;layout&#45;big"> -->
<?php
    get_template_part( 'template-parts/newsletter' );
?>
<!-- </div> -->
<div class="container-divider"></div>
<div class="container-divider"></div>
<?php get_footer(); ?>
