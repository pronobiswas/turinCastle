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
        <!-- <?php get_template_part( 'template-parts/header/nav' ); ?> -->

        <!-- =============================== -->
        <div id="header_main" class="header_main">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Castle-Logo-1-1.webp" alt="logo">
            </a>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav_action"></div>
        </div>
        <!-- =============================== -->
    </header>