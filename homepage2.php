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
                <p class="heroDescription">“How beautiful Turin looked in the late afternoon light. My first glimpse will stay with me forever.

                    The sheer grey stone walls full of majesty against the pale yellow sky and the welcome of the
                    flickering lights within”</p>
                <a href="#" class="heroButton btn">Explore Now</a>
            </div>
        </div>
    </div>

    <?php include get_stylesheet_directory() . '/parts/home/scrolledInformation.php'; ?>




    <!-- @@@@@@@@@@@  HOME PAGE END HERE  @@@@@@@@@@@ -->


</main>

<?php get_footer(); ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script> -->


<script>





</script>
<style>

</style>