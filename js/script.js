/*
 *  *
 * Website integration scripts
 */

"use strict";

jQuery(document).ready(function ($) {
  initSliders();
  menuPanel();
  // eventreadMore();
  // coreFunMore();
  // aboutUsMore();

  var yourNavigation = $(".nav-section");
  let stickyDiv = "sticky";
  let yourHeader = $(".js-height-a").height();
  // console.log(yourHeader);
  // $(window).scroll(function() {
  //     if ($(this).scrollTop() > yourHeader) {
  //         yourNavigation.addClass(stickyDiv);
  //     } else {
  //         yourNavigation.removeClass(stickyDiv);
  //     }
  // });

  // function aboutUsMore() {
  //     $('.who-we-are-text').readmore({
  //         speed: 1000,
  //         collapsedHeight: 400,
  //         moreLink: '<a href="#" class="loadmore more text-white btn btn-info w-100 rounded-0 my-3 about-us-readmore-dt" style="">Show More content </a>',
  //         lessLink: '<a href="#" class="loadmore less text-white btn btn-info w-100 rounded-0 my-3 about-us-readmore-dt">Show Less content </a>',
  //     });
  // }

  // function pauseModalVideo() {
  //     var idArrayVideo = $(".home-video").map(function() {
  //         //return this.id
  //         //console.log("#"+this.id);

  //         var ids = "#" + this.id;

  //         $(ids).on('hidden.bs.modal', function(e) {
  //             $(ids + " iframe").attr("src", $(ids + " iframe").attr("src"));
  //         });

  //     }).get().join(',');
  // };

  function menuPanel() {
    var toggle_button = $(".mobile-toggler");
    var menu_panel = $(".m-menu-panel");
    var close_panel = $(".close-menu");
    var menu_backdrop = $(".menu-backdrop");

    toggle_button.on("click", function () {
      menu_panel.addClass("menu-visible");
      menu_backdrop.addClass("visible");
      close_panel.css({
        display: "block",
      });

      new Mmenu("#const-menu", {
        offCanvas: false,
      });
    });

    close_panel.on("click", function () {
      menu_panel.removeClass("menu-visible");
      menu_backdrop.removeClass("visible");
      close_panel.css({
        display: "none",
      });
    });
  }

  $(".our-partners-slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    // centerPadding: '60px',
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    draggable: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  function initSliders() {
    var landing_slider = $(".landing-area-carousel");
    var just_now = $(".just-now-carousel");
    var hp_prod_slider = $(".hp-prod-carousel");

    let i = 0;
    landing_slider.on("changed.owl.carousel", function (event) {
      // console.log('owl transitions'+i++);
      $.adaptiveBackground.run();
    });

    function callback(event) {
      $.adaptiveBackground.run();
    }
    landing_slider.owlCarousel({
      loop: false,
      margin: 0,
      dots: true,
      animateIn: "fadeIn",
      animateOut: "fadeOut",
      touchDrag: false,
      mouseDrag: true,
      nav: false,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
      ],
      autoplay: false,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
      onInitialize: callback,
      onTranslate: callback,
    });

    let classCarousel = ".hype-scenrio-carousel";
    var selectCarousel = $(classCarousel);

    /* 1. */
    let i1;
    for (i1 = selectCarousel.children().length - 1; i1 > 1; i1--) {
      selectCarousel
        .children(":nth-of-type(" + i1 + ")")
        .clone()
        .appendTo(classCarousel);
    }

    selectCarousel.owlCarousel({
      loop: true,
      // margin: 25,
      dots: true,
      animateIn: "fadeIn",
      animateOut: "fadeOut",
      touchDrag: false,
      mouseDrag: false,
      nav: true,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
      ],
      autoplay: true,
      // autoplayTimeout: 5000,
      rewind: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });


      just_now.owlCarousel({
      loop: true,
      margin: 25,
      dots: true,
      animateIn: "fadeIn",
      animateOut: "fadeOut",
      touchDrag: false,
      mouseDrag: false,
      nav: false,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
      ],
      autoplay: false,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 5,
        },
      },
    });
  }

    hp_prod_slider.owlCarousel({
      loop: true,
      margin: 25,
      dots: true,
      animateIn: "fadeIn",
      animateOut: "fadeOut",
      touchDrag: false,
      mouseDrag: false,
      nav: false,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
      ],
      autoplay: false,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 5,
        },
      },
    });
  }

  var owl = $("#ugoonews");
  owl.owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    slideBy: 1,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  // Custom Button
  $(".prevbtn").click(function () {
    owl.trigger("next.owl.carousel");
  });
  $(".nextbtn").click(function () {
    owl.trigger("prev.owl.carousel");
  });

  // $.adaptiveBackground.run();
  // lazyload();
  $("img.lazyload").lazyload();
});

$(document).ready(function () {
  $.adaptiveBackground.run();
  // lazyload();
});

//Get the button
// var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
// if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
// } else {
//     mybutton.style.display = "none";
// }
// }

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
// // document.body.scrollTop = 0;
// window.scrollTo({top: 0, behavior: 'smooth'});
// // document.documentElement.scrollTop = 0;
// }
AOS.init();
