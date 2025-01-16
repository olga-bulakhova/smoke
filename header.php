<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>

	<div class="container default-colors">
		<header class="header custom-background">
			<div class="wrapper">
				<div class="header-logo color-primary">
					<?php the_custom_logo(); ?>
				</div>

				<div class="heder-action">
					<?php
					wp_nav_menu([
						'theme_location'  => 'header',
						'container'       => false,
						'menu_class'      => 'navbar-nav',
						'menu_id'         => false,
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					]);
					?>
				</div>

				<div class="header-burger toggle-menu"></div>
			</div>
		</header>

		<div class="mobile-menu hidden">
			<div class="mobile-menu-content">
				<div class="mobile-menu-header">
					<div class="header-logo">
						<?php the_custom_logo(); ?>
					</div>

					<div>
						<div class="mobile-menu-close toggle-menu"></div>
					</div>
				</div>

				<div class="mobile-menu-body">
					<?php
					wp_nav_menu([
						'theme_location'  => 'header',
						'container'       => false,
						'menu_class'      => 'navbar-nav',
						'menu_id'         => false,
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					]);
					?>
				</div>
			</div>
		</div>

		<div id="content" class="site-content">