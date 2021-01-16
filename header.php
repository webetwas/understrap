<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>



</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="container">
	<div class="row hidden-xs">
		<div class="col-sm-4 col-sm-4 col-4 text-center img-responsive"><img src="http://cupfocsani.ro/public/assets/img/ue/logo-UE-2018.jpg"></div>
		<div class="col-sm-4 col-sm-4 col-4 text-center img-responsive"><img src="http://cupfocsani.ro/public/assets/img/ue/logo-GR-2018.jpg"></div>
		<div class="col-sm-4 col-sm-4 col-4 text-center img-responsive"><img src="http://cupfocsani.ro/public/assets/img/ue/logo-IS-2014-2020.jpg"></div>
	</div>
</div>

<div class="padding-tb-5px position-relative" style="background-color:#5091c8;">
		<div class="container">
			<div class="row">

				<div class="col-xl-3 col-lg-3 col-3 align align js-equal-8" style="height: 62.4px;">
					<ul class="list-inline text-center margin-0px text-white pull-left just-a-box ">
												<li class="list-inline-item unknown-el"><a class="facebook" href="https://www.facebook.com/cupfocsani.ro/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a></li>
																							</ul>
					<!-- // Social -->
				</div>
				<div class="col-xl-6 col-lg-6 d-none d-xl-block js-equal-8" style="height: 62.4px;">
					<div class="contact-info text-white text-center align">
						<!-- <span class="margin-right-10px">Tel:  <a href="tel:+40 237 226 400">+40 237 226 400</a></span>
						<span>Email: <a href="mailto:secretariat@cupfocsani.ro">secretariat@cupfocsani.ro</a></span> -->
						<h3 style="letter-spacing: 3px;">COMPANIA DE UTILITĂȚI PUBLICE FOCȘANI</h3><h5>operator regional al serviciilor de apă și canalizare</h5>
					</div>
				</div>
				<div class="col-xl-3 col-9 js-equal-8 no-pad-col" style="height: 62.4px;">
					<div class="container just-a-box">
						<div class="unknown-el">
							<?php echo get_search_form();?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
