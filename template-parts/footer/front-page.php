<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div id="landing">
            <div id="landing_content">
                <div id="landing_grid">
                    <!--logoets tre dele-->
                    <div class="logo_container">
                        <div class="left_wall"><img src="http://malthekusk.one/kea/passion/wordpress/wp-content/themes/vndu-theme/images/logo_pink.svg" alt="left wall"></div>
                        <div class="middle_wall"><img src="http://malthekusk.one/kea/passion/wordpress/wp-content/themes/vndu-theme/images/logo_red.svg" alt="middle wall"></div>
                        <div class="right_wall"><img src="http://malthekusk.one/kea/passion/wordpress/wp-content/themes/vndu-theme/images/logo_gul.svg" alt="irght wall"></div>
                    </div>
                    <!--Tekst på "splash" område-->
                    <div id="landing_text">
                        <div id="landing_text_top">
                            <div id="landing_v" class="landing_letter">V</div>
                            <div id="landing_n" class="landing_letter">N</div>
                        </div>
                        <div id="landing_text_bottom">
                            <div id="landing_d" class="landing_letter">D</div>
                            <div id="landing_u" class="landing_letter">U</div>
                        </div>
                        <h2>et online udstillingsvindue</h2>
                    </div>
                </div>
            </div>
            <!--pil til scroll-->
            <a href="#welcome" class="fas fa-chevron-down landing-chevron"> </a>
        </div>
        <div id="welcome">
            <div id="wrapper">
                <div id="lips_container">
                    <div id="lips_sprite"></div>
                </div>
                <div id="tale1_container" class="scale">
                    <div id="tale1_sprite"></div>
                </div>
                <div id="tale2_container" class="scale2">
                    <div id="tale2_sprite"></div>
                </div>
                <div id="tale3_container" class="scale3">
                    <div id="tale3_sprite"></div>
                </div>
                <div id="tale4_container" class="scale4">
                    <div id="tale4_sprite"></div>
                </div>
                <div id="tale5_container" class="scale5">
                    <div id="tale5_sprite"></div>
                </div>
                <div id="tale6_container" class="scale6">
                    <div id="tale6_sprite"></div>
                </div>
                <div id="tale7_container" class="scale7">
                    <div id="tale7_sprite"></div>
                </div>
                <div id="tale8_container" class="scale8">
                    <div id="tale8_sprite"></div>
                </div>
                <div id="tale9_container" class="scale9">
                    <div id="tale9_sprite"></div>
                </div>
            </div>
        </div>
        <div id="galleri" class="wp-block-group__inner-container"></div>
        <a href="http://malthekusk.one/kea/passion/wordpress/galleri/" id="gallery_button">
            <img src="http://malthekusk.one/kea/passion/wordpress/wp-content/themes/vndu-theme/images/button_yellow.svg" alt="gallery button">
            <p>Besøg galleriet</p>
        </a>
    </main><!-- #main -->
    <template>
        <article>
            <div class="top">
                <img>
            </div>
            <div class="bottom">
                <div class="text_top">
                    <h2></h2>
                    <h3></h3>
                    <p></p>
                </div>
                <div class="text_bottom">
                    <button class="read_more">Læs mere</button>
                </div>
            </div>
        </article>
    </template>
    <script>
        document.addEventListener("DOMContentLoaded", loadJSON);

        let artwork;
        let art;
        let randomArt;

        //Her defineres konstanter til senere brug for fetch af json
        const url = "http://malthekusk.one/kea/passion/wordpress/wp-json/wp/v2/artwork?per_page=100";

        // Her hentes json ind fra restdb, og sendes vider til funktionen showArt
        async function loadJSON() {
            //Henter json og gemmer det som art
            const JSONData = await fetch(url);
            otherArt = await JSONData.json();
            showOtherArt();
        }

        // I funktionen showArt, sættes hvert enkelt kunstværk ind i HTML
        function showOtherArt() {
            console.log("showingArt");
            console.log(art);
            const other1 = otherArt[Math.floor(Math.random() * otherArt.length)];
            const other2 = otherArt[Math.floor(Math.random() * otherArt.length)];
            const other3 = otherArt[Math.floor(Math.random() * otherArt.length)];
            const randomArt = [other1, other2, other3];
            console.log(randomArt);

            //Her definerers konstanter til senere brug i kloningen af template
            const template = document.querySelector("template");
            const container = document.querySelector("#galleri");
            container.innerHTML = "";

            /*  container.textContent = " ";*/ // HTML containeren tømmes for eksisterende indhold, og kan nu få tilført nyt indhold.

            randomArt.forEach(randomArtwork => {
                console.log("looping");

                let clone = template.cloneNode(true).content; //Her klones template og udfyldes  med data fra json

                clone.querySelector("img").src = randomArtwork.image.guid;
                clone.querySelector("img").alt = randomArtwork.short;
                clone.querySelector("h2").textContent = randomArtwork.work;
                clone.querySelector("h3").textContent = `Af ${randomArtwork.artist}`;
                clone.querySelector("p").textContent = randomArtwork.short;
                clone.querySelector("article").addEventListener("click", () => {
                    location.href = randomArtwork.link;
                });
                container.appendChild(clone); //kolene tilføres til DOM

            })
        }

    </script>
</div><!-- #primary -->
<div class="footer-nav-widgets-wrapper header-footer-group">
    <div class="footer-inner section-inner">
        <aside class="footer-widgets-outer-wrapper" role="complementary">
            <div class="footer-widgets-wrapper">
                <div class="footer-widgets column-one grid-item">
                    <div class="widget_text widget widget_custom_html">
                        <div class="widget_text widget-content">
                            <div class="textwidget custom-html-widget">
                                <div class="footer-flex">
                                    <div class="footer-left">
                                        <h4>Kontakt os</h4>
                                        <p>
                                            VNDU
                                        </p>
                                        <p>Telefon: <a>+45 20 18 88 77</a></p>
                                        <p>
                                            E-mail: <a>hello@vndu.dk</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widgets column-two grid-item">
                    <div class="widget_text widget widget_custom_html">
                        <div class="widget_text widget-content">
                            <div class="textwidget custom-html-widget">
                                <div class="footer-right">
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-linkedin-in"></i>
                                    <i class="fab fa-facebook-square"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .footer-widgets-wrapper -->
        </aside><!-- .footer-widgets-outer-wrapper -->
    </div><!-- .footer-inner -->
</div>
<?php
get_footer();
