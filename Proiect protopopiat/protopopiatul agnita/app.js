/**
 * Template Name: BizLand - v1.2.0
 * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function ($) {
  'use strict';

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader')
        .delay(100)
        .fadeOut('slow', function () {
          $(this).remove();
        });
    }
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 21;
  if (window.matchMedia('(max-width: 991px)').matches) {
    scrolltoOffset += 20;
  }
  $(document).on(
    'click',
    '.nav-menu a, .mobile-nav a, .scrollto',
    function (e) {
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        if (target.length) {
          e.preventDefault();

          var scrollto = target.offset().top - scrolltoOffset;

          if ($(this).attr('href') == '#header') {
            scrollto = 0;
          }

          $('html, body').animate(
            {
              scrollTop: scrollto,
            },
            1500,
            'easeInOutExpo',
          );

          if ($(this).parents('.nav-menu, .mobile-nav').length) {
            $('.nav-menu .active, .mobile-nav .active').removeClass('active');
            $(this).closest('li').addClass('active');
          }

          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass(
              'icofont-navigation-menu icofont-close',
            );
            $('.mobile-nav-overly').fadeOut();
          }
          return false;
        }
      }
    },
  );

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function () {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate(
          {
            scrollTop: scrollto,
          },
          1500,
          'easeInOutExpo',
        );
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function () {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav
          .find('a[href="#' + $(this).attr('id') + '"]')
          .parent('li')
          .addClass('active');
      }
      if (cur_pos < 300) {
        $(
          '.nav-menu ul:first li:first, .mobile-menu ul:first li:first',
        ).addClass('active');
      }
    });
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none',
    });
    $('body').append($mobile_nav);
    $('body').prepend(
      '<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>',
    );
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function (e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass(
        'icofont-navigation-menu icofont-close',
      );
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function (e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function (e) {
      var container = $('.mobile-nav, .mobile-nav-toggle');
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass(
            'icofont-navigation-menu icofont-close',
          );
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($('.mobile-nav, .mobile-nav-toggle').length) {
    $('.mobile-nav, .mobile-nav-toggle').hide();
  }

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
      $('#topbar').addClass('topbar-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
      $('#topbar').removeClass('topbar-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
    $('#topbar').addClass('topbar-scrolled');
  }

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function () {
    $('html, body').animate(
      {
        scrollTop: 0,
      },
      1500,
      'easeInOutExpo',
    );
    return false;
  });

  // Skills section
  $('.skills-content').waypoint(
    function () {
      $('.progress .progress-bar').each(function () {
        $(this).css('width', $(this).attr('aria-valuenow') + '%');
      });
    },
    {
      offset: '80%',
    },
  );

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000,
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $('.testimonials-carousel').owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1,
  });

  // Porfolio isotope and filter
  $(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
    });

    $('#portfolio-flters li').on('click', function () {
      $('#portfolio-flters li').removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter'),
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function () {
      $('.venobox').venobox();
    });
  });

  // Portfolio details carousel
  $('.portfolio-details-carousel').owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1,
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true,
    });
  }
  $(window).on('load', function () {
    aos_init();
  });
})(jQuery);

// carusel

const track = document.querySelector('.carousel_track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel_button--right');
const prevButton = document.querySelector('.carousel_button--left');
const dotsNav = document.querySelector('.carousel_nav');
const dots = Array.from(dotsNav.children);
const slideSize = slides[0].getBoundingClientRect();
const slideWidth = slideSize.width;

// slides[0].style.left = 0;
// slides[1].style.left = slideWidth + 'px';
// slides[2].style.left = slideWidth * 2 + 'px';

const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targetSlide) => {
  track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
  currentSlide.classList.remove('current-slide');
  targetSlide.classList.add('current-slide');
};

const updateDots = (currentDot, targetDot) => {
  currentDot.classList.remove('current-slide');
  targetDot.classList.add('current-slide');
};

const hideShowArrows = (slides, prevButton, nextButton, targetIndex) => {
  if (targetIndex === 0) {
    prevButton.classList.add('is-hidden');
    nextButton.classList.remove('is-hidden');
  } else if (targetIndex === slides.length - 1) {
    prevButton.classList.remove('is-hidden');
    nextButton.classList.add('is-hidden');
  } else {
    prevButton.classList.remove(is - hidden);
    nextButton.classList.remove(is - hidden);
  }
};

//click right,move slide to right
nextButton.addEventListener('click', (e) => {
  const currentSlide = track.querySelector('.current-slide');
  const nextSlide = currentSlide.nextElementSibling;
  const currentDot = dotsNav.querySelector('.current-slide');
  const nextDot = currentDot.nextElementSibling;
  const nextIndex = slides.findIndex((slide) => slide === nextSlide);

  moveToSlide(track, currentSlide, nextSlide);
  updateDots(currentDot, nextDot);
  hideShowArrows(slides, prevButton, nextButton, nextIndex);
});
//click left,move slide to left
prevButton.addEventListener('click', (e) => {
  const currentSlide = track.querySelector('.current-slide');
  const prevSlide = currentSlide.previousElementSibling;
  const currentDot = dotsNav.querySelector('.current-slide');
  const prevDot = currentDot.previousElementSibling;
  const prevIndex = slides.findIndex((slide) => slide === prevSlide);

  moveToSlide(track, currentSlide, prevSlide);
  updateDots(currentDot, prevDot);
  hideShowArrows(slides, prevButton, nextButton, prevIndex);
});

//click nav indicators,move to slide
dotsNav.addEventListener('click', (e) => {
  const targetDot = e.target.closest('button');
  if (!targetDot) return;
  const currentSlide = track.querySelector('.current-slide');
  const currentDot = dotsNav.querySelector('.current-slide');
  const targetIndex = dots.findIndex((dot) => dot === targetDot);
  const targetSlide = slides[targetIndex];
  moveToSlide(track, currentSlide, targetSlide);
  updateDots(currentDot, targetDot);
  hideShowArrows(slides, prevButton, nextButton, targetIndex);
});

// var origin;

// var frame = 0;
// var flyBoxCount = 20;
// var flyBoxes = [];
// var flyBoxPause = 200;
// var flyBoxColors = [];

// function setup() {
//   createCanvas(windowWidth, windowHeight);
//   origin = createVector(windowWidth / 2, windowHeight / 2);

//   for (i = -flyBoxCount / 2; i < flyBoxCount / 2; i++) {
//     var box = createFlyBox(i);
//     box.start();
//     flyBoxes.push(box);
//   }

//   var getRandColor = () => {
//     return color(random(100, 200), random(100, 200), random(100, 200));
//   };

//   flyBoxColors.push(color('#f2623a'));
//   flyBoxColors.push(color('#3af262'));
//   flyBoxColors.push(color('#623af2'));
//   flyBoxColors.push(color('#f23a58'));
//   flyBoxColors.push(color('#caf23a'));
// }

// function draw() {
//   rectMode(CENTER);
//   for (i = 0; i < flyBoxCount; i++) {
//     var flyBox = flyBoxes[i];
//     flyBox.draw();
//   }

//   // WIP
//   stroke(0, 0, 0);
//   strokeWeight(40);
//   noFill();
//   translate(origin.x, origin.y);
//   rotate((sin(frame * 0.02) + cos(frame * 0.03)) * PI);
//   //rect(0, 0, 300, 300);

//   frame += 1;
// }

// function createFlyBox(offset) {
//   return {
//     offset: offset,
//     delay: 0,
//     getRandomDelay: () => {
//       return random(0, flyBoxCount) * 15;
//     },
//     steps: 0,
//     directions: [
//       createVector(-1, -1),
//       createVector(-1, 1),
//       createVector(1, -1),
//       createVector(1, 1),
//     ],
//     currentDirection: 0,
//     iteration: 0,
//     size: 80,
//     start: function () {
//       this.delay = this.getRandomDelay();
//       this.steps = -this.delay;
//     },
//     draw: function () {
//       this.steps += 20;

//       if (this.steps < 0) {
//         return;
//       }

//       fill(flyBoxColors[this.iteration]);
//       noStroke();
//       var dir = this.directions[this.currentDirection];
//       rect(
//         -dir.x * this.steps +
//           origin.x +
//           dir.x * origin.x -
//           dir.x * this.offset * (this.size * 0.75),
//         -dir.y * this.steps +
//           origin.y +
//           dir.y * origin.y +
//           dir.y * this.offset * (this.size * 0.75),
//         this.size,
//         this.size,
//       );

//       if (this.steps > max(windowWidth, windowHeight)) {
//         var newDelay = this.getRandomDelay();
//         this.steps = -flyBoxPause + this.delay - newDelay;
//         this.delay = newDelay;
//         this.currentDirection = (this.currentDirection + 1) % 4;
//         this.iteration = (this.iteration + 1) % flyBoxColors.length;
//       }
//     },
//   };
// }

// Resources;
