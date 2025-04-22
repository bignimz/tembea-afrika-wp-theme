document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".main-nav");

  toggle.addEventListener("click", () => {
    nav.classList.toggle("active");
  });
});

jQuery(document).ready(function ($) {
  // Helper function to initialize Owl Carousels
  function initializeOwlCarousel(selector, options) {
    $(selector).each(function () {
      $(this).owlCarousel(options);
    });
  }

  // Common Owl Carousel options
  const commonOptions = {
    autoplay: false,
    dots: true,
    loop: false,
    navText: ["&larr;", "&rarr;"],
    responsiveClass: true,
    smartSpeed: 450,
    onInitialized: updateNavButtons,
    onChanged: updateNavButtons,
  };

  // Initialize carousels with specific settings
  initializeOwlCarousel(".owl-carousel", {
    ...commonOptions,
    margin: 30,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
      },
    },
  });

  initializeOwlCarousel(".swhd_slide_row", {
    ...commonOptions,
    margin: 130,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 1,
        nav: true,
      },
      1000: {
        items: 2,
        nav: true,
      },
    },
  });

  // Initialize each carousel separately
  initializeOwlCarousel(".liswhd_left_col", {
    ...commonOptions,
    margin: 130,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 1,
        nav: true,
      },
      1000: {
        items: 1,
        nav: true,
      },
    },
  });

  initializeOwlCarousel(".liswhd_right_col_2", {
    ...commonOptions,
    margin: 130,
    dots: false,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 1,
        nav: true,
      },
      1000: {
        items: 1,
        nav: true,
      },
    },
  });

  // Update navigation buttons state
  function updateNavButtons(event) {
    const items = event.item.count;
    const item = event.item.index;

    // Find the specific carousel and its navigation buttons
    const $carousel = $(event.target);
    const $prevButton = $carousel.parent().find(".owl-prev");
    const $nextButton = $carousel.parent().find(".owl-next");

    // Toggle disabled class on navigation buttons
    if (item === 0) {
      $prevButton.addClass("disabled");
    } else {
      $prevButton.removeClass("disabled");
    }

    if (item >= items - event.page.size) {
      $nextButton.addClass("disabled");
    } else {
      $nextButton.removeClass("disabled");
    }
  }

  // Hover effect for .bc_safari_1 elements
  $(".bc_safari_1").each(function () {
    $(this)
      .mouseenter(function () {
        toggleSafariFooter(this, true);
      })
      .mouseleave(function () {
        toggleSafariFooter(this, false);
      });
  });

  // Toggle .bc_safari_footer height and content visibility
  function toggleSafariFooter(element, isMouseEnter) {
    const title = $(element).find(".bc_safari_1_title");
    const subtitle = $(element).find(".bc_safari_subtitle");
    const footer = $(element).find(".bc_safari_footer");
    const cta = $(element).find(".bc_safari_footer_cta");

    title.toggle();
    subtitle.toggle();

    footer.css({
      height: isMouseEnter ? "80%" : "auto",
      transition: "height 0.5s ease",
    });

    cta.toggleClass("hidden", !isMouseEnter);
  }

  AOS.init();
});
