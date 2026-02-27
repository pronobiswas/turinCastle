// const asideImage =[
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/image-23.webp',
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/65711269-081f-4f13-b5b4-6c85e9a4d50b.webp',
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/IMG_5973-scaled-e1771448882950.webp',
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/Turin-Wedding-107-of-486.webp'
// ]

// const slideContentImage =[
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/PHOTO-2026-02-05-13-53-47-5.webp',
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/PHOTO-2026-02-05-13-53-47-9-1.webp',
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/PHOTO-2024-11-20-14-36-07.webp',
//     'https://alex.techhunter2024.online/wp-content/uploads/2026/02/PHOTO-2026-02-05-13-53-47-5.webp'
// ]
// (function() {
//     if (!window.gsap || !window.ScrollTrigger) return;

//     gsap.registerPlugin(ScrollTrigger);
//     const scrolledInformation= document.getElementById("scrolledInformation");
//     const scrolledInformationSidebar= document.getElementById("scrolledInformationSidebar");
//     const scrolledInformationContent= document.getElementById("scrolledInformationContent");
//     console.log(scrolledInformation,scrolledInformationSidebar,scrolledInformationContent);
    
//     const tl = gsap.timeline({
//         scrollTrigger: {
//             trigger: scrolledInformation,
//             start: "top 10%",
//             end: "+=500",
//             scrub: 1,
//             pin: true,
//             pinSpacing: true,
//             markers: true,
//         }
//     });
//     tl.to(scrolledInformationSidebar, { 
//         backgroundColor: "var(--primary-color)",
//         duration: 1,
//      })
//       .to(scrolledInformationContent, { 
//         backgroundColor: "var(--primary-color)",
//         duration: 1,
//       }, "<");
        
    



    
// })();
document.addEventListener("DOMContentLoaded", function () {

    if (!window.gsap || !window.ScrollTrigger) return;

    gsap.registerPlugin(ScrollTrigger);

    const scrolledInformation = document.getElementById("scrolledInformation");
    const scrolledInformationSidebar = document.getElementById("scrolledInformationSidebar");
    const scrolledInformationContent = document.getElementById("scrolledInformationContent");
    const asideImageConainer = document.querySelector(".asideImageConainer");

    if (!scrolledInformation || !scrolledInformationSidebar || !scrolledInformationContent) return;

    // =========line effect===========
    const heroTitle = document.querySelector(".heroTitle"); 
    const heroHeading = document.querySelector(".heroHeading"); 
    const heroDescription = document.querySelector(".heroDescription"); 
    

    let splitTitle = SplitText.create(heroTitle, { type: "lines,words, chars" ,mask: "lines"});
    let splitHeading = SplitText.create(heroHeading, { type: "lines,words, chars" ,mask: "lines",});
    let splitDescription = SplitText.create(heroDescription, { type: "lines,words, chars" });

    gsap.from(splitTitle.lines, {
        yPercent: 100,
        opacity: 0,
        duration: 1,
        stagger: 0.1
    });

    gsap.from(splitHeading.lines, {
        yPercent: 100,
        opacity: 0,
        duration: 1,
        stagger: 0.1
    });

    gsap.from(splitDescription.words, {
        yPercent: 100,
        opacity: 0,
        duration: 1,
        stagger: {
    grid: [7,15],
    from: "center",
    axis: "x",
    ease: "power2.in",
    amount: 1.5
  }
    });

    // =========line effect===========

    // **********spiral text*************
    const spiralText = document.querySelectorAll(".spiral_text");
    // **********spiral text*************

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: scrolledInformation,
            start: "top 9%",
            end: "+=500",
            scrub: 1,
            pin: true,
            pinSpacing: true,
            markers: true,
        }
    });

    tl.to(asideImageConainer, { 
        yPercent: -70,
        duration: 1,
    })
    .to(scrolledInformationContent, { 
        backgroundColor: "var(--primary-color)",
        duration: 1,
    }, "<");


    // $$$$$$$$$$$$$$  Footer $$$$$$$$$$$$$$
    const custom_footer = document.getElementById("custom_footer");
    const footer_logo = custom_footer.querySelector(".footer_logo");
    const footer_underline = custom_footer.querySelector(".underline");
    const footer_address = custom_footer.querySelector(".address");
    const footer_menu = custom_footer.querySelector(".footer_menu");
    const footer_social = custom_footer.querySelector(".social_media");
    const footer_separator = custom_footer.querySelector(".footer_separator");
    const footnote = custom_footer.querySelector(".footnote");

    const lineEffectText = document.querySelectorAll(".line_effect");
    lineEffectText.forEach((text) => {
        let split = SplitText.create(text, { type: "lines,words, chars" ,mask: "lines"});
        gsap.from(split.lines, {
            yPercent: 100,
            duration: 1,
            stagger: 0.1,
            scrollTrigger: {
                trigger: text,
                start: "top 85%",
                end: "+=100",
                scrub: true,
                markers: true,
            }
            });
    });

    if(custom_footer){
        let footerTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: custom_footer,
                start: "top 55%",
                end: "+=500",
                scrub: true,
                markers: true,
            }
        });
        footerTimeline.from(footer_logo, { scale: 0.5, duration: 1 })
        .from(footer_underline, { scaleX: 0, transformOrigin: "center center", duration: 1 }, "<")
        .from(footer_address, { y: 50, opacity: 0, duration: 1 }, "<")
        .from(footer_menu, { y: 50, opacity: 0, duration: 1 }, "<")
        .from(footer_social, { y: 50, opacity: 0, duration: 1 }, "<")
        .from(footer_separator, { scaleX: 0, transformOrigin: "left center", duration: 1 }, "<")
        .from(footnote, { y: 50, opacity: 0, duration: 1 }, "<");
    }

    // $$$$$$$$$$$$$$  Footer $$$$$$$$$$$$$$

});
