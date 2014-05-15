jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.gallerywell', {
        init : function(ed, url) {
                ed.addCommand('gallerywell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well Gallery Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=gallerywell_template' );
                    
                });
            ed.addButton('gallerywell', {title : 'Well Gallery Shortcodes', cmd : 'gallerywell', image: url + '/shortcode.png' });
        },   
    });
    tinymce.PluginManager.add('gallerywell', tinymce.plugins.gallerywell);
});