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
                    <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Castle-Logo-1-1.webp" alt="logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">The castle</div>
                            <div class="linkHoverText">The castle</div>
                        </div>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Expriences</div>
                            <div class="linkHoverText">Expriences</div>
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
                            <div class="linkText">Signuture wedding</div>
                            <div class="linkHoverText">Signuture wedding</div>
                        </div>
                    </li>
                    <li>
                        <div class="linkBox">
                            <div class="linkText">Contact</div>
                            <div class="linkHoverText">Contact</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav_action"></div>
        </div>
        <!-- =============================== -->
    </header>