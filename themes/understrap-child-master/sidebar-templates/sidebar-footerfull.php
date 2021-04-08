<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">
	    
 

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">
		    
		    	    
<img src="http://wp-dd.com/insurancequotes/wp-content/uploads/2021/04/Artboard-1-2.png" style="margin-bottom: 57px;" />

			<div class="row">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>
			
			<br />
			
			<span style="color: #FFFFFF; font-size: 15px;">Copyright &copy; 2021 All Rights Reserved</span>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
