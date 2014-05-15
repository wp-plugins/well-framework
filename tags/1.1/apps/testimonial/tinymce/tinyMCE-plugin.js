jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.tmwell', {
        init : function(ed, url) {
                ed.addCommand('tmwell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well Testimonial Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=tmwell_template' );
                    
                });
            ed.addButton('tmwell', {title : 'Well Testimonial Shortcodes', cmd : 'tmwell', image: url + '/shortcode.png' });
        },   
    });
    tinymce.PluginManager.add('tmwell', tinymce.plugins.tmwell);
});