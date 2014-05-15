<?php
class Easy_TinyMCE_Class_content{
	public $id;
	public $shortcode;
	public $content;
	public $options;
		
	/*******************************************************
		Create the Template ID
	*******************************************************/
	function template_id(){
		return $this->id.'_template';
	}
	
	
	
	/*******************************************************
		Create the Template ID
	*******************************************************/
	function default_field_options(){
		return array(
					'id' => '',
					'field' => '',
					'title' => '',
					'std' => '',
					'type' => '',
					'des' => '',
					'option' => array(),
					'post_type' => 'post',
					'taxonomy' => 'category',
					'multiple' => false,
					'content' => false
				);
	}
	
	
	
	/*******************************************************
		Output the full HTML
	*******************************************************/
	function html(){
		?>
       <script type="text/javascript">
			function <?php echo $this->id; ?>_insertTemplate() {
				<?php $this->shortcode_ja_vars(); ?>
				/** Send shortcode to editor */
				<?php if($this->content == true): ?>
					window.send_to_editor('[<?php echo $this->shortcode; ?> <?php echo $this->shortcode_arguments(); ?>]<?php $this->field_content(); ?>[/<?php echo $this->shortcode; ?>]');
				<?php else: ?>
					window.send_to_editor('[<?php echo $this->shortcode; ?> <?php echo $this->shortcode_arguments(); ?> /]');
				<?php endif; ?>
			}
		</script>
        <div id="<?php echo $this->template_id(); ?>" class="zookit-shortcode-editor">
			<div class="wrap">					
				<?php echo $this->form(); ?>
                
				<input type="button" id="<?php echo $this->id; ?>-insert-template" class="button-primary" value="<?php echo __( 'Insert Shortcode', 'well_textdomain' ); ?>" onclick="<?php echo $this->id; ?>_insertTemplate();" />
				<a id="<?php echo $this->id; ?>-cancel-template" class="button-secondary" onclick="tb_remove();" title="<?php echo __( 'Cancel', 'well_textdomain' ); ?>" style="float:right;"><?php echo __( 'Cancel', 'well_textdomain' ); ?></a>
			</div>
		</div>
        <?php	
	}
	
	function shortcode_arguments(){
		$options = $this->options;
		
		if(is_array($options)){
			foreach($options as $option){
				$default = $this->default_field_options();
				$option = array_merge($default, $option);
				
				if($option['content'] == false){
					echo "".$option['id']."=\"'+".$this->id."_".$option['id']."+'\" ";
				}
			}
		}
	}
	
