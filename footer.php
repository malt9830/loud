<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<div class="footer-wrapper">
    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

        <div class="site-info">
            <div class="site-name">
                <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php else : ?>
                <?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
                <?php if ( is_front_page() && ! is_paged() ) : ?>
                <?php bloginfo( 'name' ); ?>
                <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
            </div><!-- .site-name -->
            <div class="powered-by">
                <a href="https://www.facebook.com/radiolouddanmark/">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/radio.louddk/?hl=en">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCjuazr_wWF6hWUVUd30cMkw">
                    <i class="fab fa-youtube-square"></i>
                </a>
            </div><!-- .powered-by -->

        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
