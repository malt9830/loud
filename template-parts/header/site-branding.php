<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>
<style>
    .site-branding {
        margin: 0 !important;
    }

    .site-logo {
        margin: 1rem;
    }

</style>
<div class="site-branding">
    <div class="site-logo"><?php the_custom_logo(); ?></div>
</div><!-- .site-branding -->
