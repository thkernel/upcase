<?php
/**
 * Template name: Training page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package upcase
 */

?>

<?php 
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
									<span class="first-word">TRAINING </span> 
								</h4>
							</div>
							<div class="posts-listing">
								<div class="row row--space-between">
									<?php
									query_posts( array ( 'category_name' => 'training', 'posts_per_page' => 12 ) );

									?>

									<?php if ( have_posts() ) : ?>

										

										<?php
										
											
											get_template_part( 'template-parts/custom-layouts/training-layout', get_post_type() );
									

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
