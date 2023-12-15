<?php
/*
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<div class="container-divider"></div>
<div class="container-divider"></div>
<div class="container-divider"></div>
<div class="container-divider"></div>
<?php get_template_part( 'template-parts/layout/main-sidebar' );?>
<div class="container-divider"></div>
<?php get_template_part( 'template-parts/carousel-template' );?>
<div class="container-divider"></div>
<div class="container-layout-big container-flex flex-center">
<?php
    get_template_part( 'template-parts/devenir-benevole' );
?>
</div>
<div class="container-divider"></div>
<?php
    get_template_part( 'template-parts/newsletter' );
?>
<div class="container-divider"></div>
<div class="container-divider"></div>
<?php get_footer(); ?>
