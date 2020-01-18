<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-info">

			<div class="container">
				<div class="footer-blk">
					<div class="rr">
						<span>Copyright © 2020 TodayNews</span>
					</div>
					<div class="footer-menu">
					<?php if ( has_nav_menu( 'footer-menu' ) ) {
						 wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'menu_class'        => 'f-menu',
						) );
					 } ?>
					</div>
				</div>

			</div>

		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
