jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.faqwell', {
        init : function(ed, url) {
                ed.addCommand('faqwell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well FAQ Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=faqwell_template' );
                    
                });
            ed.addButton('faqwell', {title : 'Well FAQ Shortcodes', cmd : 'faqwell', image: url + '/shortcode.png' });
        },   
    });
    tinymce.PluginManager.add('faqwell', tinymce.plugins.faqwell);
});