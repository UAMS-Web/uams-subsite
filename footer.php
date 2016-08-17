<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<div class="footer-helper">
				<?php get_sidebar( 'footer' ); ?>
				</div>


				<div id="et-footer-nav">
					<div class="container">
						<h4>University of Arkansas for Medical Sciences</h4>
						<h3>Connect with Us:</h3>
						<div class="footer-social">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>
				</div>

				<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php $copyyear = date("Y"); ?>
						<p id="footer-info"><?php printf( __( '© '. $copyyear .'  University of Arkansas for Medical Sciences | Little Rock, AR' ) ); ?></p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>