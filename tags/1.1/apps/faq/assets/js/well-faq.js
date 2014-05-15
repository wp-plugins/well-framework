/* jQuery CounTo */
jQuery(function($){$(document).ready(function(){

	if( $(".faqwell-faq .faqwell-faq-title").hasClass('active') ){
		$(".faqwell-faq .faqwell-faq-title.active").closest('.faqwell-faq').find('.faqwell-faq-details').show();
	}
	$(".faqwell-faq .faqwell-faq-title").click(function(){
		if( $(this).hasClass('active') ){
			$(this).removeClass("active").closest('.faqwell-faq').find('.faqwell-faq-details').slideUp(200);
		}
		else{
			$(this).addClass("active").closest('.faqwell-faq').find('.faqwell-faq-details').slideDown(200);
		}
	});
});
});