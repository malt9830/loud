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
?>
<style>

/* article #post-38 {
	margin: 0;
	padding: 0;
} */

/* .entry-content .wp-block-columns { 
	margin: 0;
	padding: 0;
	width: 100%;
} */

#lab-story {
padding-left: 8vw;
padding-right: 8vw;
}

.post-38 {
	margin-top: 0;
}

.site-main {
	padding: 0;
	margin: 0;
}

.singular .entry-title {
	font-family: Montserrat;
    font-weight: 900;
	font-size: 4rem;
}

.singular .entry-header {
	border-bottom: 0px;
	margin: 0;
	padding: 0;
}

.entry-header {
border: 0px; 
}

#primary {
	margin-top: 0;
}

.lab-button {
	/* display: inline-block; */
    background: #F19C7A;
    color: white;
    /* padding: 1rem 2rem; */
    border-radius: 1rem;
	border: none;
    font-family: Montserrat;
    font-weight: 700;
    box-shadow: 4px 4px 0 #000;
    text-decoration: none;
    /* margin: 1rem 1.5rem; */
    transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    transition-duration: .15s;
    text-align: center;
}

</style>



<!-- <h1>LOUD LAB</h1> -->
<!-- <?php echo do_shortcode('[metaslider id="264"]'); ?> -->


<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// // If comments are open or there is at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
	// }
endwhile; // End of the loop.

echo do_shortcode('[metaslider id="264"]');


get_template_part( 'template-parts/footer/player' );
get_footer();

?>
