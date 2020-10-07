<?php
/**
 * Template name: About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package upcase
 */

?>

<?php 
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="about">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							

						endwhile; // End of the loop.


						?>
					</div>
					</div>
					
				</div>
			</div>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();