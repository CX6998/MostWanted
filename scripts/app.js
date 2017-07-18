/* Continue with email button */
$('#register').click(function(){
   $('ul.social_login').hide();
   $('#hidden').show();
});

/* Back */
$('#regback').click(function(){
   $('#hidden').hide();
   $('ul.social_login').show();
});

/* Submit */
/* $('input').on('keydown',function(){
    if ($('input').length > 0) 
    {
      $('#submit').css("opacity", "1");
      $('#submit').css("pointer-events", "auto");
    }
    else if ($('input').length < 0)
    {
      $('#submit').css("opacity", "0.5");
      $('#submit').css("pointer-events", "none");
    }
  }); */

/* Vertical tab menu */
$(function() {
  $('.about-menu nav a').on('click', function() {
    show_content($(this).index());
  });
  
  show_content(0);

  function show_content(index) {
    // Make the content visible
    $('.about-menu .content.visible').removeClass('visible');
    $('.about-menu .content:nth-of-type(' + (index + 1) + ')').addClass('visible');

    // Set the tab to selected
    $('.about-menu nav a.selected').removeClass('selected');
    $('.about-menu nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
  }
});

/* Highlighting on index 
$('h2 a').on('click', function(){
    $('h2 a.selected').removeClass('selected');
    $(this).addClass('selected');
});*/


var h2 = $("h2 a");

h2.on("click", function(){
    if ($(this).is(".selected")) {
      $(this).removeClass("selected");
    } else {
      h2.removeClass("selected")
      .filter(this).addClass("selected")
    }
});