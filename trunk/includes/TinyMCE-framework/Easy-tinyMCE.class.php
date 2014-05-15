<?php

class Easy_TinyMCE_Class{
	public $js_url;
	public $uid;
	public $templates;
	public $title;
	
	
	function __construct(){
		add_action('init', array(&$this, 'button_register_init'));
		add_action('admin_enqueue_scripts', array(&$this, 'admin_script') );
		add_action('admin_footer', array($this, 'html') );
	}
	
	
	function admin_script(){
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-accordion');	
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
	}
	
	
	function button_register_init(){
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;

		if ( get_user_option('rich_editing') == 'true') {
			add_filter("mce_external_plugins", array(&$this, 'add_tinymce_plugin'));
			add_filter('mce_buttons', array(&$this, 'register_button'));
		}
	}
	
	
	function register_button($buttons) {
		array_push($buttons, "|", $this->uid);
		return $buttons;
	}
		

	function add_tinymce_plugin($plugin_array) {
		$plugin_array[$this->uid] = $this->js_url;
		return $plugin_array;
	}
	
	function option_list_action(){
		if($this->templates){
			foreach($this->templates as $list){
				echo '<option value="'.$list['url'].'">'.$list['name'].'</option>';
			}
		}
	}
	
	
	/*******************************************************
		Output the full HTML
	*******************************************************/
	function html(){
		?>
        <script type="text/javascript">
		 jQuery(document).ready(function($){
			//$(".zookit-accordion").accordion({heightStyle: "content"});
			$("h3.<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger").click(function(){$(this).toggleClass("active").next().slideToggle("fast");return false;});
			$('.shortcode-editor-ColorPicker').wpColorPicker();
		 });
		</script>
        <style>
			.<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger { 
				display: block; 
				color: #555; 
				display: block; 
				padding: 10px; 
				border: 1px solid #ddd; 
				background: #f9f9f9; 
				outline: 0; 
				text-transform: none; 
				letter-spacing: normal; 
				font-weight: bold; 
				font-size: 14px; 
				line-height: 1.5em; 
				margin: 0; 
				margin-top: 10px; 
				cursor: pointer; 
			}
			.<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger:after{ font-family:dashicons; content: '\f132'; float:right; padding-top: 2px; }
			.<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger:hover { background-color: #eee; text-decoration: none; }
			.<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger.active{ 
				background-color: #FFF; 
				text-decoration: none; 
				border-bottom-color:#f1f1f1;
			}
			.<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger.active:after{ content: '\f460'; }
			.<?php echo $this->uid; ?>-shortcode-editor-content { 
				display: none; 
				overflow: hidden; 
				padding: 15px; 
				border: 1px solid #ddd; 
				border-top: 0px; 
				background-color: #FFF;  
				margin-top:-4px;
			}
		</style>

		<div id="<?php echo $this->uid; ?>_template" style="display: none;">
			<div class="wrap" style="padding: 1em; margin:0;">					
				<h3><?php echo $this->title; ?></h3><br />
                
                <?php if($this->templates){ ?>
                	<div class="<?php echo $this->uid; ?>-shortcode-editor-toggle">
						<?php foreach($this->templates as $list){ ?>   
                            <h3 class="<?php echo $this->uid; ?>-shortcode-editor-toggle-trigger"><?php echo $list['name']; ?></h3>
                            <div style="display:none" class="<?php echo $this->uid; ?>-shortcode-editor-content"><?php include($list['url']); ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
                
			</div>
		</div>
        <?php	
	}
	
}