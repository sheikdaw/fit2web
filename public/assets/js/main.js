(function ($) {
    "use strict";

    $(document).ready(function () {
        /*-----------------------------------
           Mobile Menu
        -----------------------------------*/
        $("#mobile-menu").meanmenu({
            meanMenuContainer: ".mobile-menu",
            meanScreenWidth: "1199",
            meanExpand: ['<i class="far fa-plus"></i>'],
        });

        /*-----------------------------------
          Sidebar Toggle
        -----------------------------------*/
        $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });
        $(".sidebar__toggle").on("click", function () {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
        });

        /*-----------------------------------
          Body Overlay
        -----------------------------------*/
        $(".body-overlay").on("click", function () {
            $(".offcanvas__area").removeClass("offcanvas-opened");
            $(".df-search-area").removeClass("opened");
            $(".body-overlay").removeClass("opened");
        });

        /*-----------------------------------
          Sticky Header
        -----------------------------------*/
        $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $("#header-sticky").addClass("sticky");
            } else {
                $("#header-sticky").removeClass("sticky");
            }
        });

        /*-----------------------------------
          Counterup
        -----------------------------------*/
        if ($(".counter-number").length) {
            $(".counter-number").counterUp({
                delay: 10,
                time: 1000,
            });
        }

        /*-----------------------------------
          Wow Animation
        -----------------------------------*/
        new WOW().init();

        /*-----------------------------------
          Set Background Image & Mask
        -----------------------------------*/
        if ($("[data-bg-src]").length > 0) {
            $("[data-bg-src]").each(function () {
                var src = $(this).attr("data-bg-src");
                $(this).css("background-image", "url(" + src + ")");
                $(this).removeAttr("data-bg-src").addClass("background-image");
            });
        }

        if ($("[data-mask-src]").length > 0) {
            $("[data-mask-src]").each(function () {
                var mask = $(this).attr("data-mask-src");
                $(this).css({
                    "mask-image": "url(" + mask + ")",
                    "-webkit-mask-image": "url(" + mask + ")",
                });
                $(this).addClass("bg-mask");
                $(this).removeAttr("data-mask-src");
            });
        }

        /*-----------------------------------
         Global Slider
        -----------------------------------*/
        function applyAnimationProperties() {
            $("[data-ani]").each(function () {
                var animationClass = $(this).data("ani");
                $(this).addClass(animationClass);
            });

            $("[data-ani-delay]").each(function () {
                var delay = $(this).data("ani-delay");
                $(this).css("animation-delay", delay);
            });
        }

        // Call the animation properties function
        applyAnimationProperties();

        // Function to initialize Swiper
        function initializeSwiper(sliderContainer) {
            var sliderOptions = sliderContainer.data("slider-options");

            console.log("Slider options: ", sliderOptions);

            var previousArrow = sliderContainer.find(".slider-prev");
            var nextArrow = sliderContainer.find(".slider-next");
            var paginationElement = sliderContainer.find(".slider-pagination");
            var numberedPagination = sliderContainer.find(
                ".slider-pagination.pagi-number"
            );

            var paginationStyle = sliderOptions["paginationType"] || "bullets";
            var autoplaySettings = sliderOptions["autoplay"] || {
                delay: 6000,
                disableOnInteraction: false,
            };

            var defaultSwiperConfig = {
                slidesPerView: 1,
                spaceBetween: sliderOptions["spaceBetween"] || 24,
                loop: sliderOptions["loop"] !== false,
                speed: sliderOptions["speed"] || 1000,
                initialSlide: sliderOptions["initialSlide"] || 0,
                centeredSlides: !!sliderOptions["centeredSlides"],
                effect: sliderOptions["effect"] || "slide",
                fadeEffect: {
                    crossFade: true,
                },
                autoplay: autoplaySettings,
                navigation: {
                    nextEl: nextArrow.length ? nextArrow.get(0) : null,
                    prevEl: previousArrow.length ? previousArrow.get(0) : null,
                },
                pagination: {
                    el: paginationElement.length
                        ? paginationElement.get(0)
                        : null,
                    type: paginationStyle,
                    clickable: true,
                    renderBullet: function (index, className) {
                        var bulletNumber = index + 1;
                        var formattedNumber =
                            bulletNumber < 10
                                ? "0" + bulletNumber
                                : bulletNumber;
                        if (numberedPagination.length) {
                            return (
                                '<span class="' +
                                className +
                                ' number">' +
                                formattedNumber +
                                "</span>"
                            );
                        } else {
                            return (
                                '<span class="' +
                                className +
                                '" aria-label="Go to Slide ' +
                                formattedNumber +
                                '"></span>'
                            );
                        }
                    },
                },
                on: {
                    slideChange: function () {
                        setTimeout(
                            function () {
                                this.params.mousewheel.releaseOnEdges = false;
                            }.bind(this),
                            500
                        );
                    },
                    reachEnd: function () {
                        setTimeout(
                            function () {
                                this.params.mousewheel.releaseOnEdges = true;
                            }.bind(this),
                            750
                        );
                    },
                },
            };

            var finalConfig = $.extend({}, defaultSwiperConfig, sliderOptions);
            console.log("Complete Swiper options: ", finalConfig);

            // Initialize the Swiper instance
            return new Swiper(sliderContainer.get(0), finalConfig);
        }

        // Initialize Swipers on page load
        var swiperInstances = [];
        $(".mugli-slider").each(function () {
            var sliderContainer = $(this);
            var swiperInstance = initializeSwiper(sliderContainer);
            swiperInstances.push(swiperInstance);
        });

        // Bootstrap tab show event
        $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
            var targetTab = $(e.target).attr("href");
            $(targetTab)
                .find(".et-slider")
                .each(function () {
                    var sliderContainer = $(this);
                    if (!sliderContainer[0].swiper) {
                        initializeSwiper(sliderContainer);
                    } else {
                        sliderContainer[0].swiper.update();
                    }
                });
        });

        // Add click event handlers for external slider arrows based on data attributes
        $("[data-slider-prev], [data-slider-next]").on("click", function () {
            var targetSliderSelector =
                $(this).data("slider-prev") || $(this).data("slider-next");
            var targetSlider = $(targetSliderSelector);

            if (targetSlider.length) {
                var swiper = targetSlider[0].swiper;

                if (swiper) {
                    if ($(this).data("slider-prev")) {
                        swiper.slidePrev();
                    } else {
                        swiper.slideNext();
                    }
                }
            }
        });

        /*-----------------------------------
           Back to top
        -----------------------------------*/
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 20) {
                $("#back-top").addClass("show");
            } else {
                $("#back-top").removeClass("show");
            }
        });

        $(document).on("click", "#back-top", function () {
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });

        /*-----------------------------------
          MagnificPopup  view
        -----------------------------------*/
        $(".popup-video").magnificPopup({
            type: "iframe",
            removalDelay: 260,
            mainClass: "mfp-zoom-in",
        });

        $(".img-popup").magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });

        /*-----------------------------------
             NiceSelect
        -----------------------------------*/
        if ($(".single-select").length) {
            $(".single-select").niceSelect();
        }

        /*-----------------------------------
             Mouse Cursor
        -----------------------------------*/
        function mousecursor() {
            if ($("body")) {
                const e = document.querySelector(".cursor-inner"),
                    t = document.querySelector(".cursor-outer");
                let n,
                    i = 0,
                    o = !1;
                (window.onmousemove = function (s) {
                    o ||
                        (t.style.transform =
                            "translate(" +
                            s.clientX +
                            "px, " +
                            s.clientY +
                            "px)"),
                        (e.style.transform =
                            "translate(" +
                            s.clientX +
                            "px, " +
                            s.clientY +
                            "px)"),
                        (n = s.clientY),
                        (i = s.clientX);
                }),
                    $("body").on(
                        "mouseenter",
                        "a, .cursor-pointer",
                        function () {
                            e.classList.add("cursor-hover");
                            t.classList.add("cursor-hover");
                        }
                    ),
                    $("body").on(
                        "mouseleave",
                        "a, .cursor-pointer",
                        function () {
                            ($(this).is("a") &&
                                $(this).closest(".cursor-pointer").length) ||
                                (e.classList.remove("cursor-hover"),
                                t.classList.remove("cursor-hover"));
                        }
                    ),
                    (e.style.visibility = "visible"),
                    (t.style.visibility = "visible");
            }
        }
        $(function () {
            mousecursor();
        });

        /*-----------------------------------
            Progress Bar
        -----------------------------------*/
        $(".progress-bar").each(function () {
            var $this = $(this);
            var progressWidth =
                $this.attr("style").match(/width:\s*(\d+)%/)[1] + "%";

            $this.waypoint(
                function () {
                    $this.css({
                        "--progress-width": progressWidth,
                        animation: "animate-positive 1.8s forwards",
                        opacity: "1",
                    });
                },
                { offset: "75%" }
            );
        });

        /*-----------------------------------
            Range slider
        -----------------------------------*/
        function getVals() {
            let parent = this.parentNode;
            let slides = parent.getElementsByTagName("input");
            let slide1 = parseFloat(slides[0].value);
            let slide2 = parseFloat(slides[1].value);
            if (slide1 > slide2) {
                let tmp = slide2;
                slide2 = slide1;
                slide1 = tmp;
            }

            let displayElement =
                parent.getElementsByClassName("rangeValues")[0];
            displayElement.innerHTML = "$" + slide1 + " - $" + slide2;
        }

        window.onload = function () {
            let sliderSections =
                document.getElementsByClassName("range-slider");
            for (let x = 0; x < sliderSections.length; x++) {
                let sliders = sliderSections[x].getElementsByTagName("input");
                for (let y = 0; y < sliders.length; y++) {
                    if (sliders[y].type === "range") {
                        sliders[y].oninput = getVals;
                        sliders[y].oninput();
                    }
                }
            }
        };

        progressBar: () => {
            const pline = document.querySelectorAll(".progressbar.line");
            const pcircle = document.querySelectorAll(
                ".progressbar.semi-circle"
            );
            pline.forEach((e) => {
                const line = new ProgressBar.Line(e, {
                    strokeWidth: 6,
                    trailWidth: 6,
                    duration: 3000,
                    easing: "easeInOut",
                    text: {
                        style: {
                            color: "inherit",
                            position: "absolute",
                            right: "0",
                            top: "-30px",
                            padding: 0,
                            margin: 0,
                            transform: null,
                        },
                        autoStyleContainer: false,
                    },
                    step: (state, line) => {
                        line.setText(Math.round(line.value() * 100) + " %");
                    },
                });
                let value = e.getAttribute("data-value") / 100;
                new Waypoint({
                    element: e,
                    handler: function () {
                        line.animate(value);
                    },
                    offset: "bottom-in-view",
                });
            });
            pcircle.forEach((e) => {
                const circle = new ProgressBar.SemiCircle(e, {
                    strokeWidth: 6,
                    trailWidth: 6,
                    duration: 2000,
                    easing: "easeInOut",
                    step: (state, circle) => {
                        circle.setText(Math.round(circle.value() * 100));
                    },
                });
                let value = e.getAttribute("data-value") / 100;
                new Waypoint({
                    element: e,
                    handler: function () {
                        circle.animate(value);
                    },
                    offset: "bottom-in-view",
                });
            });
        };

        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if (
                    maxPrice - minPrice >= priceGap &&
                    maxPrice <= rangeInput[1].max
                ) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.left =
                            (minPrice / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right =
                            100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    range.style.right =
                        100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });

        /*--------------------------------------------------
         Search Popup
      ---------------------------------------------------*/
        const $searchWrap = $(".search-wrap");
        const $navSearch = $(".nav-search");
        const $searchClose = $("#search-close");

        $(".search-trigger").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).addClass("open");
        });

        $(".search-close").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).removeClass("open");
        });

        function closeSearch() {
            $searchWrap.fadeOut(200);
            $navSearch.add($searchClose).removeClass("open");
        }

        $(document.body).on("click", function (e) {
            closeSearch();
        });

        $(".search-trigger, .main-search-input").on("click", function (e) {
            e.stopPropagation();
        });

        /*--------------------------------------------------
            accordion-items
          ---------------------------------------------------*/

        $(".accordion-header").on("click", function () {
            var target = $(this).data("target");

            // Collapse all other contents
            $(".accordion-content").not(target).slideUp();
            $(".accordion-item").removeClass("active");

            // Expand the selected content
            $(target).slideToggle();
            $(this).closest(".accordion-item").toggleClass("active");
        });

        /*--------------------------------------------------
          Service Hover Js Start
      ---------------------------------------------------*/
        const getSlide =
            $(".service_content_info, .service_content_info_item").length - 1;
        const slideCal = 100 / getSlide + "%";

        $(".service_content_info_item").css({
            width: slideCal,
        });

        $(".service_content_info_item").on(
            "mouseenter mouseleave",
            function (event) {
                if (event.type === "mouseenter") {
                    $(".service_content_info_item").removeClass("active");
                    $(this).addClass("active");
                }
            }
        );

        /*--------------------------------------------------
         Quantity Plus Minus
      ---------------------------------------------------*/
        $(".quantity-plus").each(function () {
            $(this).on("click", function (e) {
                e.preventDefault();
                var $qty = $(this).siblings(".qty-input");
                var currentVal = parseInt($qty.val());
                if (!isNaN(currentVal)) {
                    $qty.val(currentVal + 1);
                }
            });
        });

        $(".quantity-minus").each(function () {
            $(this).on("click", function (e) {
                e.preventDefault();
                var $qty = $(this).siblings(".qty-input");
                var currentVal = parseInt($qty.val());
                if (!isNaN(currentVal) && currentVal > 1) {
                    $qty.val(currentVal - 1);
                }
            });
        });

        /*--------------------------------------------------
       Disable right-click
      ---------------------------------------------------*/

        // $(document).on("contextmenu", function (e) {
        //     e.preventDefault();
        // });

        /*--------------------------------------------------
         Disable specific keyboard shortcuts
        ---------------------------------------------------*/
        $(document).on("keydown", function (e) {
            // Disable Ctrl+U (View Source), Ctrl+Shift+I (DevTools), and F12
            if (
                (e.ctrlKey && (e.key === "u" || e.key === "U")) || // Ctrl+U
                (e.ctrlKey && e.shiftKey && (e.key === "I" || e.key === "i")) || // Ctrl+Shift+I
                e.key === "F12" // F12
            ) {
                e.preventDefault();
            }
        });

        /*--------------------------------------------------
        Prevent HTTrack and other crawlers
        ---------------------------------------------------*/
        const preventHTTrack = () => {
            const forbidden = ["HTTrack", "Wget", "curl", "Go-http-client"];
            if (
                forbidden.some((agent) => navigator.userAgent.includes(agent))
            ) {
                $("body").html("<h1>Access Denied</h1>");
            }
        };
        preventHTTrack();
    }); // End Document Ready Function

    /*--------------------------------------------------
         Team Hover Js Start
      ---------------------------------------------------*/
    const getSlide =
        $(".team_content_info, .team_content_info_item").length - 1;
    const slideCal = 100 / getSlide + "%";

    $(".team_content_info_item").css({
        width: slideCal,
    });

    $(".team_content_info_item").on("mouseenter mouseleave", function (event) {
        if (event.type === "mouseenter") {
            $(".team_content_info_item").removeClass("active");
            $(this).addClass("active");
        }
    });

    /*-----------------------------------
        Preloader
    -----------------------------------*/

    function loader() {
        $(window).on("load", function () {
            // Animate loader off screen
            $(".preloader").addClass("loaded");
            $(".preloader").delay(600).fadeOut();
        });
    }

    loader();
})(jQuery); // End jQuery
