<?php
/*
 * Template Name: Contact
 */
?>
<?php get_header(); ?>

<div class="container-divider"></div>
<div class="container-layout-big">
<?php
    get_template_part( 'template-parts/contact' );
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
