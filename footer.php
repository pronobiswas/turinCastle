<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

    <footer id="custom_footer">
        <div class="castleImage">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/castleSketch.webp" alt="">
        </div>
        <div class="footer_container">
            <div class="footer_wrapper">
                <div class="footer_logo">
                    <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Castle-Logo-1-1.webp" width="200" height="auto" alt="logo">
                </div>

                <div class="underline"></div>

                <div class="address">
                    <ul>
                        <li>
                            <a href="tell:+44 (0)1307 830463" class="line_effect">+44 (0)1307 830463</a>
                        </li>
                        <li>
                            <a href="mailto:yvonne@turincastlescotland.com" class="line_effect">yvonne@turincastlescotland.com</a>
                        </li>
                        <li class="line_effect">Turin Castle, Angus, DD8 2UF Scotland</li>
                    </ul>
                </div>

                <div class="footer_menu">
                    <ul>
                        <li><a href=""> THE CASTLE</a></li>
                        <li><a href="">EXPERIENCES</a></li>
                        <li><a href="">ADVENTURES</a></li>
                        <li><a href="">SPORTING</a></li>
                        <li><a href="">SIGNATURE wEDDINGS</a></li>
                        <li><a href="">CONTACT</a></li>
                    </ul>

                </div>

                <div class="social_media">
                    <ul>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Pinterest</a></li>
                        <li><a href="">Behance</a></li>
                    </ul>

                </div>

                <div class="footer_separator"></div>


                <div class="footnote">
                    <div> <a href="TERMS & CONDITION">TERMS & CONDITION</a></div>
                    <div>
                        <p class="line_effect"> © 2026 Turin Castle. All rights reserved.</p>
                    </div>

                </div>


            </div>

        </div>
    </footer>

</body>

<?php wp_footer(); ?>