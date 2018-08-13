/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
window.addEventListener("resize", function(){
  if (document.documentElement.clientWidth < 992) {
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("nav").style.top = "0";
      } else {
        document.getElementById("nav").style.top = "-63px";
      }
      prevScrollpos = currentScrollPos;
    }
    
    if( document.body.className.match('logged-in') ) { 
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("nav").style.top = "32px";
        } else {
          document.getElementById("nav").style.top = "-63px";
        }
        prevScrollpos = currentScrollPos;
      }
    }
  }
}, false);

// For the typewriter text animation on home screen
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.06em solid #f79447}";
    document.body.appendChild(css);
};

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
