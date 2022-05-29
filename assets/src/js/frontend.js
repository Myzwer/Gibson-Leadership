import "../sass/frontend.scss";

// NAV MENU
(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".nav-dropdown").toggle();
      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  }); // end DOM ready
})(jQuery); // end jQuery

// Add modal id and class for... well the modal.
jQuery(document).ready(function ($) {
  $(".nav-list > li:last-child").attr("id", "one");
});
jQuery(document).ready(function ($) {
  $(".nav-list > li:last-child").attr("class", "button");
});

// MODAL POPUP
(function ($) {
  // The JS modal for all "mark your calendar" buttons.
  window.onload = function () {
    $(".button").click(function () {
      const buttonId = $(this).attr("id");
      $("#modal-container").removeAttr("class").addClass(buttonId);
      $("body").addClass("modal-active");
    });

    $("#modal-container").click(function () {
      $(this).addClass("out");
      $("body").removeClass("modal-active");
    });
  };
})(jQuery); // end jQuery
