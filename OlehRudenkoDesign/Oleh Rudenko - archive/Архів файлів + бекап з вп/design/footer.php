<footer class="footer page-footer">
			<div class="container">
				<div class="footer__container">
					<h4 class="footer__title sub-title"><?php pll_e("CONTATTI"); ?></h4>
					<div class="footer__social">
						<div class="footer__social-box _anim-items _anim-no-hide">
							<a class="footer__social--link _anim-show" href="<?php the_field('telegram'); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/social/telegram.svg" alt="logo telegram">
							</a>
							<a class="footer__social--link _anim-show" href="<?php the_field('facebook'); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/social/facebook.svg" alt="logo facebook">
							</a>
							<a class="footer__social--link _anim-show" href="<?php the_field('instagram'); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/social/instagram.svg" alt="logo instagram">
							</a>
							<a class="footer__social--link _anim-show" href="tel:<?php the_field('whatsapp'); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/social/whatsapp.svg" alt="logo whatsapp">
							</a>
						</div>
						<div class="footer__social-items _anim-items _anim-no-hide"> 
							<button class="footer__social-items--item _anim-show"></button>
							<button class="footer__social-items--item _anim-show"></button>
						</div>
					</div>
					<div class="footer__content">
						<div class="footer__logo _anim-items _anim-no-hide" href="#">
                     <?php the_custom_logo(); ?>
						</div>
						<p class="footer__text">
							<?php pll_e("Tutti i diritti riservati © 2022"); ?>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<div id="popup" class="popup">
			<div class="popup__body">
				<div class="popup__content">

					<div id="designer">
						<?php echo do_shortcode(the_field('form_top')); ?>
				</div>		
				</div>
			</div>
		</div>

		<div id="popup_2" class="popup">
			<div class="popup__body popup__body-next">
				<div class="popup__content popup__content-next">
					<div class="close-popup popup__content-closed"></div>
					<div class="popup__img">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/checked.png" alt="checked">
					</div>
					<div class="popup__text">
						Thank you!
					</div>
				</div>
			</div>
		</div>

		
	</div>

   <?php wp_footer(); ?>
   
</body>

</html>