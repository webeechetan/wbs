(function ($) {
  $(document).ready(function () {
    "use strict";

    // BACK BUTTON RELOAD
    window.onpageshow = function (event) {
      if (event.persisted) {
        window.location.reload()
      }
    };

    // HAMBURGER AUDIO
    document.getElementById("hamburger-menu").addEventListener('click', function (e) {
      document.getElementById("hamburger-hover").play();
    });

    // CONTACT FORM INPUT LABEL
    function checkForInput(element) {
      const $label = $(element).siblings('span');
      if ($(element).val().length > 0) {
        $label.addClass('label-up');
      } else {
        $label.removeClass('label-up');
      }
    }

    // The lines below are executed on page load
    $('input, textarea').each(function () {
      checkForInput(this);
    });

    // The lines below (inside) are executed on change & keyup
    $('input, textarea').on('change keyup', function () {
      checkForInput(this);
    });


    // SWIPER SLIDER
    var mySwiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '"><svg><circle r="18" cx="20" cy="20"></circle></svg></span>';
        },
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })


    // PAGE TRANSITION
    $('body a').on('click', function (e) {
      if (typeof $(this).data('fancybox') == 'undefined' || $(this).attr('target') == '_blank') {
        e.preventDefault();
        var url = this.getAttribute("href");
        if (url.indexOf('#') != -1) {
          var hash = url.substring(url.indexOf('#'));

          if ($('body ' + hash).length != 0) {
            $('.transition-overlay').removeClass("active");
            $(".hamburger").toggleClass("open");
            $("body").toggleClass("overflow");
            $(".navigation-menu").removeClass("active");
            $(".navigation-menu .inner ul").css("transition-delay", "0s");
            $(".navigation-menu .inner blockquote").css("transition-delay", "0s");
            $(".navigation-menu .bg-layers span").css("transition-delay", "0.3s");

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 1000);

          }
        } else {
          $('.transition-overlay').toggleClass("active");
          setTimeout(function () {
            window.location = url;
          }, 600);

        }
      }
    });


    // GO TO TOP
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $('.gotop').fadeIn();
      } else {
        $('.gotop').fadeOut();
      }
    });

    $('.gotop').on('click', function (e) {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });


    // STICKY SIDE LOGO
    $(window).on("scroll touchmove", function () {
      $('.logo').toggleClass('sticky', $(document).scrollTop() > 300);
    });


    // HIDE NAVBAR
    $(window).on("scroll touchmove", function () {
      $('.navbar').toggleClass('hide', $(document).scrollTop() > 30);
    });


    // DATA BACKGROUND IMAGE
    var pageSection = $(".swiper-slide");
    pageSection.each(function (indx) {
      if ($(this).attr("data-background")) {
        $(this).css("background-image", "url(" + $(this).data("background") + ")");
      }
    });


    // HAMBURGER
    $(function () {
      var $burger = $('.burger');
      var $bars = $('.burger-svg__bars');
      var $bar = $('.burger-svg__bar');
      var $bar1 = $('.burger-svg__bar-1');
      var $bar2 = $('.burger-svg__bar-2');
      var $bar3 = $('.burger-svg__bar-3');
      var isChangingState = false;
      var isOpen = false;
      var burgerTL = new TimelineMax();

      function burgerOver() {

        if (!isChangingState) {
          burgerTL.clear();
          if (!isOpen) {
            burgerTL.to($bar1, 0.5, {
                y: -2,
                ease: Elastic.easeOut
              })
              .to($bar2, 0.5, {
                scaleX: 0.6,
                ease: Elastic.easeOut,
                transformOrigin: "50% 50%"
              }, "-=0.5")
              .to($bar3, 0.5, {
                y: 2,
                ease: Elastic.easeOut
              }, "-=0.5");
          } else {
            burgerTL.to($bar1, 0.5, {
                scaleX: 1.2,
                ease: Elastic.easeOut
              })
              .to($bar3, 0.5, {
                scaleX: 1.2,
                ease: Elastic.easeOut
              }, "-=0.5");
          }
        }
      }

      function burgerOut() {
        if (!isChangingState) {
          burgerTL.clear();
          if (!isOpen) {
            burgerTL.to($bar1, 0.5, {
                y: 0,
                ease: Elastic.easeOut
              })
              .to($bar2, 0.5, {
                scaleX: 1,
                ease: Elastic.easeOut,
                transformOrigin: "50% 50%"
              }, "-=0.5")
              .to($bar3, 0.5, {
                y: 0,
                ease: Elastic.easeOut
              }, "-=0.5");
          } else {
            burgerTL.to($bar1, 0.5, {
                scaleX: 1,
                ease: Elastic.easeOut
              })
              .to($bar3, 0.5, {
                scaleX: 1,
                ease: Elastic.easeOut
              }, "-=0.5");
          }
        }
      }

      function showCloseBurger() {
        burgerTL.clear();
        burgerTL.to($bar1, 0.3, {
            y: 6,
            ease: Power4.easeIn
          })
          .to($bar2, 0.3, {
            scaleX: 1,
            ease: Power4.easeIn
          }, "-=0.3")
          .to($bar3, 0.3, {
            y: -6,
            ease: Power4.easeIn
          }, "-=0.3")
          .to($bar1, 0.5, {
            rotation: 45,
            ease: Elastic.easeOut,
            transformOrigin: "50% 50%"
          })
          .set($bar2, {
            opacity: 0,
            immediateRender: false
          }, "-=0.5")
          .to($bar3, 0.5, {
            rotation: -45,
            ease: Elastic.easeOut,
            transformOrigin: "50% 50%",
            onComplete: function () {
              isChangingState = false;
              isOpen = true;
            }
          }, "-=0.5");
      }

      function showOpenBurger() {
        burgerTL.clear();
        burgerTL.to($bar1, 0.3, {
            scaleX: 0,
            ease: Back.easeIn
          })
          .to($bar3, 0.3, {
            scaleX: 0,
            ease: Back.easeIn
          }, "-=0.3")
          .set($bar1, {
            rotation: 0,
            y: 0
          })
          .set($bar2, {
            scaleX: 0,
            opacity: 1
          })
          .set($bar3, {
            rotation: 0,
            y: 0
          })
          .to($bar2, 0.5, {
            scaleX: 1,
            ease: Elastic.easeOut
          })
          .to($bar1, 0.5, {
            scaleX: 1,
            ease: Elastic.easeOut
          }, "-=0.4")
          .to($bar3, 0.5, {
            scaleX: 1,
            ease: Elastic.easeOut,
            onComplete: function () {
              isChangingState = false;
              isOpen = false;
            }
          }, "-=0.5");
      }

      $burger.on('click', function (e) {
        $("body").toggleClass("overflow");
        $(".navigation-menu").toggleClass("active");
        $(".navbar").toggleClass("light");
        if (!isChangingState) {
          isChangingState = true;

          if (!isOpen) {
            showCloseBurger();
          } else {
            showOpenBurger();
          }
        }

      });

      $burger.hover(burgerOver, burgerOut);

    });


    // MASONRY
    var $container = $('.layout1 ul').imagesLoaded(function () {
      $container.isotope({
        rec_work_itemelector: '.layout1 ul li',
        layoutMode: 'masonry'
      });
    });


  });


  // SCROLL BG COLOR
  $(window).scroll(function () {
    var $window = $(window),
      $body = $('body'),
      $panel = $('section, footer, header');

    var scroll = $window.scrollTop() + ($window.height() / 3);

    $panel.each(function () {
      var $this = $(this);
      if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

        $body.removeClass(function (index, css) {
          return (css.match(/(^|\s)color-\S+/g) || []).join(' ');
        });

        $body.addClass('color-' + $(this).data('color'));
      }
    });

  }).scroll();


  // WOW ANIMATION 
  wow = new WOW({
    animateClass: 'animated',
    offset: 50
  });
  wow.init();


  // COUNTER
  $(document).scroll(function () {
    $('.odometer').each(function () {
      var parent_section_postion = $(this).closest('section').position();
      var parent_section_top = parent_section_postion.top;
      if ($(document).scrollTop() > parent_section_top - 300) {
        if ($(this).data('status') == 'yes') {
          $(this).html($(this).data('count'));
          $(this).data('status', 'no')
        }
      }
    });
  });
  //gallery filter
  $(document).ready(function(){
    $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');
      if(value == "all") {
        $('.filter').removeClass('hidden');
        $('.filter').show();
      }
      else {
        $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide();
        $('.filter').filter('.'+value).show();
      }
      $('.filter-button').removeClass('active');
      $(this).addClass('active');
  });
});

$(document).ready(function(){
  $('.accordion-title').click(function(){
    $(this).toggleClass('show');
  });
});

})(jQuery);


// Gsap Animation
gsap.registerPlugin(ScrollTrigger);

let rec_work_item = gsap.utils.toArray(".rec_work_slider-item");

let scrollTween = gsap.to(rec_work_item, {
  xPercent: -100 * (rec_work_item.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".rec_work",
    pin: true,
    scrub: 0.1,
    snap: 1 / (rec_work_item.length - 1),
    end: "+=3000",
    markers: true
  }
});