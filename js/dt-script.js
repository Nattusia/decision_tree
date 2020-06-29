jQuery(document).ajaxComplete(function(event, request, settings) {
  var list = jQuery('[id ^= "book-navigation"] ul.dropdown-menu');
  var path = jQuery('article.node').attr('about');

  list.find('a[href = "' + path + '"]').parent('li').addClass('active');
});
