import "../sass/frontend.scss";

// NAV MENU
(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready

    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      // Remove "active-dropdown" class from other anchor elements
      $("nav ul li a").not(this).removeClass("active-dropdown");

      // Toggle the "active-dropdown" class on the clicked anchor element
      $(this).toggleClass("active-dropdown");

      // Toggle the visibility of the sibling dropdown
      const mediaQuery = window.matchMedia("(max-width: 64em)");

      // Check the screen size using the media query
      if (mediaQuery.matches) {
        // Mobile: Use slideToggle()
        $(this).siblings(".nav-dropdown").slideToggle();
      } else {
        // Desktop: Use toggle()
        $(this).siblings(".nav-dropdown").toggle();
      }

      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();

      e.stopPropagation();
    });

    // Clicking away from dropdown will remove the dropdown class and active-dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
      $("nav ul li a:not(:only-child)").removeClass("active-dropdown");
    });

    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });

    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  });
})(jQuery); // end jQuery

// Add modal id and class for... well the modal.
/* jQuery(document).ready(function ($) {
  $(".nav-list > li:last-child").attr("id", "one");
});
jQuery(document).ready(function ($) {
  $(".nav-list > li:last-child").attr("class", "button");
}); */

// MODAL POPUP
// (function ($) {
  // The JS modal for all "mark your calendar" buttons.
/*  window.onload = function () {
    $(".button").click(function () {
      const buttonId = $(this).attr("id");
      $("#modal-container").removeAttr("class").addClass(buttonId);
      $("body").addClass("modal-active");
    });

    $(document).on("click", "#modal-container", function (event) {
      if (event.target.closest(".modal")) return;
      $("#modal-container").addClass("out");
      $("body").removeClass("modal-active");
    });
  };
})(jQuery);*/ // end jQuery
