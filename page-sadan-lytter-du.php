<style>
    #ikoner .elementor-widget-image .elementor-image img {
        width: 61px !important;
        height: 61px !important;
    }

    #kort .elementor-widget-image .elementor-image img {
        width: 100% !important;
        height: 100% !important;
    }

</style>


<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_template_part( 'template-parts/footer/player' );
get_footer();
