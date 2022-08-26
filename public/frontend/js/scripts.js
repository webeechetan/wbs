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
    });

    let testimonials_content_swiper = new Swiper('.testimonials_swiper', {
      loop: true,
      speed: 1000,
      navigation: {
        nextEl: ".testimonials_slider-right-arrow",
      },
    });

    let single_slider = new Swiper('.single_slider', {
      loop: true,
      speed: 1000,
      slidesPerView: 'auto',
      spaceBetween: 0,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


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

// Same Height Js
var matchHeight = function () {
	
	function init() {
		eventListeners();
		matchHeight();
	}
	
	function eventListeners(){
		$(window).on('resize', function() {
			matchHeight();
		});
	}
	
	function matchHeight(){
		var groupName = $('[data-height]');
		var groupHeights = [];
		
		groupName.css('min-height', 'auto');
		
		groupName.each(function() {
			groupHeights.push($(this).outerHeight());
		});
		
		var maxHeight = Math.max.apply(null, groupHeights);
		groupName.css('min-height', maxHeight);
	};
	
	return {
		init: init
	};
	
} ();

$(document).ready(function() {
	matchHeight.init();
});

// Gsap Animation
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

// Smooth Scroll
let smoother = ScrollSmoother.create({
  wrapper: '#smooth-wrapper',
  content: '#smooth-content',
  smooth: 2,
  effects: true
});

let rec_work_item = gsap.utils.toArray(".float_sec_slider-item");

// let scrollTween = gsap.to(rec_work_item, {
//   xPercent: -100 * (rec_work_item.length - 1),
//   ease: "none",
//   scrollTrigger: {
//     trigger: ".rec_work",
//     pin: true,
//     scrub: 0.1,
//     snap: 1 / (rec_work_item.length - 1),
//     end: "+=2000",
//     markers: true
//   }
// });

// Banner Typing Effect
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["experiences", "experiences", "experiences"];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 1000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});

// Curve Path Animation
let ctasvgText = gsap.utils.toArray("#masterTextPath");

let scrollTween = gsap.to(ctasvgText, {
  scrollTrigger: {
    trigger: ".moveable_path",
    scrub: 1,
    start: "center bottom"
    // markers: true
  },
  attr: {
    startOffset: 400
  }
});

// Prallax Effect
(function() {
  // Contains the items you want to parallax.
  let parallaxContainer = document.getElementById('parallax-effect');
  
  // The elements you want to parallax.
  let parallaxItems = document.getElementsByClassName('parallax');
  
  // Use this value to adjust the amount of parallax in response to mouse movement.
  let fixer = 0.0030;
  
  document.addEventListener("mousemove", function(event){
      
      // get the mouseX - negative on left, positive on right
      let pageX =  event.pageX - (parallaxContainer.getBoundingClientRect().width * 0.5);
      // same here, get the y. use console.log(pageY) to see the values
      let pageY =  event.pageY - (parallaxContainer.getBoundingClientRect().height * 0.5);  
      
      // Use Attribute data-speed="value"
      for (i = 0; i < parallaxItems.length; i++) {
        let item = parallaxItems[i];
        let speedX = item.getAttribute("data-speed-x");
        let speedY = item.getAttribute("data-speed-y");
          
        // Instead of using 'TweenLite.set' you can use 'TweenLite.to' which results in a smoother initial transition (when the mouse enters) at the cost of some preformance. 
        // Change the '+' to '-' if you want to invert the parallax motion in relation to the mouse movement.
        TweenLite.set(item, {
            x: (item.offsetLeft + pageX * speedX ) * fixer,
            y: (item.offsetTop + pageY * speedY) * fixer
        });
      }
  });
})();

// Cursor hover effect
console.clear();

var background = $('.mousemove_hover_container')[0].getBoundingClientRect();
var isMouseOver = false;
var square = $('.mousemove_hover_item');
var mouse = {x: 0, y: 0, moved: false};

$('.mousemove_hover_item').each(function(i,element) {
    
  var activeSquare = $(this),
      squareData = activeSquare[0].getBoundingClientRect();

  $(element).hover(over, out);

  $(element).mousemove(function(element) {
    mouse.moved = true;
    mouse.x = element.clientX - background.left;
    mouse.y = element.clientY - background.top;
    prlx(activeSquare, -75);
  });

  // sets square back to normal position 
  function returnToNormal(i, element) {
    console.log("WORKING");
    TweenMax.to(activeSquare, 0.3, {
      delay: 0.2,
      x: squareData.x - "50vw",
      y: squareData.y - "50vh",
    });
  }
  
  function over (i, element) {
  console.log("mouse is over");
  isMouseOver = true;
  TweenMax.to(this, 0.3, {opacity: 1});
}

function out (i, element) {
  console.log("mouse is not over");
  isMouseOver = false;
  returnToNormal(i, element);
  TweenMax.to(this, 0.3, {opacity: 0});
}
})

// call parallax function
function prlx(target, mvmt) {
  TweenMax.to(target, 0.3, {
    x: (mouse.x - background.width / 2) / background.width * mvmt,
    y: (mouse.y - background.height / 2) / background.height * mvmt,
  });
}

$(window).on('resize scroll', function(){
  console.log("resized")
  background = $('.mousemove_hover_container')[0].getBoundingClientRect();
});
