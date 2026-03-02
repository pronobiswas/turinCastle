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
                        <button class="hoverBtn">
                            <span>Explore</span>
                        </button>
                    </div>
                </div>
            </aside>

            <div class="rightslider">
                <div class="sliderRightImage">
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
            title: "Lorem ipsum",
            heading: "Slide One Heading",
            text: "This is the first slide content..."
        },
        {
            leftImg: "https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Wedding-107-of-486.webp",
            rightImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/02/Stone-Circle-Turin-scaled.jpg",
            number: "2/4",
            title: "Dolor sit amet",
            heading: "Slide Two Heading",
            text: "This is the second slide content..."
        },
        {
            leftImg: "https://alex.techhunter2024.online/wp-content/uploads/2026/02/65711269-081f-4f13-b5b4-6c85e9a4d50b.webp",
            rightImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/02/PHOTO-2026-02-05-13-49-26.jpg",
            number: "3/4",
            title: "Consectetur elit",
            heading: "Slide Three Heading",
            text: "This is the third slide content..."
        },
        {
            leftImg: "https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Wedding-107-of-486.webp",
            rightImg: "https://turincastle.previewmysite.online/wp-content/uploads/2026/02/Fireworks-Display.jpg",
            number: "4/4",
            title: "Maxime voluptas",
            heading: "Slide Four Heading",
            text: "This is the fourth slide content..."
        }
    ];

    let current = 0;

    // DOM references
    const leftImg = document.querySelector(".slideImage img");
    const rightImg = document.querySelector(".sliderRightImage img");
    const slideNumbers = document.querySelector(".slideNumbers");
    const slideTitle = document.querySelector(".slideTitle");
    // const heading = document.querySelector(".homesliderHeading");
    const text = document.querySelector(".slideContent p");

    const indicators = document.querySelectorAll(".slideIndicate");

    //   function updateSlide(index) {
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

        // Animate overlay in
        tl.to(".overlay", {
            opacity: 1,
            xPercent: boolean ? -100 : 100,
        });

        // Swap content once overlay covers
        tl.add(() => {
            leftImg.src = s.leftImg;
            rightImg.src = s.rightImg;
            slideNumbers.textContent = s.number;
            slideTitle.textContent = s.title;
            text.textContent = s.text;
        });

        // Animate overlay out
        // tl.to(".overlay", {
        //     xPercent: boolean ? 100 : -100,
        //     opacity: 1,
        // });
        tl.set(".overlay", { xPercent: boolean ? -100 : 100,});
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