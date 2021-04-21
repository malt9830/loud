<?php
/**
 * The template for displaying sendeplan
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">



<section id="sendeplan_header">
	<h1>Sendeplan</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia ultricies sapien nec dapibus. Morbi non nisl ac mi pretium tempor. Nam porta est nec urna sodales porttitor. Ut porttitor congue urna sed efficitur.</p>
</div>





<section id="sendeplan">
	<div id="sendeplan_container">


	<div id="dagsplan">
	//tom div til at indsætte template med sendeplan
	</div>

	</main><!-- #main -->


	</div>
</section> <!--sendeplan_container-->





	<div id="dagsplan">

	<div class="ugeplan_blok">

	</div>



	</div>


    </div> <!--sendeplan-->










// template til indsætning af data
<template>
	<article>
		<img class="billede" src="" alt="">
		<h3 class="podcast"></h3>
		<p class="dato_tid"></p>
		<p class="beskrivelse"></p>
		<p class="genre"></p>
	</article>
</template>






    <style>
    #sendeplan_container{
    border: 1px solid black;
}

#dagsplan {
	width:400px;
	height:700px;
	overflow-x:scroll;
  }

  #sendeplan_genre{
	  text-transform:uppercase;
  }    </style>





</div><!-- #primary -->
</div>





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
