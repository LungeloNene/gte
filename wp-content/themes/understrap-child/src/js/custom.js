jQuery(document).ready(function($) {
  console.log( "ready!" );

    $('#btn').on('click', function(){

      // Clear the overlay elements and play activate the YouTube video
          $('.hero--image_full').css('opacity','0');
          $('.hero--content').css('opacity','0');
          $("#video")[0].src += "&autoplay=1";

      // Fade the curtain out
      setTimeout(function(){ 
          $('.black-curtain').css('opacity','0');
          $('.hero--content').css('visibility','hidden');
          $('.hero--image_full').css('visibility','hidden');
          setTimeout(function(){ 
              $('.black-curtain').css('visibility','hidden');
          }, 2000);
      }, 2500);
    });

  //   $(window).scroll(
  //     {
  //         previousTop: 0
  //     }, 
  //     function () {
  //     var currentTop = $(window).scrollTop();
  //     if (currentTop < this.previousTop) {
  //       $(".wrapper-navbar").removeClass('hide');
  //     } else {
  //       $(".wrapper-navbar").addClass('hide');
  //     }
  //     this.previousTop = currentTop;
  // });


});