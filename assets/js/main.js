// ========== Animate Image ==========
document.addEventListener("DOMContentLoaded", function () {
    const imageContainer = document.querySelectorAll('.imageContainer');
    const ContainerImage = document.querySelectorAll('.imageContainer img');
    const maskLine = document.querySelectorAll('.maskLine h2');
    const splitParagraph = document.querySelectorAll('.splitParagraph p');

    console.log("imageContainer", imageContainer);
    console.log("ContainerImage", ContainerImage);

    window.addEventListener("load", function () {
        // Animate images
        ContainerImage.forEach((img) => {
            let div = img.parentElement;
            div.style.width = "100%";
                 div.style.height = "100%";
             img.style.objectFit = "cover"; 
                img.style.width = "100%";
                 img.style.height = "100%";
            
            gsap.from(img, {
                opacity: 0.5,
                scale: 0.7,
                duration: 1,
                scrollTrigger: {
                    trigger: img,
                    start: "top 80%",
                    end: "+=100",
                    scrub: true,
                }
            });
        });

        // ===== SplitText Animation =====
        if (typeof SplitText !== "undefined") {
            splitParagraph.forEach((elm) => {
                const split = new SplitText(elm, { type: "lines,words,chars" });
                gsap.from(split.words, {
                    scrollTrigger: {
                        trigger: elm,
                        start: "top 80%",
                        end: "+=300",
                        scrub:true,
                    },
                    rotateX: 270,
                    stagger: 0.05,
                    duration: 0.1
                });
            });

            maskLine.forEach((heading) => {
                const split = new SplitText(heading, { type: "lines,words,chars",mask: "lines", });
                gsap.from(split.lines, {
                    scrollTrigger: {
                        trigger: heading,
                        start: "top 80%",
                        end: "+=200",
                        scrub: true,
                    },
                    yPercent: 100,
                    stagger: 0.05,
                    duration: 1,
                    ease: "power3.out"
                });
            });
        } else {
            console.warn("SplitText plugin not found. Make sure it's enqueued!");
        }
    }, false);
});
