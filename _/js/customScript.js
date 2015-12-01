$(function() {

  //highlight the current nav
  //$("#home a:contains('house')").parent().addClass('active');
  //$("#availability a:contains('availability')").parent().addClass('active');
  //$("#rates a:contains('rates')").parent().addClass('active');
  //$("#activities a:contains('activities')").parent().addClass('active');
  //$("#comments a:contains('comments')").parent().addClass('active');
  //$("#contact a:contains('contact us')").parent().addClass('active');

  var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');


  //make menus drop atomatically
  $('ul.nav li.dropdown').hover(function()  {
    $('.dropdown-menu', this).fadeIn();
  }, function() {

  $('.dropdown-menu', this).fadeOut('fast');
  });//hover
});

$('.carousel').carousel();

});//jQuery is loaded

 
