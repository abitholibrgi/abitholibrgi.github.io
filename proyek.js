
function toggleOnScroll() {
        if ($(window).scrollTop() >100){
            $('.navbar').addClass( "biru");
        }
        else {
            $('.navbar').removeClass("biru");
        }
}

$( document ).ready(function() {
    
    toggleOnScroll();
    $(window).scroll(function(){
        toggleOnScroll();
    });
});

// punya text scrol
$(document).ready(function(){       
  var scroll_pos = js-scroll-trigger;
  $(document).scroll(function() { 
      scroll_pos = $(this).scrollTop();
      if(scroll_pos > 100) {
          $('.js-scroll-trigger').css('color', 'white');
      } else {
          $('.js-scroll-trigger').css('color', 'white');
      }
  });
});

// $(document).ready(function(){
//     $(window).scroll(function(){
//       if ($(window).scrollTop() > 100){
//           $('.navbar').toggleClass( "biru");
//       }
//    });
//   });
var waypoint = new Waypoint({
    element: document.getElementsByClassName('.kades'),
    handler: function(direction) {
      notify('I am 20px from the top of the window')
    },
    offset: 20 
  })

// punya dasboard desa
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $('#galeri')
  .fadeOut(0) // immediately hide element
  .waypoint(function(direction) {
    if (direction === 'down') {
      $(this.element).fadeIn()
    }
    else {
      $(this.element).fadeOut()
    }
  }, {
    offset: 'bottom-in-view'
  })


 
console. log('ok');

// modal galeri
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}