<section id="scrolledInformation">
    <div class="wrapper">
        <aside id="scrolledInformationSidebar">

            <div class="asideImageConainer">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2022-02-07-10-13-46.jpg"
                    alt="image">

                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/02/Stone-Circle-Turin-scaled.jpg"
                    alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2022-01-28-12-34-16.jpg"
                    alt="image">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Wedding-107-of-486.webp"
                    alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/Fireworks-Display-2-1.jpg"
                    alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/02/front-scaled.jpeg"
                    alt="image">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/65711269-081f-4f13-b5b4-6c85e9a4d50b.webp"
                    alt="image">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Wedding-107-of-486.webp"
                    alt="image">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/65711269-081f-4f13-b5b4-6c85e9a4d50b.webp"
                    alt="image">
                    <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/02/Stone-Circle-Turin-scaled.jpg"
                    alt="image">
                <img src="https://turincastle.previewmysite.online/wp-content/uploads/2026/03/PHOTO-2022-01-28-12-34-16.jpg"
                    alt="image">
                <img src="https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Wedding-107-of-486.webp"
                    alt="image">

            </div>
        </aside>
        <div id="scrolledInformationContent">
            <div class="scrolledInformationContentInner">
                <div class="myline myline1"></div>
                <div class="myline myline2"></div>
                <h3 class="lines">this is the main content</h3>
                <p class="lines">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt suscipit ducimus
                    exercitationem
                    cupiditate nam repudiandae illum quis deleniti inventore quod?</p>
                <button class="hoverBtn"><span>Read More</span></button>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
<script>
 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(ScrollTrigger)
  // gsap code here!
   let images = document.querySelector(".asideImageConainer");
  let totalHeight = images.scrollHeight;
  const trigerImages = images.querySelectorAll('img')

  console.log(trigerImages);
  


  gsap.to(images, {
    y: () => -(totalHeight - window.innerHeight),
    ease: "none",
    scrollTrigger: {
      trigger: "#scrolledInformation",
      start: "top 50",
      end: () => "+=2200",
      // end: () => "+=" + (totalHeight - window.innerHeight * 5),
      scrub: true,
      pin: true,
      pinSpacing: true,
    }
  });


  let texts = [
    { h3: "Our Transportation", p: "Turin Castle offers private luxury helicopter transportation, ensuring guests arrive in style with breathtaking aerial views. This exclusive service combines convenience and elegance, making every journey part of the unforgettable castle experience.." },
    { h3: "Cenemetic and Photography", p: "This is the second text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "Feast and weddings", p: "This is the third text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "Sporting and fishing", p: "This is the third text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "Food and luxury", p: "This is the third text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "Art and culture", p: "This is the third text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." }
  ];
  let triggerIndexes = [1, 2, 4, 6, 8, 10];
  triggerIndexes.forEach((imgIndex, i) => {
    ScrollTrigger.create({
      trigger: trigerImages[imgIndex],
      start: "center center",
      onEnter: () => {
        updateText(texts[i].h3, texts[i].p);
      },
      onLeaveBack: () => {
        let prev = texts[i - 1] || texts[0];
        updateText(prev.h3, prev.p);
      }
    });
  });
  function updateText(h3Text, pText) {
    let h3 = document.querySelector("#scrolledInformationContent h3");
    let p = document.querySelector("#scrolledInformationContent p");
    gsap.to([h3, p], {
      opacity: 0,
      duration: 0.3,
      onComplete: () => {
        h3.textContent = h3Text;
        p.textContent = pText;
        gsap.to([h3, p], { opacity: 1, duration: 0.3 });

        gsap.from('.myline', {
          transformOrigin: "left",
          scaleX: 0,
          duration: 1,
          stagger: 0.2,
          ease: "power3.out"
        }, "<");
      }
    });

  }
 });

</script>
