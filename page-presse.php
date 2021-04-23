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
    section {
        max-width: 1200px;
        margin: 1rem;
    }

    @media (min-width: 1200px) {
        section {
            margin: 0 auto;
        }
    }

    #primary,
    #main {
        margin-top: 0;
        padding-top: 0;
    }

    #section-press-info {
        padding: 2rem 0;
    }

    #section-press-info .container {
        display: grid;
    }

    .wrapper-press-info {
        background: #DADADA;
    }

    @media(min-width:650px) {
        #section-press-info .container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(min-width:950px) {
        #section-press-info .container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

</style>
<section id="section-press">
    <h1>Presse</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia ultricies sapien nec dapibus. Morbi non nisl ac mi pretium tempor. Nam porta est nec urna sodales porttitor. Ut porttitor congue urna sed efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia ultricies sapien nec dapibus. Morbi non nisl ac mi pretium tempor. Nam porta est nec urna sodales porttitor. Ut porttitor congue urna sed efficitur.</p>
</section>
<div class="wrapper-press-info">
    <section id="section-press-info">
        <div class="container">
            <div class="col-press">
                <h4>Mail og presse-info</h4>
            </div>
            <div class="col-press">
                <h4>Hent logopakke</h4>
            </div>
            <div class="col-press">
                <h4>Pressemeddelelser</h4>
            </div>
        </div>
    </section>
</div>


<?php
get_template_part( 'template-parts/footer/player' );
get_footer();
?>
