jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.peowell', {
        init : function(ed, url) {
                ed.addCommand('peowell', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( 'Well People Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=peowell_template' );
                    
                });
            ed.addButton('peowell', {title : 'Well People Shortcodes', cmd : 'peowell', image: url + '/shortcode.png' });
        },   
    });
    tinymce.PluginManager.add('peowell', tinymce.plugins.peowell);
});