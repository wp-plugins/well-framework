(function( $ ){
    $.fn.stickyMenu = function( options ) {
		
        var $this = this,
        defaults = {
            'left' : 0,
            'top' : 1,
            'menu_offset_top' : 0
        },
        settings = $.extend({}, defaults, options);
        $(window).on('scroll.stickyMenu', function(){
            if ($(window).scrollTop() > settings.menu_offset_top)
            { 
                $this.css({ 
                    'position': 'fixed',
                    'top':settings.left,
                    'left':settings.top,
                    'zIndex':9999
                });
            }
            else
            {
                $this.css({ 
                    'position': 'relative',
                }); 
            }
        });
        return $this;
    };
})(jQuery);

jQuery(document).ready(function($){ 
	  $('.docwell-single-nav a, .docwell-backto').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 500);
			return false;
		  }
		}
	  });
	
	$('.docwell-single-nav').stickyMenu();
});