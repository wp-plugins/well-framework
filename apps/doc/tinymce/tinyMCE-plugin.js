jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.portwell', {
        init : function(ed, url) {
                ed.addCommand('portwell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well Testimonial Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=portwell_template' );
                    
                });
            ed.addButton('portwell', {title : 'Well Portfolio Shortcodes', cmd : 'portwell', image: url + '/shortcode.png' });
        },   
    });
    tinymce.PluginManager.add('portwell', tinymce.plugins.portwell);
});