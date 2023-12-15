<?php
function my_preload_frontpage_video() {
    if ( is_front_page() ) {
        $video_group = get_field( 'video_de_fond', 'option' ); // Replace 'my_video_group' with the name of your ACF group field
        if ( $video_group ) {
            $video_1_url = $video_group['video_mp4']['url'];
            $video_2_url = $video_group['video_mp4_copier']['url'];
            if ( $video_1_url && $video_2_url ) {
                $preload_1 = '<link rel="preload" href="' . esc_url( $video_1_url ) . '" as="video" />';
                $preload_2 = '<link rel="preload" href="' . esc_url( $video_2_url ) . '" as="video" />';
                echo $preload_1 . $preload_2;
            }
        }
    }
}
// add_action( 'wp_head', 'my_preload_frontpage_video', 1 );

function my_preload_frontpage_fonts() {
    if ( is_front_page() ) {
        $preload_1 = '<link rel="preload" href="https://www.stefanoforlini.com/wp-content/themes/stefanoforlini/dist/assets/fonts/Canela-Thin.woff2" as="font" type="font/woff2" crossorigin>';
        // $preload_2 = '<link rel="preload" href="https://www.stefanoforlini.com/wp-content/themes/stefanoforlini/dist/assets/fonts/Canela-Light.woff2" as="font" type="font/woff2" crossorigin>';
        // $preload_3 = '<link rel="preload" href="https://www.stefanoforlini.com/wp-content/themes/stefanoforlini/dist/assets/fonts/Canela-ThinItalic.woff2" as="font" type="font/woff2" crossorigin>';
        // $preload_4 = '<link rel="preload" href="https://www.stefanoforlini.com/wp-content/themes/stefanoforlini/dist/assets/fonts/Canela-LightItalic.woff2" as="font" type="font/woff2" crossorigin>';
        // $preload_5 = '<link rel="preload" href="https://www.stefanoforlini.com/wp-content/themes/stefanoforlini/dist/assets/fonts/BasisGrotesque-Regular.woff2" as="font" type="font/woff2" crossorigin>';
        echo $preload_1;
            // . $preload_2 . $preload_3 . $preload_4 . $preload_5;
    }
}
// add_action( 'wp_head', 'my_preload_frontpage_fonts', 1 );
