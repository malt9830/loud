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

.has-small-font-size {
	font-size: 0.8rem;
	font-family: Montserrat;
	padding-left: 4vw;
}

#lab-story {
padding-left: 8vw;
padding-right: 8vw;
}

.post-38 {
	margin-top: 2vw;
}

.singular .entry-title {
	font-family: Montserrat;
    font-weight: 900;
	font-size: 3rem;
	margin-left: 4vw;
}

.singular .entry-header {
	border-bottom: 0px;
	margin: 0;
	padding: 0;
}

.underrubrik {
	max-width: 700px; 
	padding-left: 2vw;
	margin: 0;
}

p {
	margin-bottom: 0 !important;
	margin-block-end: 0;
	margin-block-start: 0;
}

.wp-block-buttons {
	margin-top: 5px !important;
}

#primary {
	margin-top: 0;
}

.lab-event-row {
	border: 1px solid black;
}
.lab-event-row {
	height: 100%;
}


.wp-block-button__link  {
	/* display: inline-block; */
    background: #F19C7A;
    color: white;
    padding: -1rem !important;
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
	height: 20px;
	margin: 0 !important;
}

.wp-block-button {
	margin: 5;
	padding: -1rem !important;
	height: 20px;

}
/* 
.lab-button {
	margin: 0;
	padding: -5px 5px 5px 5px !important;
	font-size: 0.8rem;

} */



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
