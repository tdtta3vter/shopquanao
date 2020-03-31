<?php
/**
 * Template Name: Contact Page Template
 *
 * @package Tyche
 */
?>

<?php
get_header();

$breadcrumbs_enabled = get_theme_mod( 'tyche_enable_post_breadcrumbs', true );
if ( $breadcrumbs_enabled ) {
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php Tyche_Helper::add_breadcrumbs(); ?>
			</div>
		</div>
	</div>
<?php } ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php the_title( '<h2 class="custom-page-title">', '</h2>' ); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
			endif;
			?>
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-xs-12">
					<div class="tyche-icon-box">
						<div class="icon">
							<span class="fa fa-map-marker"></span>
						</div>
						<div class="text">
							<?php echo esc_html__( 'CỬA HÀNG', 'tyche' ); ?>
							<span><?php echo esc_html( get_theme_mod( 'tyche_contact_address', '557-6308 Lacinia Road. NYC' ) ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4">
			<?php echo do_shortcode( get_theme_mod( 'tyche_contact_page_shortcode_form', '' ) ); ?>
		</div>
		<div class="col-sm-8">
			<div id="tyche-map">
				<?php /* echo do_shortcode( get_theme_mod( 'tyche_contact_page_shortcode_map', '' ) ); */ ?>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.834444992244!2d106.70241794942372!3d10.823978492251465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175288d99c974df%3A0x8d5e621f9c30b488!2zNTM3IFBo4bqhbSBWxINuIMSQ4buTbmcsIFBoxrDhu51uZyAxMywgQsOsbmggVGjhuqFuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1585571856447!5m2!1svi!2s" width="750" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>
