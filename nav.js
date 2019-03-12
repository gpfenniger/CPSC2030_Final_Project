// Switch all to slide
if ($(window).width() < 480) {
  $('nav').on('mouseover', () => {
    $('.nav-menu').css('display', 'inline');
  });

  $('nav').on('click', () => {
    $('.nav-menu').slideToggle();
  });

  $('nav').on('mouseout', () => {
    $('.nav-menu').css('display', 'none');
  });
}
