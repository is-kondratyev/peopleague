	<!-- begin b-footer -->
	<footer class="b-footer">
		<div class="container d-flex justify-content-between align-items-start">
			<div class="b-footer__left">
				<div class="b-title">Контакты</div>
				<a href="tel:+7911958666" class="b-footer__item">
					<i class="icon-i-phone"></i>
					<b>8 (911) 958-66-64</b>
				</a>
				<a href="mailto:info@peopleague.ru" class="b-footer__item">
					<i class="icon-i-mail"></i>
					info@peopleague.ru
				</a>
				<div class="b-footer__item">
					<i class="icon-i-pl"></i>
					г. Санкт-Петерубрг, п. Новосергиевка<br/>
					Дельтовский проезд, 5616
				</div>
				<div class="map-xs"></div>
				<div class="b-footer__left-bottom">
					<div class="b-footer__social">
						<span>Мы в соцетях</span>
						<ul>
							<!--<li><a href=""><i class="icon-i-inst"></i></a></li>-->
							<!-- <li><a target="blank" href=""><i class="icon-i-fc"></i></a></li> -->
							<li><a target="blank" href="https://t.me/peopleague"><i class="icon-i-telegram"></i></a></li>
							<li><a target="blank" href="https://vk.com/league_people"><i class="icon-i-vk"></i></a></li>
						</ul>
					</div>
					<div class="b-footer__dev">
						<span>Разработанно</span>
						<a href="https://kruw.ru/"><img src="<?= get_template_directory_uri() ?>/img/kruw.svg" alt="создание хороших сайтов"></a>
					</div>
				</div>
        <div class="row">
          <div class="col">
            <a href="/personal" class="b-footer__personal">Согласие на обработку персональных данных</a>
          </div>
        </div>
			</div>
			<div class="b-footer__right">
				<div id="map"></div>
			</div>
		</div>
	</footer>
	<!-- end b-footer -->
</div>

<!-- Modal -->
<div class="modal-overlay" data-modal-id="1">
	<div class="b-modal">
		<div class="b-modal__top">
			<b>хочу подать заявку и вступить в клуб</b>
			<span>Есть вопрос или бизнес предложение напишите нам.</span>
		</div>
		<div class="b-modal__form">
		  <?php echo do_shortcode('[contact-form-7 id="146" title="Заявка - модальная"]'); ?>
		</div>
	</div>
</div>

<div id="single-video" class="fancybox-video">
	<video controls width="100%" height="auto">
		<source src="<?= get_template_directory_uri() ?>/img/stiln.mp4" type="video/mp4">
	</video>
</div>

<script src="<?= get_template_directory_uri() ?>/js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv9-H5GwlZA4EkUorU0gGHrq0H4pFMPS4"></script>
<script src="<?= get_template_directory_uri() ?>/js/swiper.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.fancybox.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/script.js"></script>

<?php wp_footer() ?>