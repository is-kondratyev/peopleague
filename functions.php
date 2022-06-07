<?php

function enqueue_styles() {
  wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper.min.css');
  wp_enqueue_style( 'icomoon-css', get_template_directory_uri() . '/lib/icomoon/style.css');
  wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
  wp_enqueue_style( 'style-main', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// function enqueue_scripts () {
//  wp_enqueue_script( 'scripts-main', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_scripts');

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

function get_href_phone_number($phone) {
  $phone_href = str_ireplace(['(', ')', '-', ' '], '', $phone);
  if (mb_substr($phone_href, 0, 1) == '8') $phone_href = '+7' . mb_substr($phone_href, 1);  
  return $phone_href;
}


/**
* Блоки для ввода данных в настройках темы
*/
function peopleague_customize_register( $wp_customize ) {
  /* Добавляем секцию в настройки темы */
  $wp_customize->add_section(
    'social_contacts',
    array(
      'title' => 'Соцсети',
      'capability' => 'edit_theme_options',
      'description' => "Соцсети для вывода на сайте"
    )
  );
    /* Добавляем поле соцсети в секцию */
    $wp_customize->add_setting(
      'social_tg',
      array(
        'default' => '',
        'type' => 'option'
      )
    );
      $wp_customize->add_control(
        'social_tg_field',
        array(
          'type' => 'text',
          'label' => "Телеграм",
          'section' => 'social_contacts',
          'settings' => 'social_tg'
        )
      );
    /* Добавляем поле соцсети в секцию */
    $wp_customize->add_setting(
      'social_vk',
      array(
        'default' => '',
        'type' => 'option'
      )
    );
      $wp_customize->add_control(
        'social_vk_field',
        array(
          'type' => 'text',
          'label' => "ВКонтакте",
          'section' => 'social_contacts',
          'settings' => 'social_vk'
        )
      );
  /* Добавляем секцию в настройки темы */
  $wp_customize->add_section(
    'contacts',
    array(
      'title' => 'Контакты',
      'capability' => 'edit_theme_options',
      'description' => "Контакты"
    )
  );    
    $wp_customize->add_setting(
      'contacts_phone',
      array(
        'default' => '',
        'type' => 'option'
      )
    );
      $wp_customize->add_control(
        'contacts_phone_field',
        array(
          'type' => 'text',
          'label' => "Номер телефона",
          'section' => 'contacts',
          'settings' => 'contacts_phone',
          'description' => 'Номер телефона в формате 8 (xxx) xxx-xx-xx'
        )
      );
    $wp_customize->add_setting(
      'contacts_email',
      array(
        'default' => '',
        'type' => 'option'
      )
    );
      $wp_customize->add_control(
        'contacts_email_field',
        array(
          'type' => 'text',
          'label' => "E-mail",
          'section' => 'contacts',
          'settings' => 'contacts_email'
        )
      );
    $wp_customize->add_setting(
      'contacts_address',
      array(
        'default' => '',
        'type' => 'option'
      )
    );
      $wp_customize->add_control(
        'contacts_address_field',
        array(
          'type' => 'textarea',
          'label' => "Адрес",
          'section' => 'contacts',
          'settings' => 'contacts_address'
        )
      );
  /* Добавляем секцию в настройки темы */
  $wp_customize->add_section(
    'access',
    array(
      'title' => 'ID, коды',
      'capability' => 'edit_theme_options',
      // 'description' => "Контакты"
    )
  );    
    $wp_customize->add_setting(
      'access_gmaps',
      array(
        'default' => '',
        'type' => 'option'
      )
    );
      $wp_customize->add_control(
        'access_gmaps_field',
        array(
          'type' => 'text',
          'label' => "Google maps - значение key",
          'section' => 'access',
          'settings' => 'access_gmaps',
          'description' => 'https://maps.googleapis.com/maps/api/js?key='
        )
      );
}
add_action( 'customize_register', 'peopleague_customize_register' );
/*** /1 */