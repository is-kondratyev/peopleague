<?php 
  //$theme_path = get_template_directory_uri();
  $social_tg = get_option('social_tg');
  $social_vk = get_option('social_vk');
?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<title>ЛИГА УСПЕШНЫХ ЛЮДЕЙ</title>
	<meta property="og:title" content="ЛИГА УСПЕШНЫХ ЛЮДЕЙ"/>
	<meta property="og:description" content="ЛИГА УСПЕШНЫХ ЛЮДЕЙ в Санкт-Петербурге."/>
	<meta name="title" content="ЛИГА УСПЕШНЫХ ЛЮДЕЙ"/>
	<meta name="description" content="ЛИГА УСПЕШНЫХ ЛЮДЕЙ в Санкт-Петербурге."/>
	<!-- <link href=fav.svg rel=”shortcut icon” type=”image/x-icon”> -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/favicon.svg">
	<link href="<?= get_template_directory_uri() ?>/css/bootstrap-grid.css" rel="stylesheet">

	<?php wp_head() ?>
	
</head>
<body <?php body_class(); ?>>
<!-- 11 -->

  <div class="b-container">
    <!-- begin b-header -->
    <header class="b-header">
      <div class="container container_2 d-flex justify-content-between align-items-center">
        <a href="" class="b-logo">
          <img src="<?= get_template_directory_uri() ?>/img/logo.svg" alt="">
        </a>
        <div class="b-header__right">
          <div class="b-header__right-wrap">
            <button class="pink-btn ripple modal-link" data-modal-id="1">ХОЧУ В КЛУБ</button>
          </div>
          <button class="btn-nav">
            <span class="btn-nav__cirlce circle_1"></span>
            <span class="btn-nav__cirlce circle_2"></span>
            <span class="btn-nav__cirlce circle_3"></span>
          </button>
        </div>
      </div>
    </header>

    <div class="nav-container">
      <div class="container container_2">
        <div class="b-nav">
          <ul class="nav-list">
            <li><a href="#info">О лиге </a></li>
            <li><a href="#principles">Принципы лиги</a></li>
            <!-- <li><a href="">Наши мероприятия</a></li> -->
            <li><a href="">Как вступить</a></li>
          </ul>
          <div class="b-social">
            <div class="b-social__title">Мы в социальных сетях</div>
            <ul>
            <?php
              if ($social_vk != null) { ?>
              <li><a target="blank" href="<?= $social_vk ?>2"><i class="icon-i-vk"></i></a></li>
            <?php 
              }
              if ($social_tg != null) { ?>
              <li><a target="blank" href="<?= $social_tg ?>3"><i class="icon-i-telegram"></i></a></li>
            <?php 
              } 
            ?>
              <!--<li><a href=""><i class="icon-i-inst"></i></a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end b-header -->