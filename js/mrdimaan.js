$(document).ready(function(){
    $('.sidenav').sidenav({ edge: 'right', draggable: true, inDuration: 230});

    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });

    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 7000);
    }
    autoplay();

    
      setTimeout(function(){
      $('body').addClass('loaded');
      $('h1').css('color','#222222');
      }, 1000);	
    
    
// main dropdown initialization
$('.dropdown-trigger.main-menu-item').dropdown({
  constrainWidth: false, // Does not change width of dropdown to that of the activator
  coverTrigger: false,
  alignment: 'right' // Displays dropdown with edge aligned to the left of button
});
// nested dropdown initialization
$('.dropdown-trigger.sub-menu-item').dropdown({
  coverTrigger: false,
  constrainWwidth: false, // Does not change width of dropdown to that of the activator
  hover: true, // Activate on hover
  gutter: ($('.dropdown-content').width() * 3) / 3.05 + 3, // Spacing from edge
  alignment: 'right' // Displays dropdown with edge aligned to the left of button
});
  });