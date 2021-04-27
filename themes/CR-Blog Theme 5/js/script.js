/*
 
dependencies:
 
//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js
//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js
//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js
 
*/

// $(".carousel").swipe({

//     swipe: function (event, direction, distance, duration, fingerCount, fingerData) {

//         if (direction == 'left') $(this).carousel('next');
//         if (direction == 'right') $(this).carousel('prev');

//     },
//     allowPageScroll: "vertical"

// });
// side bar**************

// this function runs after window load
function onInit() {
  ensureLabelOnFormGroup();
  ensureAltTag();
  ensureEmailLabel();
}

jQuery(document).ready(function ($) {
  if ($(".sidebarBtn").length)
    $(".sidebarBtn").click(function () {
      $(".sidebar").toggleClass("active");
      $(".sidebarBtn").toggleClass("toggle");
    });

  // side bsr***************

  // slikslider js
  $(".slider").slick({
    infinite: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000,
  });

  // initHorizontalScroll(".home .bigstory-section .c-card-slider-container");
  initPostSlider(".home .bigstory-section .c-card-slider-container");
});

// slikslider js

// blog tab manu
$(document).ready(function () {
  $(".nav-tabs a").click(function () {
    $(this).tab("show");
  });
  if ($(".nav-tabs a").length) $(".nav-tabs a")[0].click();
});

// blog tab manu

function initHorizontalScroll(selector) {
  document.querySelectorAll(selector).forEach((target) => {
    function scrollHorizontally(e) {
      e = window.event || e;
      var delta = Math.max(-1, Math.min(1, e.wheelDelta || -e.detail));
      target.scrollLeft -= delta * 40; // Multiplied by 40
      e.preventDefault();
    }
    if (target.addEventListener) {
      // IE9, Chrome, Safari, Opera
      target.addEventListener("mousewheel", scrollHorizontally, false);
      // Firefox
      target.addEventListener("DOMMouseScroll", scrollHorizontally, false);
    } else {
      // IE 6/7/8
      target.attachEvent("onmousewheel", scrollHorizontally);
    }
  });

  var target = $(".home .bigstory-section");
  var cardSize = target.find(".card-elements").width();

  // console.log({cardSize});

  target.find(".nav-button:first-of-type").click(function () {
    let scrollAmmount = $(selector).scrollLeft() - cardSize * 3;
    // console.log({"prev": scrollAmmount});
    $(selector).animate({ scrollLeft: scrollAmmount }, 800);
  });

  target.find(".nav-button:last-of-type").click(function () {
    let scrollAmmount = $(selector).scrollLeft() + cardSize * 3;
    // console.log({"next": scrollAmmount});
    $(selector).animate({ scrollLeft: scrollAmmount }, 800);
  });
}

