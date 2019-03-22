// Tooltip Code (for service plans)
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Mobile Nav Icon change
$('#navbar-toggler').click(function() {
    $("i", this).toggleClass("fa-times fa-bars");
});

// Blog Article Image Fade on Scroll
$(window).scroll(function(){
  $(".article-header-img").css("opacity", .99 - $(window).scrollTop() / 500);
});

// Smooth Scroll on click
$(".navbar-second").find("a").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top - 120
    }, 2000);
});

if(document.getElementById("second-nav")!=null){
  // Fix second nav top on scroll
  window.onscroll = function fixedScroll() {secNavScroll()};
  
  var header = document.getElementById("second-nav");
  var sticky = header.offsetTop - 63.22;
  
  function secNavScroll() {
    if (window.pageYOffset > sticky) {
      header.classList.add("fixed-top-second");
    } else {
      header.classList.remove("fixed-top-second");
    }
  }
}
