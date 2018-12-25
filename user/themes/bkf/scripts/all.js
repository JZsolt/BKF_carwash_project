$(window).load(function() {
    if (window.location.hash)
    scroll(0,0);
  setTimeout(function(){scroll(0,0);},1);
});

$(document).ready(function() {
  if (window.location.hash)
    scroll(0,0);
  setTimeout(function(){scroll(0,0);},1);

  //Loading circle
$(window).load(function(){
  var position = ($(".header_div").offset().top);
  if(position >= 600){
    $(".skill_container").removeClass("opacity_null");
    $('.circlechart').circlechart();// Initialization Loading circle
    $('.circle_skill').css("opacity", "1");
  }
});

setTimeout(function(){ 
  $(window).scroll(function(){
    var position = ($(".header_div").offset().top);
    if(position >= 600){
      if($('.skill_container').hasClass('opacity_null')){
        $(".skill_container").removeClass("opacity_null");
        $('.circlechart').circlechart();// Initialization Loading circle
        $('.circle_skill').css("opacity", "1");
      }
      
    }
  });
}, 1000);

   AOS.init( {
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: true, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
  });

  //SLICK Options
  $('.homopage-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    focusOnSelect: true,
    autoplay: false,
    autoplaySpeed: 3000,
  });


  $('.open-side-nav').click(function(){
    $('.sidenav').css('left', '0');
    if($(this).hasClass('open')){
      $('.sidenav').css('left', '-250px');
    }
    $(this).toggleClass('open');
  });
  


  // Nav_bar_Sticky
  window.onscroll = function() {nav_sticky()};

  var navbar = $(".navbar");
  var sticky = navbar.offset().top;

  function nav_sticky() {
    var scrollTop = $(window).scrollTop() +37;
    if (scrollTop > sticky) { 
      $(".header_div").addClass('sticky');
      $(".navbar_home").addClass('navbar_home_sticky');
    } else {
      $(".header_div").removeClass('sticky'); 
      $(".navbar_home").removeClass('navbar_home_sticky'); 
    }
  }

  //Nav animation
  // setTimeout(function(){ 
  //   $(".navimg").children("img").css("left", "0");
  //   $(".navbar_home").css("height", "56px");
  //   setTimeout(function(){
  //     $(".navbar-collapse").css("opacity", "1");
  //   }, 400);
  // }, 700);


  if(window.location.hash){
      setTimeout(function(){ 
          var scrollTo = $(window.location.hash).offset().top - 220;
          $('body, html').animate({scrollTop: scrollTo+'px'}, 1000);
      }, 700);
  }

  /*
  Smooth scroll functionality for anchor links (animates the scroll
  rather than a sudden jump in the page)
  */
  $('.js_nav_scroll').click(function(e){
    // e.preventDefault();
    var target = $($(this).attr('href'));
    if(target.length){
      var scrollTo = target.offset().top - 220;
      $('body, html').animate({scrollTop: scrollTo+'px'}, 1000);
    }
  });

  // contact input FIX
  $(":input").change(function(){
    if($(this).val().length>0){
        $(this).next().addClass("focus_class");
    }else{
        $(this).next().removeClass("focus_class");
    }
  });
  
  //send mail
  $(".send_mail").closest(".wrapper").addClass("mail_send");

});
