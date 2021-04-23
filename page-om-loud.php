<style>
    .singular .entry-title {
        font-family: Montserrat;
        font-weight: 900;
        font-size: 4rem;
        margin-left: 5vw;
    }


    .entry-header> :last-child {
        margin-bottom: 8px;
    }

    .singular .entry-header {
        margin: 0;
        padding: 0;
        border-bottom: none !important;

    }

    .site-main>article> :first-child {
        margin-bottom: 0px;
    }

    .alg_back_button_input {
        background: #F19C7A;
        color: white;
        padding: 1rem 2rem;
        border-radius: 1rem;
        border: none;
        font-family: Montserrat;
        font-weight: 700;
        box-shadow: 4px 4px 0 #000;
        margin-top: -20rem;
        margin-left: -1rem;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: .15s;
        cursor: pointer;

    }

    .alg_back_button_input:hover {
        box-shadow: 0 0 0;
        transform: translate(1px, 1px);
    }

    /*unik CSS her*/
    #wpforms-submit-420 {
        background: #DB0038;
        color: white;
        padding: 1rem 2rem;
        border-radius: 1rem;
        border: none;
        font-family: Montserrat;
        font-weight: 700;
        box-shadow: 4px 4px 0 #000;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: .15s;
        cursor: pointer;

    }

    /*unik CSS her*/
    #wpforms-submit-420:hover {
        box-shadow: 0 0 0;
        transform: translate(1px, 1px);
    }

    @media screen and (min-width: 700px) {
        .alg_back_button_input {
            margin-top: -19rem;
            margin-left: -16rem;
        }


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
