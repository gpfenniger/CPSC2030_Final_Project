var mobileMaxSize = 480;
if ($(window).width() <= mobileMaxSize) mobileListeners(); // Initial size check on load
$(window).on('resize', function() {
  // checks on every resize to change listeners
  if ($(window).width() <= mobileMaxSize) mobileListeners();
  else removeMobileListeners();
});

// On hover over menu items
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

function mobileListeners() {
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

function removeMobileListeners() {
  $('nav').off('mouseover');
  $('nav').off('mouseout');
  $('nav').off('click');
  $('.nav-menu').css('display', 'inline');
}

$('.nav-menu li:first-of-type')
  .siblings()
  .children()
  .attr('tabindex', '-1');
$(window).on('keydown', function(e) {
  if ($('.nav-menu a').is(':focus')) {
    let focused = false;
    let index = $('.nav-menu a:focus')
      .parent()
      .index();

    switch (e.key) {
      case 'ArrowDown':
        focused = true;
        focusNew(index + 1);
        break;
      case 'ArrowUp':
        focused = true;
        focusNew(index - 1);
        break;
    }

    if (focused) e.preventDefault();
  }
});

function getNavIndex() {}

function focusNew(index) {
  $('.nav-menu')
    .children()
    .eq(index)
    .children()
    .focus();
}
