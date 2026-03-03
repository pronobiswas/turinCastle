<!-- this is header file -->
<?php
/**
 * Header template for Astra Child Theme
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="custom_header" class="site-header">


        <!-- =============================== -->
        <div id="header_main" class="header_main">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">

                    <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Castle-Logo-1-1.webp"
                        alt="logo">
                </a>
            </div>
            <div class="menu">
                <!-- <ul>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">The Castle</div>
                                <div class="linkHoverText">The Castle</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Experiences</div>
                            <div class="linkHoverText">Experiences</div>
                        </div>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Adventure</div>
                            <div class="linkHoverText">Adventure</div>
                        </div>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Sporting</div>
                            <div class="linkHoverText">Sporting</div>
                        </div>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Signature Weddings</div>
                            <div class="linkHoverText">Signature Weddings</div>
                        </div>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Contact</div>
                            <div class="linkHoverText">Contact</div>
                        </div>
                    </li>
                </ul> -->


                <ul>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">The Castle</div>
                                <div class="linkHoverText">The Castle</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/exprience/">
                            <div class="linkBox">
                                <div class="linkText">Experiences</div>
                                <div class="linkHoverText">Experiences</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">Adventure</div>
                                <div class="linkHoverText">Adventure</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/sporting/">
                            <div class="linkBox">
                                <div class="linkText">Sporting</div>
                                <div class="linkHoverText">Sporting</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/signuture-wedding/">
                            <div class="linkBox">
                                <div class="linkText">Signature Weddings</div>
                                <div class="linkHoverText">Signature Weddings</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://turincastle.previewmysite.online/the-castle/">
                            <div class="linkBox">
                                <div class="linkText">Contact</div>
                                <div class="linkHoverText">Contact</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav_action"></div>
        </div>
        <!-- =============================== -->
    </header>