	function shortcode_ja_vars(){
		$options = $this->options;
		
		if(is_array($options)){
			foreach($options as $option){
				echo "var ".$this->id."_".$option['id']." = jQuery( '#".$this->id."_".$option['id']."' ).val(); ";
			}
		}
	}
	
	
	function field_content(){
		$options = $this->options;
		
		if(is_array($options)){
			foreach($options as $option){
				$default = $this->default_field_options();
				$option = array_merge($default, $option);
		
				if( $option['content'] == true ){ echo "'+".$this->id."_".$option['id']."+'"; }
			}
		}
	}
	
	
	function form(){
		$options = $this->options;
		
		if(is_array($options)){
			echo '<table width="100%">';
				foreach($options as $option){
					
					if($option['field'] == 'text'){
						$this->field_text($option);
					}
					elseif($option['field'] == 'textarea'){
						$this->field_textarea($option);
					}
					elseif($option['field'] == 'select'){
						$this->field_select($option);
					}
					elseif($option['field'] == 'post-select'){
						$this->field_post_select($option);
					}
					elseif($option['field'] == 'tax-select'){
						$this->field_tax_select($option);
					}
					elseif($option['field'] == 'color'){
						$this->field_color($option);
					}
					
				}
			echo '</table>';
		}	
	}
	
	
	function field_text($data){
		$default = $this->default_field_options();
		$data = array_merge($default, $data);
		$uid = $this->id.'_'.$data['id'];
		?>
        <tr>
        	<td>
        		<label for="<?php echo $uid; ?>"><strong><?php echo $data['title']; ?></strong></label><br />
        		<input type="text" name="<?php echo $uid; ?>" value="<?php echo $data['std']; ?>" id="<?php echo $uid; ?>" style="width:100%; margin-top:3px;"/>
                <p style="margin-top:0; color:#999; font-style:italic;"><?php echo $data['des']; ?></p>
        	</td>
        </tr>
        <?php
	}
	
	
	function field_color($data){
		$default = $this->default_field_options();
		$data = array_merge($default, $data);
		$uid = $this->id.'_'.$data['id'];
		?>
        <tr>
        	<td>
        		<label for="<?php echo $uid; ?>" style="margin-bottom:3px;"><strong><?php echo $data['title']; ?></strong></label><br />
        		<input class="shortcode-editor-ColorPicker" type="text" name="<?php echo $uid; ?>" value="<?php echo $data['std']; ?>" id="<?php echo $uid; ?>""/>
                <p style="margin-top:0; color:#999; font-style:italic;"><?php echo $data['des']; ?></p>
        	</td>
        </tr>
        <?php
	}
	
	
	function field_textarea($data){
		$default = $this->default_field_options();
		$data = array_merge($default, $data);
		$uid = $this->id.'_'.$data['id'];
		?>
        <tr>
        	<td>
        		<label for="<?php echo $uid; ?>"><strong><?php echo $data['title']; ?></strong></label><br />
                <textarea name="<?php echo $uid; ?>" id="<?php echo $uid; ?>" rows="4" style="width:100%; margin-top:3px;"><?php echo $data['std']; ?></textarea>	
                <p style="margin-top:0; color:#999; font-style:italic;"><?php echo $data['des']; ?></p>
        	</td>
        </tr>
        <?php
	}
	
	
	function field_select($data){
		$default = $this->default_field_options();
		$data = array_merge($default, $data);
		$uid = $this->id.'_'.$data['id'];
		?>
        <tr>
        	<td>
        		<label for="<?php echo $uid; ?>"><strong><?php echo $data['title']; ?></strong></label><br />
                <select name="<?php echo $uid; ?>" id="<?php echo $uid; ?>" <?php if($data['multiple'] == true){ echo 'multiple="true"'; } ?> style="width:100%; margin-top:3px;">
                	
                    <?php
					if(is_array($data['option'])){
						foreach($data['option'] as $option){
							echo '<option value="'.$option.'" '.selected( $data['std'], $option, false).'>'.$option.'</option>';
						}
					}
					?>
                </select>
                <p style="margin-top:0; color:#999; font-style:italic;"><?php echo $data['des']; ?></p>
        	</td>
        </tr>
        <?php
	}
	
	
	function field_post_select($data){
		$default = $this->default_field_options();
		$data = array_merge($default, $data);
		$uid = $this->id.'_'.$data['id'];
		?>
        <tr>
        	<td>
        		<label for="<?php echo $uid; ?>"><strong><?php echo $data['title']; ?></strong></label><br />
                <select name="<?php echo $uid; ?>" id="<?php echo $uid; ?>" <?php if($data['multiple'] == true){ echo 'multiple="true"'; } ?> style="width:100%; margin-top:3px;">
                	<option value="" selected="selected"></option>
                    <?php
					global $post;
                    $args = array(
						'post_type' =>$data['post_type'],
						'numberposts' => '-1'
					);
					$ids = get_posts($args);
					$count=0;
					
					foreach($ids as $post) : setup_postdata($post);
                    $count++;
						?>
                        <option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
                        <?php
					endforeach; wp_reset_postdata();
					?>
                </select>
                <p style="margin-top:0; color:#999; font-style:italic;"><?php echo $data['des']; ?></p>
        	</td>
        </tr>
        <?php
	}
	
	
	function field_tax_select($data){
		$default = $this->default_field_options();
		$data = array_merge($default, $data);
		$uid = $this->id.'_'.$data['id'];
		?>
        <tr>
        	<td>
        		<label for="<?php echo $uid; ?>"><strong><?php echo $data['title']; ?></strong></label><br />
                <select name="<?php echo $uid; ?>" id="<?php echo $uid; ?>" <?php if($data['multiple'] == true){ echo 'multiple="true"'; } ?> style="width:100%; margin-top:3px;">
                	<option value="" selected="selected"></option>
                    <?php
						$terms = get_terms($data['taxonomy'], 'orderby=count&hide_empty=0');
						$terms_count = count($terms);
						
						$cat_name = '';
						
						if ( $terms_count > 0 ){
							foreach ( $terms as $term ) {
								echo '<option value="'.$term->slug.'">'.$term->name.'</option>';	
							}	
						}
					?>
                </select>
                <p style="margin-top:0; color:#999; font-style:italic;"><?php echo $data['des']; ?></p>
        	</td>
        </tr>
        <?php
	}

}