<div class="container-role-team">

        <?php $count = 4; ?>
        <?php $num = 1; ?>
        <?php foreach( range(1,$count) as $item){ ?>
            <?php $num++; ?>

            <div class="container-role">
                    <img decoding="async" loading="lazy" class="lazyload role-photo-item" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/anais.jpg">
                <div class="role-infos">
                    <div class="role-name-title">
                        <div class="role-name"><h4>Fanny Trebaol</h4>
                        <p class="bleu">Animatrice jeunesse</p></div>
                    </div>
                </div>
            </div>
        <?php } ?>
</div>
