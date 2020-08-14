<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; 

 if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'footer_2' ) && is_main_query() ) {
		dynamic_sidebar('footer_2');
	}

 if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'footer_3' ) && is_main_query() ) {
		dynamic_sidebar('footer_3');
	}
	
 if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'footer_4' ) && is_main_query() ) {
		dynamic_sidebar('footer_4');
	}
	
 if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'footer_copyright' ) && is_main_query() ) {
		dynamic_sidebar('footer_copyright');
	}
	
 if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'pre_footer' ) && is_main_query() ) {
		dynamic_sidebar('pre_footer');
	}	