<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package upcase
 */

get_header();
?>

<div class="site-content bott">
	<div class="mnmd-layout-split mnmd-block mnmd-block--fullwidth">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
						<center>
							<!-- Google ads -->
						</center>
						<br>
						<div class="mnmd-block">
							<div class="block-heading">
								<h4 class="block-heading__title">
									<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
								</h4>
							</div>
							<div class="posts-listing">
								<div class="row row--space-between">
									

									<?php if ( have_posts() ) : ?>

										

										<?php
										
											
											get_template_part( 'template-parts/post-layouts/layout-category', get_post_type() );
									

										wp_pagenavi(); 

									else :

										get_template_part( 'template-parts/content', 'none' );

									endif;
									?>

									
								</div>
								
							
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>	
</div>





<?php

get_footer();
