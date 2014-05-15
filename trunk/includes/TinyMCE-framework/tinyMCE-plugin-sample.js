jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.____id_____', {
        init : function(ed, url) {
                ed.addCommand('____id_____', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
					
					var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
					W = W - 80;
					H = H - 120;
					tb_show( '____title_____', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=____id______template' );
                    
                });
            ed.addButton('____id_____', {title : '____title_____', cmd : '____id_____', image: url + '/____icon_____' });
        },   
    });
    tinymce.PluginManager.add('____id_____', tinymce.plugins.____id_____);
});