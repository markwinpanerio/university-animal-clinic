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
 * @package University_Animal_Clinic
 */

get_header();
?>

	<!-- Home Slider Start -->
	<?php echo webFX_importTemplate('./components/home-slider'); ?>
	<!-- Home Slider End -->

	<!-- Welcome Start -->
	<?php echo webFX_importTemplate('./components/home-welcome'); ?>
	<!-- Welcome End -->

	<!-- Home Services Start -->
	<?php echo webFX_importTemplate('./components/home-services'); ?>
	<!-- Home Services End -->
	
	<!-- Home Team Start -->
	<?php echo webFX_importTemplate('./components/home-team'); ?>
	<!-- Home Team End -->

	<!-- Exotic Care Start -->
	<?php echo webFX_importTemplate('./components/exotic-care'); ?>
	<!-- Exotic Care End -->

	<!-- Fun Fact Start -->
	<?php echo webFX_importTemplate('./components/fun-fact'); ?>
	<!-- Fun Fact End -->

	<!-- Testi and Blog Start -->
	<?php echo webFX_importTemplate('./components/testimonial-and-blog-section'); ?>
	<!-- Testi and Blog End -->

<?php
get_footer();
