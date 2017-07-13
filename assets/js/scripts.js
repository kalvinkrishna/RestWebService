		// navigation slide-in
$(document).ready(function() {
  $('.pull').hide();
  $('.nav_slide_button').click(function() {
    $('.pull').slideToggle();
  });
});