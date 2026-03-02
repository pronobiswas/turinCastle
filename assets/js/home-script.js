
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


  let splitTitle = SplitText.create(heroTitle, { type: "lines,", mask: "lines", linesClass: "lines" });
  let splitHeading = SplitText.create(heroHeading, { type: "lines", mask: "lines", linesClass: "lines" });
  let splitDescription = SplitText.create(heroDescription, { type: "lines,words", wordsClass: "words" });

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
      grid: [7, 15],
      from: "center",
      axis: "x",
      ease: "power2.in",
      amount: 1.5
    }
  });

  // =========line effect===========




  // $$$$$$$$$$$$$$  Footer $$$$$$$$$$$$$$
  const custom_footer = document.getElementById("custom_footer");
  const footer_logo = custom_footer.querySelector(".footer_logo");
  const footer_underline = custom_footer.querySelector(".underline");
  const footer_address = custom_footer.querySelector(".address");
  const footer_menu = custom_footer.querySelector(".footer_menu");
  const footer_social = custom_footer.querySelector(".social_media");
  const footer_separator = custom_footer.querySelector(".footer_separator");
  const footnote = custom_footer.querySelector(".footnote");

  // const lineEffectText = document.querySelectorAll(".line_effect");
  // lineEffectText.forEach((text) => {
  //     let split = SplitText.create(text, { type: "lines,words, chars" ,mask: "lines"});
  //     gsap.from(split.lines, {
  //         yPercent: 100,
  //         duration: 1,
  //         stagger: 0.1,
  //         scrollTrigger: {
  //             trigger: text,
  //             start: "top 85%",
  //             end: "+=100",
  //             scrub: true,
  //             markers: true,
  //         }
  //         });
  // });

  if (custom_footer) {
    let footerTimeline = gsap.timeline({
      scrollTrigger: {
        trigger: custom_footer,
        start: "top 55%",
        end: "+=500",
        scrub: true,
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


  // &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

  let images = document.querySelector(".asideImageConainer");
  let totalHeight = images.scrollHeight;

  // Vertical scroll for images
  gsap.to(images, {
    y: () => -(totalHeight - window.innerHeight),
    ease: "none",
    scrollTrigger: {
      trigger: "#scrolledInformation",
      start: "top 80",
      // end: () => "+=" + (totalHeight - window.innerHeight),
      end: () => "+=" + (totalHeight - window.innerHeight*2),
      scrub: true,
      pin: true,
      pinSpacing: true,
    }
  });

  // Text blocks (only 3 changes)
  let texts = [
    { h3: "First content block", p: "This is the first text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "Second content block", p: "This is the second text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "Third content block", p: "This is the third text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." },
    { h3: "fourth content block", p: "This is the third text change...Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate." }
  ];
  let triggerIndexes = [1, 3, 4, 5];
  triggerIndexes.forEach((imgIndex, i) => {
    ScrollTrigger.create({
      trigger: images.children[imgIndex],
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
  // &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

});
