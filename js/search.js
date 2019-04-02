$('.search-btn').on('click', function() {
  $('.search-wrapper').css('display', 'block');
  $('.searchform #s').focus();
});
$(".search-wrapper button[name='exit-search-btn']").click(function() {
  $('.search-wrapper').css('display', 'none');
});