function initPostSlider(selector) {
  $(selector).slick({
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    prevArrow: document.querySelector('.home .bigstory-section .nav-button:first-of-type'),
    nextArrow: document.querySelector('.home .bigstory-section .nav-button:last-of-type'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
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
}

jQuery(document).ready(function ($) {
  let images = document.getElementsByTagName("img");
  for (var i = 0; i < images.length; i++) addAlt(images[i]);
  //adds alt value from file name
  function addAlt(el) {
    if (el.getAttribute("alt")) return;

    url = el.src;
    let filename = url.substring(url.lastIndexOf("/") + 1);

    if (!filename) {
      filename = "contentrally-img";
    }

    filename = filename.split(".").slice(0, -1).join(".");

    el.setAttribute("alt", filename);
    //console.log("added alt: " + filename);
  }

  /********************************************/
  $("a").each(function () {
    //External link open in new tab
    var a = new RegExp("/" + window.location.host + "/");
    if (this.href && !a.test(this.href)) {
      $(this).click(function (event) {
        event.preventDefault();
        event.stopPropagation();
        window.open(this.href, "_blank");
      });
    }
  });
  /******** Header forms**********/
  $("#open-search i").on("click", function () {
    $(".search-form").slideDown("fast");
    $("#open-search, .header-subscribe").hide();
  });
  $("#close-search i").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(".search-form").hide("fast");
    $("#open-search, .header-subscribe").show();
  });

  /****************** Menu ***************/
  $(".header-top .header-left-links li").addClass("header-left-links-li");
  $(".header-top .header-left-links li a").addClass("header-left-links-a");
  $(".footer-main-sec ul.foot-col-ul li a").addClass("oswald");

  /******************** Mega Menu **********************/
  $("#navbarSupportedcontent li").addClass("nav-item");
  $("#navbarSupportedcontent li a").addClass("upper nav-link");
  //$('body.blog .artical-content p').addClass('blog-latter');

  $(".dropdown-menu").on("click", function (e) {
    e.stopPropagation();
  });

  $(".dropdown-menu .list-links li a").click(function (e) {
    e.preventDefault();
    $(".dropdown-menu .defaultshow, .show-dat").hide();
    var d = $(this).data("name");
    var defaultid = $("#" + d + "-post")
      .parents(".dropdown-menu")
      .find(".defaultShow")
      .attr("id");
    console.log(defaultid);
    $("#" + defaultid).hide();
    $("#" + d + "-post").show();
  });

  $(".dropdown-menu li a").click(function () {
    $(".dropdown-menu.show").find("li").removeClass("active-data");
    $(this).closest("li").addClass("active-data");
  });

  $(".nav-item i").click(function () {
    $(".dropdown-menu").removeClass("show");
    $(this).next().toggleClass("show");
  });

  $("li.nav-item > a").click(function () {
    $("li.nav-item.show > a")
      .not(this)
      .closest("li")
      .prev("a")
      .removeClass("open");

    if ($(this).closest("li").prev("a").hasClass("open"))
      $(this).closest("li").prev("a").removeClass("open");
    else $(this).closest("li").prev("a").addClass("open");
  });
  /******************** Mega Menu End **********************/

  $(".single .expand p").hide();
  $(".single .expand h2").on("click", function () {
    $(this).next("p").toggle("slow");
  });

  /********************** Social links *******************/

  $(".heateorSssSharingRound i.heateorSssFacebookBackground").addClass(
    "largeBtn"
  );
  $(".largeBtn").css("width", "100% !important");
});

function ensureLabelOnFormGroup() {
  try {
    console.groupCollapsed("Adding label to form-groups");

    document.querySelectorAll(".form-group").forEach((group) => {
      const control =
        group.querySelector(".form-control") || group.querySelector("input");
      const label = group.querySelector("label");

      if (!control || !control.getAttribute("placeholder")) return; // form-group is not compatible
      if (!control.getAttribute("id")) {
        // give new id
        const uniqueId = `${new Date().getTime()}-${control
          .getAttribute("placeholder")
          .replace(/\s+/g, "")}`;
        control.setAttribute("id", uniqueId);
      }
      if (label && label.getAttribute("for") === control.getAttribute("id"))
        return; // evrything is fine

      const newLable = document.createElement("label");
      newLable.setAttribute("for", control.getAttribute("id"));
      newLable.classList.add("sr-only");
      newLable.innerText = `${control.getAttribute("placeholder")}`;
      group.prepend(newLable);

      // logging
      console.log("Added label: ", newLable);
    });

    console.groupEnd();
  } catch (error) {
    console.log(error);
  }
}

function ensureEmailLabel() {
  document.querySelectorAll(".es-field-wrap label").forEach((field) => {
    let label = field.querySelector("input").getAttribute("name");
    if (!label) return;

    let span = document.createElement("SPAN");
    span.innerText = label;
    span.classList.add("sr-only");

    field.appendChild(span);
  });
}

function ensureAltTag() {
  try {
    console.groupCollapsed("Adding alt attributes to images");

    document.querySelectorAll("img").forEach((img) => {
      if (img.getAttribute("alt")) return; // image is having alt tag

      const newAlt = img
        .getAttribute("src")
        .replace(/^.*[\\\/]/, "")
        .split(".")
        .slice(0, -1)
        .join();
      img.setAttribute("alt", newAlt + " image");

      // logging
      console.log("Added alt: ", newAlt);
    });

    console.groupEnd();
  } catch (error) {
    console.log(error);
  }
}

// /* event listeners */

window.addEventListener("load", function () {
  onInit();
});
