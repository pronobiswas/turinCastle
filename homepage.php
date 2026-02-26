<?php
/**
 * Template Name: Homepage
 * Description: Custom homepage template
 */

get_header(); ?>

<div id="homepage-content">
    <main id="primary" class="site-main">
        <!-- ===bannner section start=== -->
        <section id="homepageBannerSection">
            <div id="homeBanner">
                <div class="bannervideo">
                    <video
                        src="http://localhost/circulartechg/wp-content/uploads/2026/01/b55bbc9498fc4a93bfc64fc81724bdd9.mp4"
                        autoplay muted loop></video>
                </div>
                <div class="bannerContent">
                    <h1>Meet Canopy</h1>
                    <h2>
                        You asked for a mask <br>
                        that would make a world of difference. <br>
                        Together, we made it.
                    </h2>
                </div>
                <div class="bannerImage">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bannerImage1.webp"
                        alt="bannerImage">
                </div>
            </div>
        </section>
        <!-- ===bannner section end=== -->

        <!-- ======video introduction section start====== -->
        <section id="videoIntroductionSection">
            <!-- ----videos---- -->
            <div id="videoAnimationWrapper">
                <div class="videoAnimation">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrolllvideo1.mp4"
                        muted></video>
                </div>
                <div class="videoAnimation">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit1.mp4"
                        muted></video>
                </div>
                <div class="videoAnimation">
                    <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/scrollvideo1Benifit2.mp4"
                        muted></video>
                </div>
            </div>
            <!-- ----videos---- -->

            <div id="textContentWrappper">
                <!-- ---section indicator--- -->
                <aside class="sectionIndicator">
                    <ul class="indicatorList">
                        <li>Home</li>
                        <li>Intro</li>
                        <li>Teams</li>
                        <li>Benifit</li>
                    </ul>
                </aside>
                <!-- ---section indicator--- -->
                <div class="contentSecttion">
                    <h2>Introducing Canopy</h2>
                    <p>
                        Canopy is the world’s first carbon-negative, plastic-free face mask. Made from
                        sustainably-sourced materials, Canopy is designed to protect you and the planet.
                    </p>
                </div>
            </div>
        </section>
        <!-- ======video introduction section end====== -->
        <section style="width:100%; height: 5000px; background-color: #000;"></section>

    </main>
</div>

<?php get_footer(); ?>


<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>

<script>
(function waitForGSAP() {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        requestAnimationFrame(waitForGSAP);
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    function initVideoScroll() {
        const videoAnimationWrapper = document.getElementById("videoAnimationWrapper");
        const wrappers = document.querySelectorAll(".videoAnimation video");
        const videos = document.querySelectorAll(".videoAnimation video");
        if (!wrappers.length) return;
        console.log(videos);
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: videoAnimationWrapper,
                start: "top 10%",
                end: "+=3000",
                scrub: true,
                pin: true,
                markers: true,
            }
        });
        const scrubObjs = [
            {currentTime: 0.0}, 
            {currentTime: 0.0},
            {currentTime: 0.0},
            {currentTime: 0.0},
            {currentTime: 0.0},
            {currentTime: 0.0},
            
        ];
        videos.forEach(v => {
            v.pause();
            v.muted = true;
            v.style.position = "absolute";
            v.style.top = 0;
            v.style.left = 0;
            v.style.opacity = 0;
        });

        tl.set(videos[0], {
                opacity: 1
            })
            .to({}, {
                duration: videos[0].duration,
                onUpdate: () => {
                    videos[0].currentTime = gsap.utils.clamp(0, videos[0].duration, videos[0].currentTime +
                        0.016);
                },
                onComplete: () => {
                    console.log("first video complete");
                }
            })
            .to(videos[0], {
                opacity: 0
            }) 

            .set(videos[1], {
                opacity: 1,
                x: 0
            })
            .to({}, {
                duration: videos[1].duration,
                onUpdate: () => {
                    videos[1].currentTime = gsap.utils.clamp(0, videos[1].duration, videos[1].currentTime +
                        0.016);
                },
                onComplete: () => {
                    console.log("second video complete");
                }
            })
            .to(videos[1], {
                opacity: 0
            })
            .set(videos[2], {
                opacity: 1,
                x: 0
            })
            .to({}, {
                duration: videos[2].duration,
                onUpdate: () => {
                    videos[2].currentTime = gsap.utils.clamp(0, videos[2].duration, videos[2].currentTime +
                        0.016);
                },
                onComplete: () => {
                    console.log("third video complete");
                }
            })
            .to(videos[2], {
                opacity: 0
            });




    }

    initVideoScroll();
})();
</script>

















<?php
 // wrappers.forEach((wrapper, index) => {
    //   const video = wrapper.querySelector("video");
    //   const scrollHeight = video.offsetHeight;
    //   console.log("video",index ,"height:", scrollHeight);
      
    //   if (!video) return;

    //   function setupScroll() {
    //     let scrubObj = { currentTime: 0 };
        
    //     gsap.from(video,{
    //         opacity:0,
    //         ease: "none",
    //       scrollTrigger: {
    //         trigger: wrapper,
    //         start: "top 9%",
    //         end: `+=${scrollHeight}`,
    //         scrub: true,
    //         markers: true,
    //       },
    //     })

    //     gsap.to(scrubObj, {
    //       currentTime: video.duration,
    //       ease: "none",
    //       scrollTrigger: {
    //         trigger: wrapper,
    //         start: "top 10%",
    //         end: "+=300",
    //         pin: true,
    //         scrub: true,
    //         markers: true,
    //         id: "video-" + index
    //       },
    //       onUpdate: () => {
    //         video.currentTime = scrubObj.currentTime;
    //       }
    //     });
    //   }


    //   video.muted = true;
    //   video.playsInline = true;
    //   video.pause();

    //   if (video.readyState >= 1) {
    //     setupScroll();
    //   } else {
    //     video.addEventListener("loadedmetadata", setupScroll, { once: true });
    //   }
    // });