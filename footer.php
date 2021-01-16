<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<section class="background-light-grey">
	<div class="container">
		<div class="row padding-tb-25px line-ue">
			<div class="col-lg-6">
				<span style="text-align: justify;">
						Proiect cofinanțat din Fondul de Coeziune prin Programul Operațional Infrastructura Mare 2014-2020.
						Conținutul acestui material nu reprezintă în mod obligatoriu poziția oficiala a Uniunii Europene  sau a Guvernului României.
				</span>
			</div>
			<div class="col-lg-6">
				<span style="text-align: justify;">Pentru informații detaliate despre celelalte programe cofinanțate de Uniunea Europeană, vă invităm să vizitați
				<a href="www.fonduri-ue.ro" target="_blank" class="link-ue">www.fonduri-ue.ro</a></span>
			</div>
		</div>
	</div>

</section>

</div><!-- #page we need this extra closing tag here -->

<div class="padding-tb-5px position-relative" style="background-color:#5091c8; ">
	<div class="container">
		<div class="row wow fadeInUp">
				<div class="col-lg-12">
					<span class="text-white d-block padding-top-5px text-center">
                        Compania De Utilitati Publice Focsani &copy <?php echo date(Y);?> | Toate drepturile rezervate
                    </span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>

