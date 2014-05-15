jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.logowell', {
        init : function(ed, url) {
                ed.addCommand('logowell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well Logos Shotrcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=logowell_template' );
                    
                });
            ed.addButton('logowell', {title : 'Well Logos Shotrcodes', cmd : 'logowell', image: url + '/shortcode.png' });
        },   
    });
    tinymce.PluginManager.add('logowell', tinymce.plugins.logowell);
});