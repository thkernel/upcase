<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package upcase
 */

get_header();
?>


<main id="main" class="site-main main">

<section class="hero">

	<!-- Old header -->
	<div class="container">
		<div class="row align-items-lg-center">
			<div class="col-lg-6">
				<h1 class="display-4 text-bold">
				<!-- Dynamisez votre communication grâce à notre API SMS. -->
				Let’s make your projects and ideas a success.
				</h1>
				<p class="text-gray-soft text-regular">
					We are a software development and consulting company,
that build and provide custom solutions for all size of companies. We see technology as a tool to create amazing things.			
				</p>
				<a class="btn btn-primary btn-lg mb-5 mb-lg-2 lift" href="<?php echo esc_url( home_url( '/' ) )."contact/"; ?>">Let's talk<i class="fa fa-arrow-right d-none d-md-inline ml-3"></i> </a>
			</div>
			<div class="col-lg-6 img-fluid d-none d-lg-block">
				<img src="wp-content/themes/upcase/images/hero2.png" />
			</div>
		</div>
	</div>

</section>


<!-- Our services -->
<section class="our-services">
	<div class="services-section-title text-center">
		<p>
			<h2 class="--highlight">We provide prowerful solutions for your company.</h2>
		</p>
	</div>
	<div class="container">

		<div class="row">
			<!-- Apps development -->
			<div class="col-md-3">

				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-code" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>App development</h5>
					</div>

					<div class="service-short-describe">
						<p>
							We develop complete solutions for cross-platform applications (Desktop, Mobile and web) using the most robust and proven languages and technologies on the market.
						</p>
					</div>

				</div>

			</div>

			<!-- Technologies integration -->
			<div class="col-md-3">
					
				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-cogs" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>Technologies integration</h5>
					</div>

					<div class="service-short-describe">
						<p>
							Beyond the design of specific solutions, we master and integrate various third-party IT solutions, such as CRM, API, ERP, etc.
						</p>
					</div>
				</div>

			</div>

			<!-- Consulting -->
			<div class="col-md-3">
					
				<div class="service-item">
					<div class="service-icon">
						<i class="fa fa-shield" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>IT security & Testing</h5>
					</div>

					<div class="service-short-describe">
						<p>
							Safety is a key word throughout our design process. We test and offer methods and advice for securing your computer system.
						</p>
					</div>

				</div>

			</div>

			<!-- Training -->
			<div class="col-md-3">
					
				<div class="service-item">
					<div class="service-icon">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>Training</h5>
					</div>

					<div class="service-short-describe">
						<p>
							Technologies are constantly evolving and training is a necessity. We provide continuous training and upgrading in the field of new technologies.
						</p>
					</div>

				</div>

				</div>
			</div>	
		</div>


	</div>
</section>

<!-- How we work -->
<section class="how-we-works">
	<div class="customers-section-title text-center">
		<p>
			<h2 class="--highlight">How we work</h2>
		</p>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-users" aria-hidden="true"></i>

					</div>

					<div class="service-title">
						<h5>Dedicated teams</h5>
					</div>

					<div class="service-short-describe">
						<p>
							On every project, we assemble a dedicated team of experts, who focus exclusively on your project, creating a technology solution that meets your needs and aims.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-user-secret" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>Client control</h5>
					</div>

					<div class="service-short-describe">
						<p>
							For the duration of every project, you become part of our team, and we give you the ability to guide our developers’ work in real time
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="service-item">

					<div class="service-icon">
<i class="fa fa-undo" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>Software development process</h5>
					</div>

					<div class="service-short-describe">
						<p>
							Our approach ensures a well organized development process, effective quality management, and proactive, clear communication with clients and stakeholders.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>Software testing</h5>
					</div>

					<div class="service-short-describe">
						<p>
							We use high-quality and effective automated testing methods – known as Test-driven development (TDD) – to guarantee that your application behaves as intended and ensure that making changes doesn’t cause any unexpected side effects.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-code-fork" aria-hidden="true"></i>

					</div>

					<div class="service-title">
						<h5>Flexibility</h5>
					</div>

					<div class="service-short-describe">
						<p>
							We follow agile development methodology and we are open to changes and new ideas from your side at any stage of the development.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="service-item">

					<div class="service-icon">
						<i class="fa fa-gamepad" aria-hidden="true"></i>
					</div>

					<div class="service-title">
						<h5>Dealing with challenges</h5>
					</div>

					<div class="service-short-describe">
						<p>
							Our deep professional knowledge and solid expertise allow us to manage complicated projects that require innovative technical solutions.
						</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>


<!-- Our services -->
<section class="our-cutomers">
	<div class="customers-section-title text-center">
		<p>
			<h2 class="--highlight">These companies trust us.</h2>
		</p>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="customers-logos">
				<!-- echo do_shortcode('[logoshowcase cat_id="3"]'); -->
				<?php echo do_shortcode('[wpaft_logo_slider category="customers"]'); ?>
			</div>
			</div>
		</div>
	</div>
</section>



</main>
<?php
get_footer();
