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

$('.nav-menu li').on('mouseover', function() {
  $(this)
    .children()
    .css('color', 'white');
});

$('.nav-menu li').on('mouseleave', function() {
  $(this)
    .children()
    .css('color', 'black');
});
