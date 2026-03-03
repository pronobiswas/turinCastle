<section id="homepageSlider">
    <div class="wrapper">
        <div class="sliderHeader">
            <h3 class="homesliderHeading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sequi fugit ab
                et impedit libero voluptas repellendus ut, exercitationem maxime?</h3>
        </div>
        <div class="sliderWrapper">

            <aside class="leftSlider">

                <div class="sliderIndicaror">
                    <div class="slideNumbers">1/4</div>
                    <span class="slideTitle">Lorem ipsum</span>
                </div>

                <div class="slideLeft">
                    <div class="slideImage">
                        <div class="overlay"></div>
                        <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/IMG_5973-scaled-e1771448882950.webp"
                            alt="image">
                    </div>
                    <div class="slideContent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis suscipit quia quis, rerum
                            totam illo! Dolores sunt, reprehenderit sit perspiciatis laboriosam sapiente natus pariatur
                            quod excepturi quam quae numquam velit!</p>
                            <a id="sliderLink" href="/">
                                <button  class="hoverBtn">
                                    <span>Explore</span>
                                </button>
                            </a>
                    </div>
                </div>
            </aside>

            <div class="rightslider">
                <div class="sliderRightImage">
                    <div class="overlay"></div>
                    <div class="sliderRightImageOverlay"></div>
                    <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/image-23.webp" alt="images">

                    <div class="sliderIndicators">
                        <div class="slideIndicate">
                            <span>←</span>
                        </div>
                        <div class="slideIndicate">
                            <span>→</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const slides = [{
            leftImg: "https://alex.techhunter2024.online/wp-content/uploads/2026/02/IMG_5973-scaled-e1771448882950.webp",
            rightImg: "https://alex.techhunter2024.online/wp-content/uploads/2026/02/image-23.webp",
            number: "1/4",
            title: "Experiences",
            heading: "Experiences",
            text: "Experience the grandeur of a luxury castle festival where adventure meets elegance — from thrilling outdoor pursuits to gourmet feasts. Indulge in fine dining, lively celebrations, and unforgettable moments of luxury enjoyment within Turin Castle’s majestic setting.",
            redirectLink:"https://turincastle.previewmysite.online/exprience/"
        },
        {
            leftImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2026-02-05-13-52-11.jpg",
            rightImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2026-02-05-13-55-20-3.jpg",
            number: "2/4",
            title: "Adventure",
            heading: "Adventure",
            text: "urin Castle invites you to immerse yourself in a luxury adventure unlike any other. Set within sweeping lawns and the rolling Angus countryside, guests can enjoy bespoke experiences — from golf and whisky tastings to outdoor pursuits — all wrapped in the elegance of Scottish country living at its finest.",
            redirectLink:"https://turincastle.previewmysite.online/exprience/"
        },
        {
            leftImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/03/IMG_4257-scaled.jpg",
            rightImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/03/IMG_6918-scaled.jpeg",
            number: "3/4",
            title: "Sporting",
            heading: "Sporting",
            text: "Turin Castle offers an unforgettable sporting experience wrapped in luxury. Guests can enjoy exclusive access to golf, clay shooting, and countryside pursuits, all set against the castle’s breathtaking Scottish landscape — blending adventure with refined elegance.",
            redirectLink:"https://turincastle.previewmysite.online/sporting/"
        },
        {
            leftImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2026-02-05-13-51-50-5.jpg",
            rightImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/03/Reception-September-22-201827-of-59-scaled.jpg",
            number: "4/4",
            title: "Signature Wedding",
            heading: "Signature Wedding",
            text: "urin Castle creates the perfect setting for a Signature Wedding, blending timeless elegance with bespoke luxury. Couples can celebrate their day surrounded by historic grandeur, exquisite dining, and personalized touches, ensuring every moment feels uniquely crafted and unforgettable.",
            redirectLink:"https://turincastle.previewmysite.online/signuture-wedding/"
        }
    ];

    let current = 0;

    // DOM references
    const leftImg = document.querySelector(".slideImage img");
    const rightImg = document.querySelector(".sliderRightImage img");
    const slideNumbers = document.querySelector(".slideNumbers");
    const slideTitle = document.querySelector(".slideTitle");
    const text = document.querySelector(".slideContent p");
    const sliderLink = document.querySelector("#sliderLink");

    const indicators = document.querySelectorAll(".slideIndicate");

    //   function updateSlide(index,bolean) {
    //     const s = slides[index];
    //     leftImg.src = s.leftImg;
    //     rightImg.src = s.rightImg;
    //     slideNumbers.textContent = s.number;
    //     slideTitle.textContent = s.title;
    //     heading.textContent = s.heading;
    //     text.textContent = s.text;
    //     console.log(rightImg);

    //   }

    // function updateSlide(index , bolean) {
    //     const s = slides[index];

    //     gsap.to(".overlay", {
    //         opacity: 1,
    //         xPercent: bolean? -100 : 100,
    //         duration: 0.4,
    //         onComplete: () => {
    //             leftImg.src = s.leftImg;
    //             rightImg.src = s.rightImg;
    //             slideNumbers.textContent = s.number;
    //             slideTitle.textContent = s.title;
    //             text.textContent = s.text;
    //             gsap.fromTo(".overlay", {
    //                 xPercent:0,
    //                 duration: 1,
    //                 ease: "power2.out"
    //             }, {
    //                 xPercent: bolean? 100 : -100,
    //                 duration: 1,
    //                 ease: "power2.out"
    //             });
    //         }
    //     });
    // }

    function updateSlide(index, boolean) {
        const s = slides[index];

        const tl = gsap.timeline({
            defaults: {
                duration: 0.6,
                ease: "power2.inOut"
            }
        });

        tl.to(".overlay", {
            xPercent: boolean ? 100 : -100,
            opacity: 1,
        },">");
        tl.set(".overlay", { xPercent: boolean ? -100 : 100,},">");
        tl.add(() => {
            leftImg.src = s.leftImg;
            rightImg.src = s.rightImg;
            slideNumbers.textContent = s.number;
            slideTitle.textContent = s.title;
            text.textContent = s.text;
            sliderLink.href = s.redirectLink;
        });
    }






    updateSlide(current, true);


    indicators[0].addEventListener("click", () => {
        current = (current - 1 + slides.length) % slides.length;
        updateSlide(current, true);
    });


    indicators[1].addEventListener("click", () => {
        current = (current + 1) % slides.length;
        updateSlide(current, false);
    });
});
</script>