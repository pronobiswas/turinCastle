<?php
/**
 * Template Name: Homepage2
 * Description: Custom homepage template
 */
get_header(); ?>

<div id="homepage-content2">
    <main id="primary" class="site-main">
        <!-- ===bannner section start=== -->
        <section id="homepageBannerSection2">
            <div id="homeBanner2">
                <div class="bannervideo2">
                    <video
                        src="http://localhost/circulartechg/wp-content/uploads/2026/01/b55bbc9498fc4a93bfc64fc81724bdd9.mp4"
                        autoplay muted loop></video>
                </div>
                <div class="bannerContent2">
                    <h1><?php echo get_theme_mod( 'mytheme_custom_title', 'Meet Encopy' ); ?></h1>
                    <h2><?php echo get_theme_mod( 'mytheme_custom_subheading', 'You asked for a mask that would make a world of difference.Together, we made it.' ); ?></h2>
                </div>
                <div class="bannerImage2">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bannerImage1.webp"
                        alt="bannerImage"> -->
                    <?php 
                        $banner_image = get_theme_mod( 'mytheme_banner_image' );
                        if ( $banner_image ) : ?>
                    <img src="<?php echo esc_url( $banner_image ); ?>" alt="Banner Image">
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ===bannner section end=== -->

        <!-- ======video introduction section start====== -->
        <section id="videoIntroductionSection2">
            <!-- ----videos---- -->
            <div id="videoAnimationWrapper2">

                <div class="videoContainer1 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrolllvideo1.mp4"
                        muted></video>
                </div>
                <div class="videoContainer2 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit1.mp4"
                        muted></video>
                </div>
                <div class="videoContainer3 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit2.mp4"
                        muted></video>
                </div>
                <div class="videoContainer4 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit3.mp4"
                        muted></video>
                </div>
                <div class="videoContainer5 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit4.mp4"
                        muted></video>
                </div>
                <div class="videoContainer6 videoContainerX">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Design1.mp4"
                        muted></video>
                </div>
            </div>
            <!-- ----videos---- -->
        </section>
        <section id="scrollContentSection2" class="scroll-content">
            <div class="scrollContentWrapper">
                <div class="contentSection1">
                    <div class="contentSection1_title">
                        <h2><?php echo esc_html( get_theme_mod( 'mytheme_scroll_title1', 'First Section Title' ) ); ?></h2>
                    </div>
                    <div class="contentSection1_subtitle">
                        <p><?php echo wp_kses_post( get_theme_mod( 'mytheme_scroll_paragraph1', 'First section paragraph content goes here.' ) ); ?></p>
                    </div>
                </div>
                <div class="contentSection2 contentSectionLeft">
                    <div class="leftTextContent">
                        <h2><?php echo esc_html( get_theme_mod( 'mytheme_scroll_title2', 'Second Section Title' ) ); ?></h2>
                        <p><?php echo wp_kses_post( get_theme_mod( 'mytheme_scroll_paragraph2', 'Second section paragraph content goes here.' ) ); ?></p>
                    </div>
                </div>
                <div class="contentSection3 contentSectionLeft">
                    <div class="leftTextContent">
                        <h2><?php echo esc_html( get_theme_mod( 'mytheme_scroll_title3', 'Third Section Title' ) ); ?></h2>
                        <p><?php echo wp_kses_post( get_theme_mod( 'mytheme_scroll_paragraph3', 'Third section paragraph content goes here.' ) ); ?></p>
                    </div>
                </div>
                <div class="contentSection4 contentSectionLeft">
                    <div class="leftTextContent">
                        <h2><?php echo esc_html( get_theme_mod( 'mytheme_scroll_title4', 'Fourth Section Title' ) ); ?></h2>
                        <p><?php echo wp_kses_post( get_theme_mod( 'mytheme_scroll_paragraph4', 'Fourth section paragraph content goes here.' ) ); ?></p>
                    </div>
                </div>
                <div class="contentSection4 contentSectionLeft">
                    <div class="leftTextContent">
                        <h2><?php echo esc_html( get_theme_mod( 'mytheme_scroll_title4', 'Fourth Section Title' ) ); ?></h2>
                        <p><?php echo wp_kses_post( get_theme_mod( 'mytheme_scroll_paragraph4', 'Fourth section paragraph content goes here.' ) ); ?></p>
                    </div>
                </div>
                <div class="contentSection5 contentSectionLeft">
                    <div class="leftTextContent">
                        <h2><?php echo esc_html( get_theme_mod( 'mytheme_scroll_title5', 'Fifth Section Title' ) ); ?></h2>
                        <p><?php echo wp_kses_post( get_theme_mod( 'mytheme_scroll_paragraph5', 'Fifth section paragraph content goes here.' ) ); ?></p>
                    </div>
                </div>
                <div class="contentSection5 contentSectionRight">
                    <div class="rightTextContent">
                        <h2>You told us everything to fix.</h2>
                        <p>Canopy is all about the details. Each component of our respirator was developed based on direct feedback from frontline workers.</p>
                        <div class="accordianWrapper">
                            <ul class="accordianList">
                                <li class="accordianItem">
                                    <div class="accordianTitle">
                                        <h3>Accordion Item 1</h3>
                                        <span class="accordianIcon accordianIcon-red"></span>
                                    </div>
                                    <div class="accordianContent">
                                        <p>Content for accordion item 1 goes here.</p>
                                    </div>
                                </li>
                                <li class="accordianItem">
                                    <div class="accordianTitle">
                                        <h3>Accordion Item 1</h3>
                                        <span class="accordianIcon accordianIcon-red"></span>
                                    </div>
                                    <div class="accordianContent">
                                        <p>Content for accordion item 1 goes here.</p>
                                    </div>
                                </li>
                                <li class="accordianItem">
                                    <div class="accordianTitle">
                                        <h3>Accordion Item 1</h3>
                                        <span class="accordianIcon accordianIcon-red"></span>
                                    </div>
                                    <div class="accordianContent">
                                        <p>Content for accordion item 1 goes here.</p>
                                    </div>
                                </li>
                                <li class="accordianItem">
                                    <div class="accordianTitle">
                                        <h3>Accordion Item 1</h3>
                                        <span class="accordianIcon accordianIcon-red"></span>
                                    </div>
                                    <div class="accordianContent">
                                        <p>Content for accordion item 1 goes here.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </section>
        <section class="scroll-content">
    
    

    
    

    
    
</section>



    </main>
</div>

<?php get_footer(); ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script> -->


<script>





</script>