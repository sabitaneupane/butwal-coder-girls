  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();

    if ($(window).scrollTop() > 100 ){
      $('.navbar-bg').addClass('scrollNavEffectshow');
    } else {
      $('.navbar-bg').removeClass('scrollNavEffectshow');
    };    

  });
 $(document).scroll(function() {
   if ($(window).scrollTop() >= 100 ){
     $('.butwalcodergirls_logo_white').css('display' , 'none');
     $('.butwalcodergirls_logo_color').css('display' , 'block');
   } else {
     $('.butwalcodergirls_logo_white').css('display' , 'block');
     $('.butwalcodergirls_logo_color').css('display' , 'none');
   };  
 });
 