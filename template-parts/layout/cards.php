<div class="container-layout-big layout-bg-bleu">
    <div class="container-divider"></div>
    <div class="container-title-styled">
        <h1 class="big big-typography blanc">inscription et adhésion</h1>
        <div class="big-line-title"></div>
    </div>
    <div class="small-container-divider"></div>
    <div class="small-container-divider"></div>
    <div class="container-layout-cards">

        <?php $count = 3; ?>
        <?php $num = 1; ?>
        <?php foreach( range(1,$count) as $item){ ?>
            <?php $num++; ?>
            <div class="layout-card-item">
                <div class="layout-card-item-photo">
    <img decoding="async" loading="lazy" class="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/6.jpg">
                </div>
                <div class="layout-card-item-info layout-bg-blanc">
                    <div class="card-item-title">
                        <h3 class="bleu">Inscription et
    Adhésion</h3>
                    </div>
                    <div class="card-item-info">
                        <p class="bleu">Elit minima enim laboriosam veniam magni Error harum consequuntur at nam veniam Cum nesciunt perferendis.</p>
                    </div>
                    <a class="card-item-button button button-jaune button-m nm" href="#"><span>s'inscrire</span></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="container-divider"></div>
    <div class="container-divider"></div>
</div>
