$(document).ready(function() {
    function delay(n) {
        n = n || 2000;
        return new Promise((done) => {
            setTimeout(() => {
                done();
            }, n);
        });
    }

    function pageTransition() {
        var tl = gsap.timeline();
        tl.to(".loading-screen", {
            duration: 1,
            width: "100%",
            left: "0%",
            ease: "Expo.easeInOut"
        });

        tl.to(".loading-screen", {
            duration: 0.8,
            width: "100%",
            left: "100%",
            ease: "Expo.easeInOut",
            delay: 0.3
        });

        tl.set(".loading-screen", {
            left: "-100%",
        });
    }

    function contentAnimation() {
        var tl = gsap.timeline();
        tl.from(".animate-this", {
            duration: 0.8,
            y: 30,
            opacity: 0,
            delay: 0.3
        });
    }

    function enterHome() {
        var tl = gsap.timeline();
        tl.to(".home .loading-screen-first", {
            duration: 1,
            width: "100%",
            left: "0%",
            ease: "Expo.easeInOut"
        });

        tl.set(".p-load-first", {
            opacity: 0,
            y: 60
        });

        tl.to(".p-load-first", {
            opacity: 1,
            y: 0,
            ease: "power3.out"
        });

        tl.to(".p-load-first", {
            delay: 0.8,
            opacity: 0,
            y: -60,
            ease: "power3.out"
        });

        tl.to(".home .loading-screen-first", {
            duration: 1,
            width: "100%",
            left: "100%",
            ease: "Expo.easeInOut",
            delay: 0.1
        });

        tl.set(".home .loading-screen-first", {
            left: "-100%",
        });
    }

    function contentAnimationHome() {
        var tl = gsap.timeline();
        tl.from(".home .animate-this", {
            delay: 3,
            duration: 0.8,
            y: 30,
            opacity: 0,
        });
    }

    function test() {
        var tl = gsap.timeline();
        tl.from(".home", {
            delay: 3,
            duration: 0.8,
            y: 30,
            opacity: 0,
        });
    }

    barba.hooks.enter(() => {
        window.scrollTo(0, 0);
    });

    barba.init({
        sync: true,
        transitions: [{
                name: 'page-transition',
                async leave(data) {
                    const done = this.async();
                    pageTransition();
                    await delay(1000);
                    done();
                },

                async enter(data) {
                    contentAnimation();
                }
            },
            {
                name: 'self',
                enter(data) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: "#main",
                        ease: "Expo.easeInOut"
                    });
                },
            },
            {
                name: 'first-enter-website',
                async once(data) {
                    enterHome();
                    contentAnimationHome();
                }
            }
        ]
    });
});
