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
                <h3 class="heroTitle">A Private Luxury Estate in Scotland</h3>
                <h1 class="heroHeading">The Luxury Castle</h1>
                <!-- <p class="heroDescription">“Built in 1659 and carefully relocated stone by stone from the loch in 1907,
                    Turin Castle now rests within twenty acres of sweeping lawns, overlooking the rolling Angus
                    countryside.
                    Beyond the breathtaking setting, our exclusive-use castle offers everything you need to experience
                    Scottish country living at its finest.
                    Host a truly bespoke event, linger a little longer to enjoy golf, whisky and the natural beauty of
                    Scotland - or make it official and gather your loved ones for an unforgettable Scottish wedding
                    within the grounds.”</p> -->
                <a href="#" class="heroButton btn">Explore Now</a>
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