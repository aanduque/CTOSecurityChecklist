// Isotope filtering
//========================================
var $grid = $('.checklist').isotope();
$grid.isotope({
  filter: "*"
})

function get_width(elements) {

  var totalWidth = 0;

  elements.each(function (index) {
    totalWidth += parseInt($(this).outerWidth(), 10) + 12;
  });

  return totalWidth;

}

// Show seed items
$('.filter-bar li').on( 'click', function() {

  var $index = $(this).index();

  var $targets = $(this).parent().children(':lt('+ ($index + 1) +')');

  console.log($targets);

  var $classes = $targets.map(function() {
    return $(this).attr('class');
  });

  console.log(typeof $classes);

  $('.filter-bar li').removeClass('selected');

  $('.filter-bar ul').removeClass();

  $(this).parent().addClass('selected-' + ($index + 1));

  // Change the size of the block
  var $size = get_width($targets);

  console.log($size);

  $('.filler').css('width', $size);

  $grid.isotope({
    transitionDuration: 300,
    filter: $classes.length ? '.' + $classes.toArray().join(', .') : '',
  });

});

// Check
//========================================
$('.check').click(function(){
  if ($(this).hasClass('checked')) {
    $(this).removeClass('checked');
    $(this).parent().find('.expend-bar').removeClass('checked');
  }
  else {
    $(this).addClass('checked');
    $(this).parent().find('.expend-bar').addClass('checked');
  }
});

// Expend/collapse
//========================================
$('.btn, .expend-bar').click(function(){
  var parent = $(this).parent().parent();
  var body = $(parent).find(".body");

  if ($(parent).hasClass('expend')) {
    $(parent).removeClass('expend');
    $(body).slideUp(300);
    $grid.isotope();
  }
  else {
    $(parent).addClass('expend');
    $(body).slideDown(300);
    $grid.isotope();
  }
});

// Open/close menu mobile
//========================================
$('.burger').click(function(){
  $('.mobile-menu').show();
  setTimeout(function(){
    $('.mobile-menu').addClass('open');
  }, 100);
});
$('.close, .mobile-menu .nav a').click(function(){
  $('.mobile-menu').removeClass('open');

  setTimeout(function(){
    $('.mobile-menu').hide();
  }, 600);
});

// Open share links in a popup
//========================================
$('.social a, .social-mob a').click(function(e){
  e.preventDefault();
  function mypopup(link) {
    mywindow = window.open(link, "Share it!", "location=1,status=1,scrollbars=1,  width=900,height=700");
    mywindow.moveTo(window.innerWidth/4, 100);
  }
  mypopup($(this).attr('href'));
});

// Scrollspy
//========================================
$(function() {
  var lastId,
      topMenu = $("nav ul"),
      topMenuHeight = topMenu.outerHeight()+300,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

  // Bind click handler to menu items
  // so we can get a fancy scroll animation
  menuItems.click(function(e){
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - 120;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 1000);
    e.preventDefault();
  });

  // Bind to scroll
  $(window).scroll(function(){
     // Get container scroll position
     var fromTop = $(this).scrollTop()+topMenuHeight;

     // Get id of current scroll item
     var cur = scrollItems.map(function(){
       if ($(this).offset().top < fromTop)
         return this;
     });
     // Get the id of the current element
     cur = cur[cur.length-1];
     var id = cur && cur.length ? cur[0].id : "";

     if (lastId !== id) {
         lastId = id;
         // Set/remove active class
         menuItems
           .parent().removeClass("active")
           .end().filter("[href='#"+id+"']").parent().addClass("active");
     }
  });
});
