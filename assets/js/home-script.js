
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

  let splitTitle = SplitText.create(heroTitle, { type: "lines,", mask: "lines", linesClass: "lines" });
  let splitHeading = SplitText.create(heroHeading, { type: "lines", mask: "lines", linesClass: "lines" });

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

  // gsap.from(splitDescription.words, {
  //   yPercent: 100,
  //   opacity: 0,
  //   duration: 1,
  //   stagger: {
  //     grid: [7, 15],
  //     from: "center",
  //     axis: "x",
  //     ease: "power2.in",
  //     amount: 1.5
  //   }
  // });

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


  // &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

});
