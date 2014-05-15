jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.shortwell', {
        init : function(ed, url) {
                ed.addCommand('shortwell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=shortwell_template' );
                    
                });
            ed.addButton('shortwell', {title : 'Well Shortcodes', cmd : 'shortwell', image: url + '/shortcodes.png' });
        },   
    });
    tinymce.PluginManager.add('shortwell', tinymce.plugins.shortwell);
});