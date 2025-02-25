</div>
<footer class="footer custom-background">
	<div class="wrapper">

		<div class="footer-container">
			<div><?php the_custom_logo(); ?></div>
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
			<div></div>
		</div>


		<div class="footer-copyright">
			<div>© Copyright <?php echo date("Y"); ?></div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>