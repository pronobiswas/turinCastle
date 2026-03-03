<?php
/**
 * Template Name: Homepage2
 * Description: Custom homepage template
 */
get_header(); ?>

<main id="homepage-content">
    <!-- @@@@@@@@@@@  HOME PAGE START HERE  @@@@@@@@@@@ -->
    <div class="hero-video">
        <iframe src="https://www.youtube.com/embed/L06KRmrj5HI?autoplay=1&mute=1&controls=0&loop=1&playlist=L06KRmrj5HI"
            frameborder="0" allow="autoplay" allowfullscreen>
        </iframe>
        <div class="heroOverlay">
            <div class="heroContent">
                <!-- <h1 class="heroHeading">The Turin Castle</h1>
                <h3 class="heroTitle">“Where History Meets Hidden Luxury – Yours, Exclusively.”</h3>
                <a href="#" class="heroButton btn">Explore Now</a> -->
            </div>
        </div>
    </div>

    <?php include get_stylesheet_directory() . '/parts/home/homeSection2.php'; ?>
    <?php include get_stylesheet_directory() . '/parts/home/scrolledInformation.php'; ?>
    <?php include get_stylesheet_directory() . '/parts/home/slider.php'; ?>
    <?php include get_stylesheet_directory() . '/parts/home/locationMap.php'; ?>




    <!-- @@@@@@@@@@@  HOME PAGE END HERE  @@@@@@@@@@@ -->


</main>

<?php get_footer(); ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script> -->


<script>





</script>
<style>

</style>