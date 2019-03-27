/*
  Filename: Navbar Script
  Purpose:
    All of the JQuery code associated with the
    navigation side bar; including but not limited
    to: changing text color of list hover, 
    touch colour changes for mobile, changing
    anchor and list item colouring with focus,
    adding and removing listeners for mobile
    and desktop views and navigating the bar using
    arrow keys.
  100% Necessary Quip: Thar she blows
*/

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

$('.nav-menu a').on('focus', function() {
  $(this)
    .css('color', 'white')
    .parent()
    .css('background-color', '#669999');
});

$('.nav-menu a').on('focusout', function() {
  $(this)
    .css('color', 'black')
    .parent()
    .css('background-color', 'white');
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
    let index = getNavIndex();
    switch (e.key) {
      case 'ArrowDown':
        focused = true;
        focusNew(loopIndex(index, 1));
        break;
      case 'ArrowUp':
        focused = true;
        focusNew(loopIndex(index, -1));
        break;
    }

    if (focused) e.preventDefault();
  }
});

function getNavIndex() {
  let index = $('.nav-menu a:focus')
    .parent()
    .index();
  return index;
}

function loopIndex(index, change) {
  if (index + change < 0) {
    return 3;
  } else if (index + change == 4) {
    return 0;
  }
  console.log(index + change);
  return index + change;
}

function focusNew(index) {
  $('.nav-menu')
    .children()
    .eq(index)
    .children()
    .focus();
}
