<div class="container-layout-big">
    <div class="container-role-team container-role-team-presentation">
        <?php $count = 5; ?>
        <?php $num = 1; ?>
        <?php foreach( range(1,$count) as $item){ ?>
            <?php $num++; ?>

            <div class="container-role container-role-alternative">
                <div class="role-photo">
                    <img decoding="async" loading="lazy" class="lazyload role-photo-item" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/fanny.jpg">
                </div>
                <div class="role-infos">
                    <div class="role-name-title">
                        <div class="role-name">
                            <h4>Fanny Trebaol</h4>
                            <p class="bleu">Animatrice jeunesse</p>
                            <a href="mailto:adresse@email.fr" target="_blank" class="bleu">adresse@email.fr</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
