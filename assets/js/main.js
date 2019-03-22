if(document.getElementById("typewriter")!=null){
  // New TypeWriter
  document.addEventListener('DOMContentLoaded',function(event){
    
    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
      // chekc if text isn't finished yet
      if (i < (text.length)) {
        // add next character to h1
       document.querySelector(".new-typewriter").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
  
        // wait for a while and call this function again for next character
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 100);
      }
      // text finished, call callback if there is a callback function
      else if (typeof fnCallback == 'function') {
        // call callback after timeout
        setTimeout(fnCallback, 700);
      }
    }
    // start a typewriter animation for a text in the dataText array
     function StartTextAnimation(i) {
       if (typeof dataText[i] == 'undefined'){
          setTimeout(function() {
            StartTextAnimation(0);
          }, 20000);
       }
       // check if dataText[i] exists
      if (i < dataText[i].length) {
        // text exists! start typewriter animation
       typeWriter(dataText[i], 0, function(){
         // after callback (and whole text has been animated), start next text
         StartTextAnimation(i + 1);
       });
      }
    }
    // start the text animation
    StartTextAnimation(0);
  });

}

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
