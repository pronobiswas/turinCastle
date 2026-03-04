<section id="scrolledInformation">
    <div class="wrapper">
        <aside id="scrolledInformationSidebar">
            <div class="asideImageConainer">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/02/PHOTO-2026-01-25-15-38-16.jpg" alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/IMG_7539-scaled.jpeg" alt="image">

                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/Wedding-Shoot-scaled.jpg" alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/turin-hr-103-of-105-scaled.jpg" alt="image">

                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/Fireworks-Display-1.jpg" alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/Reception-September-22-201827-of-59-scaled.jpg">

                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/DJI_0234-2-scaled.jpg" alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/IMG_6918-scaled.jpeg" alt="image">

                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2026-02-05-13-53-47-10.jpg" alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/Cellar.jpg" alt="image">

                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2026-01-27-18-38-58.jpg" alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/02/PHOTO-2026-02-05-13-54-52-2.jpg" alt="image">
            </div>
        </aside>
        <div id="scrolledInformationContent">
            <div class="scrolledInformationContentInner">
                <div class="myline myline1"></div>
                <div class="myline myline2"></div>
                <h3 class="lines">this is the main content</h3>
                <p class="lines">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt suscipit ducimus
                    exercitationem cupiditate nam repudiandae illum quis deleniti inventore quod?</p>
                <button class="hoverBtn"><span class="buttonText">Read More</span></button>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    const images = document.querySelector(".asideImageConainer");
    const totalHeight = images.scrollHeight;
    const scrollDistance = 2200;

    const texts = [
        { h3: "Transportation Facility",    p: "“Arrive in style — whether by your own chopper or ours, Turin Castle offers dedicated helicopter landing and parking facilities.”" , btnText:"Enquire Now" , redirectLink : ""},
        { h3: "Cinematic and Photography",  p: "“Every moment at Turin Castle is a masterpiece — a cinematic setting where timeless beauty meets unforgettable photography.”" ,btnText:"Request a Proposal" , redirectLink : ""},
        { h3: "Feasts and Weddings",        p: "“Celebrate in grandeur at Turin Castle — arrange your own unforgettable wedding or indulge in a pre‑arranged feast, where every detail is crafted to perfection.”" ,btnText:"Explore More" , redirectLink : "" },
        { h3: "Sporting",       p: "“From championship golf and private casino evenings to exhilarating winter skiing and countryside pursuits, Turin Castle offers sporting adventures that blend luxury with excitement.”" ,btnText:"Explore More" , redirectLink : ""},
        { h3: "Dine and Wine",            p: "Indulge in a culinary journey at Turin Castle, where our expert chefs craft exquisite menus using the finest seasonal and local ingredients." ,btnText:"Explore More" , redirectLink : ""},
        { h3: "Art and Culture",            p: "Immerse yourself in the rich artistic and cultural heritage of Turin Castle — from curated exhibitions to live performances in a truly historic setting." ,btnText:"Explore More" , redirectLink : ""}
    ];

    // Evenly distribute text changes across the total scroll distance.
    // Each text occupies an equal fraction of the scroll (1/6 of 2200 ≈ 366px each).
    const stepSize = scrollDistance / texts.length;

    let currentIndex = -1;

    function updateText(index) {
        if (index === currentIndex) return;
        currentIndex = index;

        const h3 = document.querySelector("#scrolledInformationContent h3");
        const p  = document.querySelector("#scrolledInformationContent p");
        const buttonText  = document.querySelector("#scrolledInformationContent .buttonText");

        gsap.to([h3, p , buttonText], {
            opacity: 0,
            duration: 0.3,
            onComplete: () => {
                h3.textContent = texts[index].h3;
                p.textContent  = texts[index].p;
                buttonText.textContent  = texts[index].btnText;

                gsap.to([h3, p ,buttonText], { opacity: 1, duration: 0.3 });

                gsap.from('.myline', {
                    transformOrigin: "left",
                    scaleX: 0,
                    duration: 1,
                    stagger: 0.2,
                    ease: "power3.out"
                });
            }
        });
    }

    // Main pin + scroll animation
    gsap.to(images, {
        y: () => -(totalHeight - window.innerHeight),
        ease: "none",
        scrollTrigger: {
            trigger: "#scrolledInformation",
            start: "top 50",
            end: () => "+=" + scrollDistance,
            scrub: true,
            pin: true,
            pinSpacing: true,
            onUpdate: (self) => {
                const scrolled = self.progress * scrollDistance;
                const index = Math.min(
                    Math.floor(scrolled / stepSize),
                    texts.length - 1
                );
                updateText(index);
            }
        }
    });
});
</script>