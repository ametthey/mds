<div id="container-programmes">
    <div class="container-programmes-wrapper">
        <div class="container-programmes-title">
            <div class="container-title-styled">
                <h1 class="big blanc">les différents programmes</h1>
                <div class="small-line-title"></div>
            </div>
        </div>

        <div class="container-divider"></div>

        <?php $count = 4; ?>
        <?php $num = 0; ?>
        <?php foreach( range(1,$count) as $item){ ?>
            <?php $num++; ?>
    <div class="container-programmes-items" id="container-programmes-items-<?php echo $num; ?>">
                    <div class="container-programmes-item">
                        <div class="container-programmes-photo">
                        <img decoding="async" loading="lazy" class="lazyload programmes-photo-item" src="http://mjccustom.yo/wp-content/uploads/3.jpg">

                            <div class="container-programmes-line-bottom"></div>
                        </div>

                        <div class="container-programmes-infos">
                            <div class="container-programmes-item-categorie"><span>Secteur jeunes adultes</span></div>
                            <div class="container-programmes-item-titre"><h3><a href="#" target="_blank">VOYAGE À PARIS AVEC LES FILLES DES DIX COMMANDEMENTS</a></h3></div>
                            <div class="container-programmes-item-texte">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo tristique diam, quis varius nisl. Sed semper elementum neque in mollis. Nunc accumsan commodo congue.
        </p>
        <p>Sed egestas, ex quis tempus elementum, nibh magna varius enim, ut scelerisque erat dui tempus felis. </p>

                            </div>
                        </div>
                    </div>
                </div>
        <?php } ?>

    </div>
</div>
