<?php

function enqueue_styles() {
  wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper.min.css');
  wp_enqueue_style( 'icomoon-css', get_template_directory_uri() . '/lib/icomoon/style.css');
  wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
  wp_enqueue_style( 'style-main', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
//  wp_enqueue_script( 'scripts-main', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/*** Включаем поддержку миниатюр */
// add_theme_support( 'post-thumbnails' );

/*** Отключить версионность файлов */
// function vc_remove_wp_ver_css_js( $src ) {
//     if ( strpos( $src, 'ver=' ) )
//         $src = remove_query_arg( 'ver', $src );
//     return $src;
// }
// add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
// add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

//jY9a56ELZ4bgZbU

/*** Убираем CF7 лишнюю разметку */
add_filter('wpcf7_autop_or_not', '__return_false');

/*** Убираем CF7 span обёртку для элементов */
// add_filter('wpcf7_form_elements', function( $content ) {
//   $dom = new DOMDocument();
//   $dom->preserveWhiteSpace = false;
//   $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

//   $xpath = new DomXPath($dom);
//   $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );

//   foreach ( $spans as $span ) :
//     $children = $span->firstChild;
//     $span->parentNode->replaceChild( $children, $span );
//   endforeach;

//   return $dom->saveHTML();
// });