$(document).ready(function() {
      APP.cookies.set("placeholder", "true");
  var NavY = $(".Menu-top").offset().top;
  var stickyNav = function() {
    var ScrollY = $(window).scrollTop();

    if (ScrollY > NavY) {
      $(".Menu-top").addClass("Menu-top--sticky");
    } else {
      $(".Menu-top").removeClass("Menu-top--sticky");
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
  /**
   * =======================================
   * Function: VIEWPORTCHECKER FOR PROGRESS BAR
   * =======================================
   */
  $(".Invest-counter__value-line").viewportChecker({
    callbackFunction: function(elem, action) {
      const $elemWrapper = $(elem).closest(".Invest-counter");
      const $Value = $elemWrapper.find(".Invest-counter__source__value");
      const countTo = $(elem).attr("data-to");
      const $percent = $elemWrapper.find(".Invest-counter__source__percent");
      const percentCountTo = $percent.data("to");

      $(elem).css("width", $(elem).data("slideTo") + "%");

      $({ countNum: 0 }).animate(
        {
          countNum: countTo
        },

        {
          duration: 800,
          easing: "linear",
          step: function() {
            $Value.text(Math.floor(this.countNum));
          },
          complete: function() {
            $Value.text(String(this.countNum).replace(".", ","));
            //alert('finished');
          }
        }
      );
      $({ percentCountNum: 0 }).animate(
        {
          percentCountNum: percentCountTo
        },

        {
          duration: 800,
          easing: "linear",
          step: function() {
            $percent.text(Math.floor(this.percentCountNum));
          },
          complete: function() {
            $percent.text(this.percentCountNum);
            //alert('finished');
          }
        }
      );
    }
  });

  $(".Projects__card, .News .Card:not(.Card--single)").on("click", function(e) {
    $(this)
      .find("a")[0]
      .click();
  });

  $(".Projects__card a, .News .Card a").on("click", function(e) {
    e.stopPropagation();
  });

  $(".close-popup").on("click", function(e) {
    e.preventDefault();
    $.magnificPopup.close();
  });

  $(".Gallery__list img").on("click", function(e) {
    const $gallery = $(this).closest(".Gallery");
    const $active = $gallery.find(".Gallery__active").find("img");
    const data = $(this).data();

    $active.attr("src", data.medium).data("large", data.large);
    e.preventDefault();
  });
  $(".Gallery__active").on("click", function(e) {
    const data = $(this)
      .find("img")
      .data();
    $.magnificPopup.open({
      items: {
        src: data.large
      },
      type: "image"
    });
  });
  $(".Cookies__close").on("click", function(e) {
    e.preventDefault();
    APP.cookies.hide();
  });
  $("button.Cookies__close").on("click", function(e) {
    e.preventDefault();
    APP.cookies.hide();
    APP.cookies.set("roualCookieAgree", "true", 30);
  });
  $(".Select-custom").on("click", function(e) {
    APP.select.showOptions.call(this);
  });
  $(".Select-custom__options__option[data-value]").on("click", function() {
    const data = $(this).data();
    APP.select.setSelected.call(this, { data });
  });
  $(".Search-box__close").on("click", function(e) {
    e.preventDefault();
    APP.search.hide();
  });
  $(".Menu-top__search-btn").on("click", function(e) {
    e.preventDefault();
    $(".Search-box").toggleClass("Search-box--open");
  });
  $(".Scroll-up").on("click", function() {
    APP.scrollUp();
  });
  $(".Contact-form-mini__icon").on("click", function() {
    $(".Contact-form-mini__inner").toggleClass(
      "Contact-form-mini__inner--active"
    );
    $(this).toggleClass("Contact-form-mini__icon--active");
  });
  $(".Menu-top__toggle-btn").on("click", function(e) {
    e.preventDefault();
    $(".Menu-top__list").slideToggle();
  });
  // Declare Carousel jquery object
  var owl = $(".Slider .owl-carousel");
  var owlNews = $(".News .owl-carousel");

  // Carousel initialization
  owl.owlCarousel({
    loop: true,
    margin: 0,
    navSpeed: 500,
    nav: false,
    autoplay: true,
    rewind: false,
    items: 1,
    dots: false,
    animateOut: "fadeOut",
    autoplayHoverPause: true,
    navText: []
  });

  owlNews.owlCarousel({
    loop: true,
    margin: 40,
    nav: false,
    autoplay: true,
    items: 3,
    dots: false,
    navSpeed: 1000,
    navText: [],
    autoplayHoverPause: true,
    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1
      },
      // breakpoint from 480 up
      600: {
        items: 2
      },
      // breakpoint from 768 up
      768: {
        items: 3
      }
    }
  });

  if (cookie) {
    APP.cookies.hide();
  }
  $(".Slider__arrow--right").on("click", function() {
    owl.trigger("next.owl.carousel");
  });
  $(".Slider__arrow--left").on("click", function() {
    owl.trigger("prev.owl.carousel");
  });

  $(".News__arrow--right").on("click", function(e) {
    e.preventDefault();
    owlNews.trigger("next.owl.carousel");
  });
  $(".News__arrow--left").on("click", function(e) {
    e.preventDefault();
    owlNews.trigger("prev.owl.carousel");
  });

  $("[data-date]").each(function() {
    var date = new Date($(this).data("date")).getTime();
    setCountDownTimer($(this), date);
  });

  $(".select-options a").on("click", function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this)
      .siblings("a")
      .removeClass("active");
    $(this)
      .addClass("active")
      .closest(".select-options")
      .hide()
      .closest(".custom-select-div")
      .find("label")
      .text($(this).text());
  });
});

