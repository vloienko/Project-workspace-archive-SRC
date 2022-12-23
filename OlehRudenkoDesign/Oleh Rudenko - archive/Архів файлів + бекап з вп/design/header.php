<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>Головна</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   <?php wp_head(); ?>

</head>

<body>
	<div class="wrapper">
		<header id="header" class="header page-header">
			<div class="container-fluid">
				<div class="header__container">
					<div class="header__logo scroll" data-goto=".page-header" href="#">
                  <?php the_custom_logo(); ?>
					</div>
					<div class="header__menu menu">
						<div class="menu__icon">
							<span></span>
						</div>
						<nav class="menu__body">
							<ul class="menu__list">
								<li><a class="menu__link scroll" data-goto=".page-designer" href="#"><?php pll_e("About me"); ?></a></li>
								<li><a class="menu__link scroll" data-goto=".page-services" href="#"><?php pll_e("Services"); ?></a></li>
								<li><a class="menu__link scroll" data-goto=".page-portfolio" href="#"><?php pll_e("Portfolio"); ?></a></li>
								<li><a class="menu__link scroll" data-goto=".page-reviews" href="#"><?php pll_e("Reviews"); ?></a></li>
								<li><a class="menu__link scroll" data-goto=".page-footer" href="#"><?php pll_e("Contacts"); ?></a></li>
							</ul>
						</nav>
					</div>
               <?php
               $current_lang =  pll_current_language();
               ?>
					<div class="header__lang lang">
						<button class="lang__current">
                     <?php pll_the_languages(array('show_flags'=> 1, 'show_names' => 0)); ?>
						</button>
						<ul class="lang__dropdown">
                     <?php pll_the_languages(array('hide_current'=>1, 'show_names' => 0, 'show_flags'=> 1)); ?>
						</ul>
					</div>

				</div>
			</div>
		</header>