$(function() {
  // Contact Form
  $('select').on('change', function() {
    if ($('select').val() === 'default') $('.comment-body').slideUp();
    else $('.comment-body').slideDown();
  });

  $('#message').submit(function(e) {
    if ($('textarea').val() == '') {
      e.preventDefault();
      alert('Comment field was empty, message failed to send');
    }
  });

  // Post hook
  $('.single figure')
    .siblings()
    .wrapAll("<div class='text-wrapper'></div>");

  // Message us form
  $('.message-btn').click(function(e) {
    e.preventDefault();
    $('.feedback-wrapper').slideToggle();
  });

  // Search field
  $('.search-btn').on('click', function() {
    $('.search-wrapper').css('display', 'block');
    $('.searchform #s').focus();
  });
  $(".search-wrapper button[name='exit-search-btn']").click(function() {
    $('.search-wrapper').css('display', 'none');
  });
});