const APP = {
  select: {
    showOptions() {
      $(this).toggleClass("Select-custom--active");
    },
    setSelected({ data }) {
      $(this)
        .closest(".Select-custom")
        .find(".Select-custom__selected")
        .text(data.value);
    },
    hide() {
      $(this).removeClass("Select-custom--active");
    }
  },
  scrollUp() {
    $("html, body").animate({ scrollTop: 0 }, "medium");
  },
  search: {
    hide() {
      $(".Search-box").removeClass("Search-box--open");
    },
    show() {
      $(".Search-box").addClass("Search-box--open");
    }
  },
  cookies: {
    hide() {
      $(".Cookies").css({ left: "calc(-100% - 60px)", opacity: "0" });
    },
    get(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(";");
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    },
    set(name, value, days) {
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }
  }
};

const cookie = APP.cookies.get("roualCookieAgree");

if (cookie) {
  APP.cookies.hide();
}
/**
 * =======================================
 * Function: count down timer
 * =======================================
 */
var setCountDownTimer = function($wrapper, deadline) {
  var $dayCont = $wrapper.find(".Count-down-timer__day > span");
  var $hourCont = $wrapper.find(".Count-down-timer__hour > span");
  var $minuteCont = $wrapper.find(".Count-down-timer__minute > span");
  var $secondCont = $wrapper.find(".Count-down-timer__second > span");

  var x = setInterval(function() {
    var now = new Date().getTime();
    var t = deadline - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);

    $dayCont.html(days);
    $hourCont.html(hours);
    $minuteCont.html(minutes);
    $secondCont.html(seconds);

    if (t < 0) {
      clearInterval(x);
      $dayCont.html("0");
      $hourCont.html("0");
      $minuteCont.html("0");
      $secondCont.html("0");
    }
  }, 1000);
};

$(document).mouseup(function(e) {
  var container = $(".Select-custom");

  // if the target of the click isn't the container nor a descendant of the container
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    APP.select.hide.call(container);
  }

  var $contactForm = $(".Contact-form-mini");

  // if the target of the click isn't the $contactForm nor a descendant of the $contactForm
  if (!$contactForm.is(e.target) && $contactForm.has(e.target).length === 0) {
    $(".Contact-form-mini__inner").removeClass(
      "Contact-form-mini__inner--active"
    );
    $(".Contact-form-mini__icon").removeClass(
      "Contact-form-mini__icon--active"
    );
  }
});

var observer = new IntersectionObserver(
  function(entries) {
    if (entries[0].intersectionRatio === 0)
      document.querySelector(".Menu-top").classList.add("Menu-top--sticky");
    else if (entries[0].intersectionRatio === 1)
      document.querySelector(".Menu-top").classList.remove("Menu-top--sticky");
  },
  { threshold: [0, 1] }
);

//observer.observe(document.querySelector(".Top-pane"));
