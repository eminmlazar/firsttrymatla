<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EasyMag
 */
?>
	<footer class="dt-footer">
		<?php if ( is_active_sidebar( 'dt-footer1' ) || is_active_sidebar( 'dt-footer2' ) || is_active_sidebar( 'dt-footer3' ) || is_active_sidebar( 'dt-footer4' ) ) : ?>
		<div class="container">
			<div class="dt-footer-cont">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar( 'dt-footer1' ); ?>
					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar( 'dt-footer2' ); ?>
					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar( 'dt-footer3' ); ?>
					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar( 'dt-footer4' ); ?>
					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->
				</div><!-- .row -->
			</div><!-- .dt-footer-cont -->
		</div><!-- .container -->
		<?php endif; ?>
		<div class="dt-footer-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="dt-copyright">
                            <?php
                            $copyright = wp_kses_post( get_theme_mod( 'footer_copyright' ) );
                            if ( ! $copyright ) {
                                $copyright = sprintf( esc_html__( 'Copyright &copy; %1$s %2$s. All rights reserved.', 'easymag' ), date( 'Y' ), '<a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ) .'">'.get_bloginfo( 'name', 'display' ).'</a>' );
                            }
                            echo $copyright;
                            ?>
						</div><!-- .dt-copyright -->
					</div><!-- .col-lg-6 .col-md-6 -->
					<div class="col-lg-6 col-md-6">
						<div class="dt-footer-designer">
                            <?php
                            $credit = wp_kses_post( get_theme_mod( 'footer_credit' ) );
                            if ( ! $credit ) {
                                $credit = sprintf( esc_html__( 'Designed by %1$s', 'easymag' ), '<a href="'. esc_url( 'https://www.famethemes.com/').'" target="_blank" rel="designer">'.esc_html__( 'FameThemes', 'easymag') .'</a>' );
                            }
                            echo $credit;
                            ?>
						</div><!-- .dt-footer-designer -->
					</div><!-- .col-lg-6 .col-md-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .dt-footer-bar -->
	</footer><!-- .dt-footer -->
	<a id="back-to-top" class="transition35"><i class="fa fa-angle-up"></i></a><!-- #back-to-top -->
	</div><!-- .dt-body-wrap -->
<?php wp_footer(); ?>
</body>
</html>
