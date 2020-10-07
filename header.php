<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package upcase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'upcase' ); ?></a>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
          	<!-- Logo -->
          	
			<div class="navbar-brand">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
						</h1>
					<?php
				else :
					?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</p>
					<?php
				endif;
				?>
		</div><!-- .site-branding -->

            <div class="d-flex ml-auto">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation">
                	<span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="globalNavbar">
             

            	<ul class="navbar-nav mr-auto order-1">
					<div id="site-navigation" class="main-navigation float-right">

					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>

					</div>
            		<!-- 
	                <li class="nav-item">
	                	<a class="nav-link" href="https://themes.getbootstrap.com/official-themes">
	                		Why Our Themes?
	                	</a>
	                </li>
	                <li class="nav-item">
	                	<a class="nav-link" href="https://themes.getbootstrap.com/sell/">
	                		Sell themes
	                	</a>
	                </li>
	            -->
            	</ul>
                <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                    <li class="nav-item">
                     	<a class="btn btn-primary lift" href="<?php echo esc_url( home_url( '/' ) )."contact/"; ?>">
                     		Get in touch <i class="fa fa-envelope d-none d-md-inline ml-3"></i>
                     	</a>
                    </li>
                  	
                </ul>
                <ul class="navbar-nav d-lg-none">
                  <li class="nav-item-divider"></li>
                  <li class="nav-item">
                  	<a class="nav-link" href="http://localhost/auctum2/index.php/contact-us/">Get in touch</a>
                  </li>
                 
                </ul>
            </div>
        </div>
        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
