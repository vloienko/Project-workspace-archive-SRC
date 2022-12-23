<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

		<main class="main">
			<section class="designer page-designer">
				<div class="container">
					<div class="designer__body">
						<div class="designer__content">
							<h1 class="designer__title _anim-items _anim-no-hide">
                        <?php the_field('title'); ?>
                     </h1>
							<h2 class="designer__position _anim-items _anim-no-hide">
                        <?php the_field('sub-title'); ?>
                     </h2>
							<p class="designer__text _anim-items _anim-no-hide">
                        <?php the_field('description'); ?>
							</p>
							<a class="designer__btn popup-link _anim-items _anim-no-hide" href="#popup"><?php pll_e("CONTATTAMI"); ?></a>
						</div>
						<div class="designer__box">
							<div class="designer__img">
								<img class="designer__photo" src=" <?php the_field('photo-designer'); ?>" alt="Photo">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="services page-services">
				<div class="container">
					<div class="services__body">
						<h4 class="services__title sub-title"><?php pll_e("MY SERVICES"); ?></h4>
						<div class="services__skills _anim-items _anim-no-hide">
							<div class="skills _anim-show">
								<div class="skills__box">
									<img class="skills__box-img" src="<?php bloginfo('template_url'); ?>/assets/img/services/phone.svg" alt="phone logo">
									<p class="skills__box-title">UI & UX Design</p>
								</div>
								<p class="skills__text">
                           <?php the_field('uiuxdesign'); ?>
								</p>
							</div>
							<div class="skills skills__order _anim-show">
								<div class="skills__box">
									<img class="skills__box-img" src="<?php bloginfo('template_url'); ?>/assets/img/services/laptop.svg" alt="laptop logo">
									<p class="skills__box-title">Graphic Design</p>
								</div>
								<p class="skills__text">
                           <?php the_field('graphicdesign'); ?>
								</p>
							</div>
							<div class="skills _anim-show">
								<div class="skills__box">
									<img class="skills__box-img" src="<?php bloginfo('template_url'); ?>/assets/img/services/window.svg" alt="window logo">
									<p class="skills__box-title">Web Design</p>
								</div>
								<p class="skills__text">
                           <?php the_field('webdesign'); ?>
								</p>
							</div>
						</div>
						<div class="services__content _anim-items _anim-no-hide">
							<div class="services__box _anim-show">
								<div class="services__box-square">
									<img class="services__box-img" src="<?php bloginfo('template_url'); ?>/assets/img/services/people.svg" alt="people logo">
								</div>
								<p class="services__box-text">
                           <?php the_field('first-square'); ?>
								</p>
							</div>
							<div class="services__box _anim-show">
								<div class="services__box-square">
									<img class="services__box-img" src="<?php bloginfo('template_url'); ?>/assets/img/services/squares.svg" alt="squares logo">
								</div>
								<p class="services__box-text">
                           <?php the_field('second-square'); ?>
								</p>
							</div>
							<div class="services__box _anim-show">
								<div class="services__box-square">
									<img class="services__box-img" src="<?php bloginfo('template_url'); ?>/assets/img/services/time.svg" alt="time logo">
								</div>
								<p class="services__box-text">
                           <?php the_field('third-square'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="portfolio page-portfolio">
				<div class="container">
					<h4 class="portfolio__title sub-title"><?php pll_e("PORTFOLIO"); ?></h4>
					<div class="portfolio__body">
						<nav class="filter__menu _anim-items _anim-no-hide">
                     <button data-f="all" class="filter__btn all">ALL</button>
                     <?php if( have_rows('portfolio-menu') ): ?>
                     <?php while( have_rows('portfolio-menu') ): the_row(); ?>
							<button data-f="<?php the_sub_field('class-category'); ?>" class="filter__btn <?php the_sub_field('class-category'); ?>"><?php the_sub_field('button-category'); ?></button>
                     <?php endwhile; ?>
                     <?php endif; ?>
						</nav>

						<div class="filter__list swiper-container _anim-items _anim-no-hide" data-mobile="false">
							<div class="filter__item swiper-wrapper ">
                        <?php if( have_rows('portfolio-projects') ): ?>
                        <?php while( have_rows('portfolio-projects') ): the_row(); ?>
                        <div class="filter__box swiper-slide <?php the_sub_field('category-project'); ?> _anim-show-port" href="#">
									<a class="filter__link" href="<?php the_sub_field('portfolio-projects-link'); ?>">
										<img src="<?php the_sub_field('portfolio-projects-img'); ?>" alt="images">
										<p><?php the_sub_field('portfolio-projects-name'); ?></p>
									</a>
								</div>
                        <?php endwhile; ?>
                        <?php endif; ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
				<script>
					const filterBox = document.querySelectorAll('.filter__box');

					document.querySelector('.filter__menu').addEventListener('click', event => {
						if (event.target.tagName !== 'BUTTON') return false;

						let filterClass = event.target.dataset['f'];

						filterBox.forEach(elem => {
							elem.classList.remove('hide');
							if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
								elem.classList.add('hide');
							}
						});

					});
				</script>
			</section>

			<section class="reviews page-reviews">
				<div class="container">
					<h4 class="reviews__title sub-title"><?php pll_e("RECENSIONI"); ?></h4>
					<div class="reviews__body">
						<div class="reviews__form">
							<div id="formReviews" class="form__body _anim-items _anim-no-hide">
                        		<?php echo do_shortcode(the_field('form_botom')); ?>
							</div>
						</div>
						<div class="clients-reviews swiper-container _anim-items _anim-no-hide">

							<div class="clients-reviews__block swiper-wrapper">
                        <?php if( have_rows('clients-reviews') ): ?>
                        <?php while( have_rows('clients-reviews') ): the_row(); ?>
                        <div class="clients-reviews__box swiper-slide" href="#">

                           <div class="clients-reviews__content clients-reviews__content--first _anim-show">
                              <img class="clients-reviews__content-img" src="<?php the_sub_field('clients-photo_1'); ?>" alt="photo">
                              <div class="clients-reviews__content-box">
                                 <div class="clients-reviews__content-box--left">
                                    <span><?php pll_e("Recensione da:"); ?></span>
                                    <p><?php the_sub_field('clients-name_1'); ?></p>
                                    <a href="<?php the_sub_field('clients-link_1'); ?>"><?php the_sub_field('clients-link_1'); ?></a>
                                 </div>
                                 <div class="clients-reviews__content-box--right">
                                    <p><?php the_sub_field('clients-text_1'); ?></p>
                                 </div>
                              </div>
                           </div>
                           <div class="clients-reviews__content clients-reviews__content--second _anim-show">
                              <img class="clients-reviews__content-img" src="<?php the_sub_field('clients-photo_2'); ?>" alt="photo">
                              <div class="clients-reviews__content-box">
                                 <div class="clients-reviews__content-box--left">
                                    <span><?php pll_e("Recensione da:"); ?></span>
                                    <p><?php the_sub_field('clients-name_2'); ?></p>
                                    <a href="<?php the_sub_field('clients-link_2'); ?>"><?php the_sub_field('clients-link_2'); ?></a>
                                 </div>
                                 <div class="clients-reviews__content-box--right">
                                    <p><?php the_sub_field('clients-text_2'); ?></p>
                                 </div>
                              </div>
                           </div>
                           <div class="clients-reviews__content clients-reviews__content--third _anim-show">
                              <img class="clients-reviews__content-img" src="<?php the_sub_field('clients-photo_3'); ?>" alt="photo">
                              <div class="clients-reviews__content-box">
                                 <div class="clients-reviews__content-box--left">
                                    <span><?php pll_e("Recensione da:"); ?></span>
                                    <p><?php the_sub_field('clients-name_3'); ?></p>
                                    <a href="<?php the_sub_field('clients-link_3'); ?>"><?php the_sub_field('clients-link_3'); ?></a>
                                 </div>
                                 <div class="clients-reviews__content-box--right">
                                    <p><?php the_sub_field('clients-text_3'); ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
							</div>
							<div class="swiper-pagination"></div>

						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>