import './bootstrap';

// untuk navbar
$(document).ready(function () {
    $(".navbar-burger").on("click", function () {
      $(".navbar-menu").toggleClass("hidden");
    });

    // Menutup burger menu setelah tautan di dalamnya ditekan
    $(".navbar-menu a").on("click", function () {
      $(".navbar-menu").addClass("hidden");
    });
  });











