<?php
$page_title = 'Devenir Bénévole'; // Replace 'Your Page Title' with the title of the page you want to retrieve
$args = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => 1, // You can adjust this to match your needs
    'title' => $page_title, // Use the page title in the query
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        // Get the URL of the page
        $page_url = get_permalink();
    }
    wp_reset_postdata(); // Restore the global post data
} else {
    echo 'Page not found';
}

?>
<div class="container-devenir-benevole">
    <div class="devenir-benevole-infos">
        <h2>Rejoignez la MJC <br class="titleLine">en tant que bénévole</h2>
        <p>Vous êtes curieux, vous avez envie de faire bouger les choses, vous avez des idées et du temps à partager… Vous souhaitez devenir un acteur à part entière de la vie de la MJC, rejoignez-nous !</p>
    </div>
    <a href="<?php echo $page_url; ?>" class="button button-s button-jaune"><span>Envoyer votre demande</span></a>
</div>
